<?php

include_once dirname(__FILE__) . '/css.class.php';

/**
 * Description of dataManager
 *
 * @author koodo@qq.com
 */
class dataManager {

    public function __construct() {

    }

    public function pushData($targetIndex, $data = array()) {
        /**
         * 向云服务器推送新内容
         * @param String $targetIndex 目标索引名
         * @param array $data 数据
         */
        $api = new CloudSearchApi();
        $INDEX = $api->getIndex($targetIndex);
        $dataPack = array();
        if (is_array($data[0])) {
            // 多个文档
            foreach ($data AS $sd) {
                $dataPack[] = array(
                    'cmd' => 'add',
                    'fields' => $sd
                );
            }
            $INDEX->addDocuments($dataPack);
        } else {
            // 单个文档
            $INDEX->addDocument($data['id'], $data);
        }
    }

    public function updateData() {

    }

    public function deleteData() {

    }

}
