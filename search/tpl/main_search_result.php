        <div style="margin:15px auto;width:1024px;">
            <div style="margin-left:15px;background:#fefefe;border:1px solid #aaa;float:left;width:637px;padding:15px;">
                <div class="Gray" style="padding-bottom:5px;border-bottom:1px dashed #ccc;">搜索引擎使用了 <?php echo $R_searchtime; ?>秒 找到约 <?php echo $R_total; ?> 条结果</div>
                <?php
                // 在这里遍历搜索结果 输出列表
                foreach ($results["result"]['items'] as $R_items) {
                    //print_r($R_items);
                    include './tpl/search-result-items.php';
                }
                ?>
                <div class="s-pages-w">
                    <?php
                    // 输出分页
                    function pushPagesItem($pageI, $page_title, $cur = false) {
                        $url = dataHelper::packQueryURL(array('p' => $pageI));
                        if ($cur) {
                            echo sprintf("<a href=\"%s\" class=\"s-pages-i s-pages-cur borderR10\">%s</a>", $url, $page_title);
                        } else {
                            echo sprintf("<a href=\"%s\" class=\"s-pages-i borderR10\">%s</a>", $url, $page_title);
                        }
                    }

                    $P_CUR_PAGES >= 2 && pushPagesItem($P_CUR_PAGES - 1, '上一页');
                    //产生页码
                    for ($i = 1; $i <= $P_SP; $i++) {
                        //echo $i;
                        pushPagesItem($i, $i, $i == $P_CUR_PAGES);
                    }
                    $P_SP > $P_CUR_PAGES && pushPagesItem($P_CUR_PAGES + 1, '下一页');
                    ?>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <span style="display:none;"><script src="http://s21.cnzz.com/stat.php?id=4991736&web_id=4991736" language="JavaScript"></script></span>
        <script type="text/javascript" src="/search/search.js"></script>
    </body>
</html>