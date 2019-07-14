<?php
/**
 * description:
 * File: IndexModel.class.php
 * DateTime: 2019\7\14 0014 10:28
 * Author: yingongzi
 */
namespace Admin\Model;
use Frame\Libs\Db;

final class IndexModel
{
    public function fetchAll()
    {
        //创建数据库工具类对象
        $sql = "select * from student order by id desc";
        $db = Db::getInstance();
        return $db->fetchAll($sql);
    }
}
