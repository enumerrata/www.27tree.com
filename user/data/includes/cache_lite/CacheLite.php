<?php

class Cache_M {
    /*
     * 设置缓存目录
     * @var string $_cache_dir
     */

    private $_cache_dir;

    /**
     * 保存缓存key
     * @var string $_c_key
     */
    private $_c_key;

    /**
     * 设置缓存生命周期
     * @var int $_cache_time
     */
    private $_cache_time;

    /**
     * 缓存头验证正则表达式
     * @var preg $_cache_header_preg
     */
    private $_cache_header_preg = '/<__cache@(\d{10})-@(\d{10})@(\w{0,255})__>/';
    private $_cache_header;

    public function __construct($cache_dir, $cache_time = 3600) {
        $this->_cache_dir = $cache_dir;
        $this->_cache_time = $cache_time;
    }

    public function is_cached($_c_key) {
        echo 'xxxxxxxxxxxx';
        $file_name = $this->get_cache_filename($_c_key);
        if (is_file($file_name)) {
            $handle = @fopen($file_name, "r");
            if ($handle) {
                while (!feof($handle)) {
                    $buffer = fgets($handle);
                    $matchs = array();
                    if (preg_match($this->_cache_header_preg, $buffer, $matchs)) {
                        var_dump($matchs);
                        return true;
                        // cache_header check pass
                    } else {
                        // cache_header check falid
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
        ob_start();
        ob_implicit_flush(false);
        return true;
    }

    public function cache_end() {
        $data = ob_get_contents();
        ob_end_clean();
        // 保存操作
        $this->write_cache_file($data, $this->_c_key);
        echo($data);
    }

    public function read_cache_file($_c_key) {
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
            }
            fclose($handle);
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
        return $this->_cache_dir . $_c_key;
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
