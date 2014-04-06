<div style="margin:20px;" class="art-item" id="art-item-submitarticle">
     <form id="upload-form">
          <!-- 文章标题 -->
          <div id="tit_div" wapper="asub-title">
               <input type="text"
                      id="title_sub"
                      autocomplete="none"
                      class="{required:true,minlength:5} asub-input-text sdText"/>
               <span class="validate-span"></span>
               <div style="border:1px solid #ccc;margin:5px 0;width:100%;padding:5px 0;background:whitesmoke">
               <span class="asub-select-wapper">
                    <label>&nbsp;文章分类：</label>
                    <select name="type_sub"
                            id="type_s"
                            onchange="selectC(this.value)">
                                 <?php
                                 $xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '/not/info/convlist.xml');
                                 foreach ($xml->xpath("//root/sp") as $c)
                                      echo "<option value=\"$c[stype]\">$c[desc]</option>";
                                 ?>
                    </select>
               </span>
               <span class="asub-select-wapper">
                    <label>&nbsp;子分类：</label>
                    <select name="type_s_sub"
                            id="stype_s">
                                 <?php
                                 foreach ($xml->xpath("//root/sp") as $c) {
                                      $i = 0;
                                      foreach ($c->xpath("band") as $sc) {
                                           echo "<option value=\"$sc[url]\" class=\"sl_$c[stype]\" id=\"sl_$c[stype]_$i\">$sc[type]</option>";
                                           $i++;
                                      }
                                      unset($i);
                                      unset($xml);
                                 }
                                 ?>
                    </select>
               </span>
               </div>
               <div class="clear"></div>
          </div>
          <!-- 文章内容 kindeditor编辑器 -->
          <textarea autocomplete="none"
                    id="text_sub"
                    name="content"
                    class="{required:true,minlength:150} asub-area">
               编辑器加载中...
          </textarea>
          <span class="validate-span"></span>
          <a href='javascript:;' onclick="javascript:submitArticle();" class='next-cp asub-button' id='input-sub'><img src='/img/up-load.png' align='absmiddle'/>点我发表文章</a>
     </form>
     <div class="clear"></div>
</div>