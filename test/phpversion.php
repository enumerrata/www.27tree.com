<?PHP
if (Extension_Loaded('zlib'))
    Ob_Start('ob_gzhandler');
Header("Content-type: text/html");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312" /> 
        <title>无标题文档</title> 
    </head> 
    <body> 
        <?php
        for ($i = 0; $i < 100; $i++) {
            echo 'Hello World!';
        }
        ?> 
    </body> 
</html> 
<?PHP
if (Extension_Loaded('zlib'))
    Ob_End_Flush();
?>