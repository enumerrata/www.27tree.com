<?php

if (!empty($_FILES)) {
     $dirname = "/not/mybook/data/book_image_lib/tmp/";
     $tempFile = $_FILES['jUploaderFile']['tmp_name'];
     $targetPath = $_SERVER['DOCUMENT_ROOT'] . $dirname;
     $namex = explode(".", $_FILES['jUploaderFile']['name']);
     // @rename
     $targetFileName = md5($_COOKIE['_uid'] . time()) . '.' . $namex[1];
     $targetFile = str_replace('//', '/', $targetPath) . $targetFileName;

     $state = move_uploaded_file($tempFile, $targetFile) ? 1 : 0;
     chmod($targetFile,0777);

     if ($state == 1) {
          if (@$dims = getimagesize($targetFile)) {
               $imginfo = array(
                   "width" => $dims[0],
                   "height" => $dims[1]
               );
          } else
               $imginfo = null;
     }

} else {
     $state = 0;
}
     $arr = array(
         "s" => $state,
         "pic" => $dirname . $targetFileName,
         "imgn" => $targetFileName,
         "size" => $imginfo
     );

     $json = json_encode($arr);
     print_r($json);
?>