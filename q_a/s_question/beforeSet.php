<div id="tit_div" wapper="asub-title">
    <input type="text"
           id="title_sub"
           autocomplete="none"
           placeholder="你有什么问题,请在这里输入"
           onfocus="javascript:if(this.value=='你有什么问题,请在这里输入')this.value='';"
           onblur="javascript:if(this.value=='')this.value='你有什么问题,请在这里输入';"
           value="你有什么问题,请在这里输入"
           style="width:99.2%;text-align:center;color:#666;"class="sdText"/>
    <div style="border:1px solid #ccc;margin:5px 0;width:100%;padding:5px 0;background:whitesmoke">
        <span style="display:inline-block;margin-left:10px;">
            <label>问题分类：</label>
            <select id="qa_type_1" onchange="javascript:qa_selectChange(1,this)">
                <?php
                $xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '/q_a/qa_data_sources/qa_type.xml');
                foreach ($xml->xpath("//root/sp") as $c)
                    echo "<option value=\"$c[desc]\">$c[desc]</option>";
                ?>
            </select>
        </span>
        <span class="sl-1-addon" style="display:inline-block;margin-left:10px;">
            <label>二级分类：</label>
            <select id="qa_type_2" onchange="javascript:qa_selectChange(2,this)">
                <?php
                foreach ($xml->xpath("//root/sp") as $c) {
                    $i = 0;
                    foreach ($c->xpath("band") as $sc) {
                        echo "<option value=\"$sc[type]\">$sc[type]</option>";
                        $i++;
                    }
                }
                ?>
            </select>
        </span>
        <span class="sl-1-addon" style="display:inline-block;margin-left:10px;">
            <label>三级分类：</label>
            <select id="qa_type_3">
                <?php
                foreach ($xml->xpath("//band") as $c) {
                    $i = 0;
                    foreach ($c->xpath("sband") as $sc) {
                        echo "<option value=\"$sc[type]\">$sc[type]</option>";
                        $i++;
                    }
                }
                ?>
            </select>
        </span>
    </div>
    <div class="clear"></div>
</div>
<textarea autocomplete="none" id="text_sub" style="width:100%">编辑器加载中...</textarea>
<a class="next-cp" style="width:100%;margin-top:5px;" href="javascript:;" onclick="javascript:submitQuestion(this);">发表问题</a>