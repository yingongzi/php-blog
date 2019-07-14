<?php
// 声明命名空间,空间名要与所在的目录一致。
namespace Admin\Controller;
use Admin\Model\IndexModel;

/**
 * description:
 * File: IndexController.class.php
 * DateTime: 2019\7\14 0014 9:24
 * Author: yingongzi
 */

// 定义首页控制器类

final class IndexController
{
    public function index()
    {
        //创建模型类对象
        $modelObj = new IndexModel();
        //获取多行数据
        $arrs = $modelObj->fetchAll();
        //包含视图文件
        include VIEW_PATH."index.html";
    }
}