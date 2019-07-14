<?php
/**
 * description:
 * File: Config.php
 * DateTime: 2019\7\12 0012 9:56
 * Author: yingongzi
 */

// 返回配置数组
return array(
    // 数据库配置信息
    'db_type' => 'mysql',
    'db_host' => 'localhost',
    'db_port' => '3306',
    'db_user' => 'root',
    'db_pass' => 'root',
    'db_name' => 'student',
    'charset' => 'utf8',
    // 默认的路由参数
    'default_platform' => 'Admin',
    'default_controller' => 'Index',
    'default_action' => 'index',
);