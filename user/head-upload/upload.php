<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title></title>
          <script src="/jss/jquery-min.js"></script>
          <script src="/user/head-upload/jquery.uploadify.js"></script>
          <link rel="stylesheet" type="text/css" href="/user/head-upload/uploadify.css" />
          <script src="/user/head-upload/swfobject.js"></script>
          <script language="javascript">
               $(function(){
                    var uploadNum=0;
                    $("#uploadify").uploadify({
                         'buttonText':"Select Picture",
                         'fileDesc':'jpg,png,gif',
                         'fileExt':'*.jpg;*.png;*.gif',
                         'uploader':'./uploadify.swf',
                         'script':'./uploadify.php',
                         'cancelImg':'./cancel.png',
                         'folder':'./img',
                         'sizeLimit':'250000',
                         'queueID':'queue',
                         'auto':true,
                         'multi':true,
                         'onComplete':function(event, queueID, fileObj, response, data){
                              var json = eval("("+response+")");
                              console.log(json['pic']);
                              $("#target").attr("src","../data/head-img/"+json['pic']);
                              $("#src").val("../data/head-img/"+json['pic']);
                              $("#imgn").val(json['pic']);
                              $('#target').Jcrop({
                                   aspectRatio : 1/1,
                                   maxSize : [256,256],
                                   minSize : [128,128],
                                   onChange:   showCoords,
                                   onSelect:   showCoords,
                                   onRelease:  clearCoords
                              });
                         },
                         'onProgress':function(){
                              //$("#upload-state").val("onProgress");
                         }
                    });

               });
          </script>

          <script src="/user/head-upload/jquery.Jcrop.min.js" type="text/javascript"></script>
          <link rel="stylesheet" href="/user/head-upload/jquery.Jcrop.css" type="text/css" />
          <script type="text/javascript">
          </script>

     </head>
     <body>
          <input type="file" name="uploadify" id="uploadify" />
          <div id="outer">
               <div class="jcExample">
                    <div class="article" >
                         <img src="" alt="target" id="target" onload="javascript:DrawImage(this,932,656);"/>
                         <form id="coords"  class="coords" action="./imgresize.php" method="get">
                              <div>
                                   <!-- 起始位置的x坐标 -->
                                   <input type="hidden" size="10" id="x1" name="x" readonly/>
                                   <!-- 起始位置的y坐标 -->
                                   <input type="hidden" size="10" id="y1" name="y" readonly/>
                                   <!-- 宽 -->
                                   <input type="hidden" size="10" id="w" name="w" readonly/>
                                   <!-- 高 -->
                                   <input type="hidden" size="10" id="h" name="h" readonly/>
                                   <input type="hidden" size="10" id="imgn" name="imgn" value="" />
                                   <input type="hidden" size="10" id="src" name="src" value="" />
                                   <input type="hidden" size="10" id="scale" name="scale" value="1" readonly/></label>
                                   <label>
                                        <input type="submit" value="保存" style="height:50px; width:200px; font-size:24px; background-color:green;border:green thin solid;"/>
                                   </label>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </body>
</html>
