<?php

class Cache_M {
    /*
     * 设置缓存目录
     * @var string $_cache_dir
     */

    private $_cache_dir = './cache/';

    /**
     * 保存缓存key
     * @var string $_c_key
     */
    private $_c_key;

    /**
     * 设置缓存生命周期
     * @var int $_cache_time
     * @default = 3600
     */
    private $_cache_time = 3600;

    /**
     * 缓存头验证正则表达式
     * @var preg $_cache_header_preg
     */
    private $_cache_header_preg = '/<__cache@(\d{10})-@(\d{10})@(.*)__>/';
    private $_cache_header;
    private $_gzip = false;

    const ZIP_GZIP = true;

    public function __construct($gzip = false) {
        if ($gzip)
            $this->_gzip = $gzip;
    }

    public function setCacheLifeTime($time) {
        $this->_cache_time = $time;
    }

    public function setCacheDir($_dir) {
        $this->_cache_dir = $_dir;
    }

    public function setCacheKey($_key) {
        $this->_c_key = $_key;
    }

    public function is_cached($_c_key) {
        $file_name = $this->get_cache_filename($_c_key);
        if (is_file($file_name)) {
            $handle = @fopen($file_name, "r");
            if ($handle) {
                while (!feof($handle)) {
                    $buffer = fgets($handle);
                    $matches = array();
                    // <__cache@1364619628-@1364619928@bl-1__>
                    if (preg_match_all($this->_cache_header_preg, $buffer, $matches, PREG_PATTERN_ORDER)) {
                        return time() - $matches[2][0] < 0 ? true : false;
                    } else {
                        return false;
                    }
                }
                fclose($handle);
            }
            return true;
        } else {
            return false;
        }
    }

    public function cache_start($_c_key) {
        $this->_c_key = $_c_key;
        if ($this->_gzip) {
            if (Extension_Loaded('zlib')) {
                Ob_Start('ob_gzhandler');
            }
            else
                ob_start();
        } else {
            ob_start();
        }
        header("Content-type: text/html");
        return true;
    }

    public function cache_end() {
        $data = ob_get_contents();
        // 保存操作
        $this->write_cache_file($data, $this->_c_key);
        ob_end_flush();
    }

    public function read_cache_file($_c_key, $_exit = false) {
        if ($this->_gzip) {
            if (Extension_Loaded('zlib')) {
                Ob_Start('ob_gzhandler');
            }
            else
                ob_start();
        } else {
            ob_start();
        }
        $fn = $this->get_cache_filename($_c_key);
        if (is_file($fn)) {
            $handle = @fopen($fn, "r");
            if ($handle) {
                $_ch_check = false;
                while (!feof($handle)) {
                    if (!$_ch_check) {
                        $_ch_check = true;
                        $_t = fgets($handle, strlen($this->generate_cache_header($_c_key)) + 1);
                        unset($_t);
                        continue;
                    } else {
                        echo fgets($handle);
                    }
                }
                ob_end_flush();
            }
            fclose($handle);
            $_exit && exit(0);
            return true;
        } else {
            return false;
        }
    }

    public function write_cache_file($data, $_c_key) {

        $fn = $this->get_cache_filename($_c_key);

        $fp = fopen($fn, "w+");

        if (flock($fp, LOCK_EX)) { // 进行排它型锁定
            fwrite($fp, $this->generate_cache_header($_c_key));
            fwrite($fp, $data);
            flock($fp, LOCK_UN); // 释放锁定
        } else {
            echo "Couldn't lock the file !";
        }

        fclose($fp);
    }

    private function get_cache_filename($_c_key) {
        // $key . hash . cache
        substr($this->_cache_dir, -1) != DIRECTORY_SEPARATOR && $this->_cache_dir .= DIRECTORY_SEPARATOR;
        return $this->_cache_dir . $_c_key . '^' . md5($_c_key) . '.cache.html';
    }

    private function generate_cache_header($_c_key) {
        if (null === $this->_cache_header) {
            $t = time();
            $this->_cache_header = sprintf('<__cache@%s-@%s@%s__>', $t, $t + $this->_cache_time, $_c_key);
        }
        return $this->_cache_header;
    }

}

?>
