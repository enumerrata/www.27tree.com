<?php

date_default_timezone_set('PRC');
@define("DOMAIN", "http://www.27tree.com");
@define("IMG_PATH_ROOT", "/img/");
@define("IMG_PATH_CL_USER", "/user/data/head-img/");
@define("IMG_PATH_CL_DEFAULT", "/minbbs/default/headimg/");
@define("IMG_PATH_CL_ROOT", "/img/");
@define("IMG_PATH_CL_BOOK", "/not/mybook/data/book_image_lib/");
@define("IMG_PATH_LOCAL_USER", "/user/data/head-img/");
@define("IMG_PATH_LOCAL_DEFAULT", "/minbbs/default/headimg/");
@define("IMG_PATH_LOCAL_BOOK", "/not/mybook/data/book_image_lib/");
interface G_I {

    public static function getHeadimg($uid = -1);

    public static function ClearDir($dir, $pattern = "*.* ");

    public static function getUserName($uid = -1);

    public static function upCredit($uid, $upl);

    public static function getLastWeekDate();

    public static function OwnerCheck($uid, $artid, $permit_Admin = false);
}

class G implements G_I {

    public static function get_real_ip() {//getIP!
        $ip = false;
        if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        }
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ips = explode(", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
            if ($ip) {
                array_unshift($ips, $ip);
                $ip = FALSE;
            }
            for ($i = 0; $i < count($ips); $i) {
                if (!eregi("^(10|172\.16|192\.168)\.", $ips[$i])) {
                    $ip = $ips[$i];
                    break;
                }
            }
        }
        return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
    }

    public static function GrabImage($url, $filename = "") {
        file_put_contents($filename, file_get_contents($url));
    }

    public static function utf8_strlen($string = null) {
        $match = null;
        preg_match_all("/./us", $string, $match);
        return count($match[0]);
    }

    public static function ClearDir($dir, $pattern = "*.* ") {
        $deleted = false;
        $pattern = str_replace(array("\* ", "\? "), array(".* ", ". "), preg_quote($pattern));
        if (substr($dir, -1) != "/ ")
            $dir.= "/ ";
        if (is_dir($dir)) {
            $d = opendir($dir);
            while ($file = readdir($d)) {
                if (is_file($dir . $file) && ereg("^ " . $pattern . "$ ", $file)) {
                    if (unlink($dir . $file))
                        $deleted[] = $file;
                }
            }
            closedir($d);
            return $deleted;
        }
        else
            return 0;
    }

    public static function getRelativeBookType($nottype) {
        $hashMap = array(
            'java' => 'java',
            'c' => 'cocpp',
            'php' => 'php',
            'web' => 'web',
            'mobile' => 'android',
            'database' => 'database'
        );
        if (array_key_exists($nottype, $hashMap)) {
            return $hashMap[$nottype];
        } else
            return false;
    }

    public static function getHeadimg($uid = -1, $size = null) {
        $ROOT = $_SERVER['DOCUMENT_ROOT'];
        $size = NULL;
        #$size = null !== $size ? '_' . $size . 'x' : '';
        if ($uid == -1)
            return IMG_PATH_CL_ROOT . "tavatar.gif"; // 初始头像
        if (is_file($ROOT . IMG_PATH_LOCAL_USER . $uid . "_head_default.em")) {
            $imgname = file_get_contents($ROOT . IMG_PATH_LOCAL_USER . $uid . "_head_default.em");
            return IMG_PATH_CL_DEFAULT . $imgname; // 云端自定义默认头像
        }
        if (is_file($ROOT . IMG_PATH_LOCAL_USER . $uid . "_head.jpg"))
            return IMG_PATH_CL_USER . $uid . "_head.jpg"; //云端自定义头像
        if (is_file($ROOT . IMG_PATH_LOCAL_USER . $uid . "_head.fromqq")) {
            $imgname = file_get_contents($ROOT . IMG_PATH_LOCAL_USER . $uid . "_head.fromqq");
            return $imgname;
        }
        return IMG_PATH_CL_ROOT . "tavatar.gif";
    }

    public static function upCredit($uid, $upl) {
        if (!class_exists(Conn_mysql))
            include_once $_SERVER['DOCUMENT_ROOT'] . '/mod/Conn_mysql.class.php';
        $mysql_credit = Conn_mysql::getInstance();
        if ($mysql_credit->query("UPDATE client_link SET credit = credit + $upl WHERE uid = $uid;"))
            return true;
        else
            return false;
    }

    public static function Ctruncate($sourcestr, $cutlength) {
        /**
         * 中英文混合字符串截取 ， 结尾自动添加 省略符号 ...
         */
        $returnstr = '';
        $i = 0;
        $n = 0;
        $str_length = strlen($sourcestr); //字符串的字节数
        while (($n < $cutlength) && ($i <= $str_length)) {
            $temp_str = substr($sourcestr, $i, 1);
            $ascnum = Ord($temp_str); //得到字符串中第$i位字符的ascii码
            if ($ascnum >= 224) {    //如果ASCII位高与224，
                $returnstr = $returnstr . substr($sourcestr, $i, 3); //根据UTF-8编码规范，将3个连续的字符计为单个字符
                $i = $i + 3;            //实际Byte计为3
                $n++;            //字串长度计1
            } elseif ($ascnum >= 192) { //如果ASCII位高与192，
                $returnstr = $returnstr . substr($sourcestr, $i, 2); //根据UTF-8编码规范，将2个连续的字符计为单个字符
                $i = $i + 2;            //实际Byte计为2
                $n++;            //字串长度计1
            } elseif ($ascnum >= 65 && $ascnum <= 90) { //如果是大写字母，
                $returnstr = $returnstr . substr($sourcestr, $i, 1);
                $i = $i + 1;            //实际的Byte数仍计1个
                $n++;            //但考虑整体美观，大写字母计成一个高位字符
            } else {                //其他情况下，包括小写字母和半角标点符号，
                $returnstr = $returnstr . substr($sourcestr, $i, 1);
                $i = $i + 1;            //实际的Byte数计1个
                $n = $n + 0.5;        //小写字母和半角标点等与半个高位字符宽...
            }
        }
        if ($str_length > $cutlength) {
            $returnstr = $returnstr . "..."; //超过长度时在尾处加上省略号
        }
        return $returnstr;
    }

    public static function getLastWeekDate() {
        $date = date("Y-m-d");
        $time = strtotime("$date + 1 weeks ago");
        return strftime("%Y-%m-%d", $time);
    }

    public static function getUserName($uid = 0) {
        if ($uid > 0) {
            $mysql = @class_exists(con_mysql_query) ? new con_mysql_query() : Conn_mysql::getInstance();
            @$uid = mysql_real_escape_string($uid);
            @$re = mysql_fetch_array($mysql->query("SELECT username FROM client WHERE uid = $uid LIMIT 1;"), MYSQL_ASSOC);
            return $re['username'] != "" ? $re['username'] : null;
            $mysql->close();
        } else
            return "游客";
    }

    public static function is_bot() {
        $botlist = array("Teoma", "alexa", "froogle", "Gigabot", "inktomi",
            "looksmart", "URL_Spider_SQL", "Firefly", "NationalDirectory",
            "Ask Jeeves", "TECNOSEEK", "InfoSeek", "WebFindBot", "girafabot",
            "crawler", "www.galaxy.com", "Googlebot", "Scooter", "Slurp",
            "msnbot", "appie", "FAST", "WebBug", "Spade", "ZyBorg", "rabaz",
            "Baiduspider", "Feedfetcher-Google", "TechnoratiSnoop", "Rankivabot",
            "Mediapartners-Google", "Sogou web spider", "WebAlta Crawler", "TweetmemeBot",
            "Butterfly", "Twitturls", "Me.dium", "Twiceler");
        foreach ($botlist as $bot) {
            if (strpos($_SERVER['HTTP_USER_AGENT'], $bot) !== false)
                return true;
        }
        return false;
    }

    public static function OwnerCheck($uid, $artid, $permit_Admin = false) {
        $mysql = Conn_mysql::getInstance();

        // 允许管理员操作 默认为否!
        $admin_check_result = mysql_fetch_array($mysql->query("SELECT COUNT(*) as count FROM common_admin_group WHERE uid=$uid"));
        if ($admin_check_result['count'] == 1 && $permit_Admin)
            return true;

        @$artid = mysql_real_escape_string($artid);
        $re = mysql_fetch_array($mysql->query("SELECT uid FROM artlist WHERE id_artlist = $artid;"), MYSQL_ASSOC);
        if ($re['uid'] == $uid) {
            return true;
        } else
            return false;
    }

    public static function INS_Tmplates($path, $once = false) {
        if ($once)
            include_once $path;
        else
            include $path;
        unset($this);
    }

    public static function isAdmin($uid) {
        $mysql = Conn_mysql::getInstance();
        $isAdminrs = mysql_fetch_array($mysql->query("SELECT COUNT(*) as count FROM common_admin_group WHERE uid=$uid;"));
        if ($isAdminrs['count'] == 1) {
            return true;
        } else {
            return false;
        }
    }

    public static function article_content_conv($cont, $version = 0) {
        switch ($version) {
            case 0:
                // xml储存 版本0
                $cont = str_replace("\\\"", '"', $cont);
                $cont = str_replace("&lt;", "<", $cont);
                $cont = str_replace("&gt;", ">", $cont);
                $cont = str_replace("&amp;lt;", "&lt;", $cont);
                $cont = str_replace("&amp;gt;", "&gt;", $cont);
                $cont = str_replace("&gd;", "&amp;gt;", $cont);
                $cont = str_replace("&ld;", "&amp;lt;", $cont);
                $cont = str_replace('\"', '"', $cont);
                $cont = str_replace("&nbsp;", " ", $cont);
                $cont = str_replace("&amp;nbsp;", " ", $cont);
                $cont = str_replace("&ms;", "&amp;nbsp;", $cont);
                break;
            case 1:
            case 1.1:
                // xml储存 版本1.1
                $cont = str_replace("\\\"", '"', $cont);
                $cont = str_replace("\'", "'", $cont);
                $cont = str_replace("\\\\", "\\", $cont);
                break;
        }
        return $cont;
    }

    public static function subTypeConv($type, $stype) {
        $xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '/mod/gendata/navlist.xml');
        $node = $xml->xpath("//n[@type='$type']/sband/band[@url='$stype']");
        return $node[0]['name'];
    }

    public static function getDatetime() {
        date_default_timezone_set('PRC');
        return date("Y-m-d H:i:s");
    }

    public static function getDate() {
        date_default_timezone_set('PRC');
        return date("Y-m-d");
    }

    public static function convDateTime2Date($dateTime) {
        return preg_replace("/ \d{2}:\d{2}:\d{2}/i", "", $dateTime);
    }

    public static function genArtRandId() {
        return intval(time()) + rand(0, 100);
    }

    public static function blog2FontApplicated($blogid) {
        // 已经申请了
        $mysql = Conn_mysql::getInstance();
        $_Q_re = $mysql->query("SELECT count(blogid) AS count FROM blog_up_font_verify WHERE blogid = $blogid;");
        if (false === $_Q_re) {
            return false;
        } else {
            $_re = @mysql_fetch_array($_Q_re);
            if ($_re['count'] === '1')
                return true;
            else
                return false;
        }
    }

    public static function blog2FontAccepted($blogid) {
        // 已经通过申请了
        $mysql = Conn_mysql::getInstance();
        $_re = mysql_fetch_array($mysql->query("SELECT upfont FROM blog_list WHERE blogid = $blogid;"));
        if ($_re['upfont'] == '1')
            return true;
        else
            return false;
    }

    public static function getUserBookShareCount($uid) {
        $mysql = Conn_mysql::getInstance();
        $_re = @mysql_fetch_array($mysql->query("SELECT count(bookid) AS count FROM book_list WHERE s_uid = $uid;"));
        return intval($_re['count']);
    }

    public static function NhFush404() {
        @header('HTTP/1.0 404 Not Found');
        echo "<meta http-equiv=refresh content='0; url=/404.php'>";
        exit(0);
    }

    public static function Fush404() {
        @header('HTTP/1.0 404 Not Found');
        @header('Location: /404.php');
        exit(0);
    }

    public static function setReadI($id, $readi, $mod = 0) {
        $mysql = Conn_mysql::getInstance();
        // mod = 0 文章 <默认>
        // mod = 1 博客
        switch ($mod) {
            case 1:
                $mysql->query("UPDATE `blog_list` SET `readi`=$readi WHERE `blogid`='$id';");
                break;
            case 0:
                $mysql->query("UPDATE artlist SET readi = $readi WHERE id_artlist = $id;");
                break;
        }
    }

    public static function setCommI($id, $Commi, $mod = 0) {
        $mysql = Conn_mysql::getInstance();
        // mod = 0 文章 <默认>
        // mod = 1 博客
        switch ($mod) {
            case 1:
                $mysql->query("UPDATE `blog_list` SET `commi`=$Commi WHERE `blogid`='$id';");
                break;
            case 0:
                $mysql->query("UPDATE artlist SET commi = $Commi WHERE id_artlist = $id;");
                break;
        }
    }

    public static function upReadI($id, $mod = 0) {
        $mysql = Conn_mysql::getInstance();
        // mod = 0 文章 <默认>
        // mod = 1 博客
        switch ($mod) {
            case 1:
                break;
            case 0:
                $mysql->query("UPDATE artlist SET readi = readi + 1 WHERE id_artlist = $id;");
                break;
        }
    }

    public static function RandCharFeed() {
        return chr(rand(97, 122));
    }

    public static function CommPlaceConv($p) {
        switch ($p) {
            case 1:
                return '&#x6C99;&#x53D1;';
            case 2:
                return '&#x677F;&#x51F3;';
            case 3:
                return '&#x5730;&#x677F;';
            default:
                return $p . '&#x697C;';
        }
    }

    public static function tTimeFormat_vs($stringtime) {
        return G::tTimeFormat(strtotime($stringtime));
    }

    public static function tTimeFormat($timestamp) {
        $curTime = time();
        $space = $curTime - $timestamp;
        //1分钟
        if ($space < 60) {
            $string = "刚刚";
            return $string;
        } elseif ($space < 3600) { //一小时前
            $string = floor($space / 60) . "分钟前";
            return $string;
        }
        $curtimeArray = getdate($curTime);
        $timeArray = getDate($timestamp);
        if ($curtimeArray['year'] == $timeArray['year']) {
            if ($curtimeArray['yday'] == $timeArray['yday']) {
                $format = "%H:%M";
                $string = strftime($format, $timestamp);
                return "今天 {$string}";
            } elseif (($curtimeArray['yday'] - 1) == $timeArray['yday']) {
                $format = "%H:%M";
                $string = strftime($format, $timestamp);
                return "昨天 {$string}";
            } else {
                $string = sprintf("%d月%d日 %02d:%02d", $timeArray['mon'], $timeArray['mday'], $timeArray['hours'], $timeArray['minutes']);
                return $string;
            }
        }
        $string = sprintf("%d年%d月%d日 %02d:%02d", $timeArray['year'], $timeArray['mon'], $timeArray['mday'], $timeArray['hours'], $timeArray['minutes']);
        return $string;
    }

    public static function blog_summary($body, $size, $format = NULL) {
        $_size = mb_strlen($body, 'utf-8');
        if ($_size <= $size)
            return $body;
        $strlen_var = strlen($body);
        if (strpos($body, '<') === false) {
            return mb_substr($body, 0, $size);
        }
        if ($e = strpos($body, '<!-- break -->')) {
            return mb_substr($body, 0, $e);
        }
        $html_tag = 0;
        $summary_string = '';
        $html_array = array('left' => array(), 'right' => array());
        for ($i = 0; $i < $strlen_var; ++$i) {
            if (!$size) {
                break;
            }
            $current_var = substr($body, $i, 1);
            if ($current_var == '<') {
                $html_tag = 1;
                $html_array_str = '';
            } else if ($html_tag == 1) {
                if ($current_var == '>') {
                    $html_array_str = trim($html_array_str);
                    if (substr($html_array_str, -1) != '/') {
                        $f = substr($html_array_str, 0, 1);
                        if ($f == '/') {
                            $html_array['right'][] = str_replace('/', '', $html_array_str);
                        } else if ($f != '?') {
                            if (strpos($html_array_str, ' ') !== false) {
                                $html_array['left'][] = strtolower(current(explode(' ', $html_array_str, 2)));
                            } else {
                                $html_array['left'][] = strtolower($html_array_str);
                            }
                        }
                    }
                    $html_array_str = '';
                    $html_tag = 0;
                } else {
                    $html_array_str .= $current_var;
                }
            } else {
                --$size;
            }
            $ord_var_c = ord($body{$i});
            switch (true) {
                case (($ord_var_c & 0xE0) == 0xC0):
                    $summary_string .= substr($body, $i, 2);
                    $i += 1;
                    break;
                case (($ord_var_c & 0xF0) == 0xE0):
                    $summary_string .= substr($body, $i, 3);
                    $i += 2;
                    break;
                case (($ord_var_c & 0xF8) == 0xF0):
                    $summary_string .= substr($body, $i, 4);
                    $i += 3;
                    break;
                case (($ord_var_c & 0xFC) == 0xF8):
                    $summary_string .= substr($body, $i, 5);
                    $i += 4;
                    break;
                case (($ord_var_c & 0xFE) == 0xFC):
                    $summary_string .= substr($body, $i, 6);
                    $i += 5;
                    break;
                default:
                    $summary_string .= $current_var;
            }
        }

        if ($html_array['left']) {
            $html_array['left'] = array_reverse($html_array['left']);
            foreach ($html_array['left'] as $index => $tag) {
                $key = array_search($tag, $html_array['right']);
                if ($key !== false) {
                    unset($html_array['right'][$key]);
                } else {
                    $summary_string .= '</' . $tag . '>';
                }
            }
        }
        return $summary_string;
    }

    public static function is_login() {
        return isset($_COOKIE['_uid']) && isset($_COOKIE['username']) && isset($_COOKIE['fky']);
    }

}