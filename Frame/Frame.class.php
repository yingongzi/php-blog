<?php
//声明命名空间
namespace Frame;

/**
 * description:
 * File: Frame.class.php
 * DateTime: 2019\7\12 0012 23:43
 * Author: yingongzi
 */
// 定义最终的框架初始类

final class Frame{
    public static function run()
    {
        self::initConfig();// 1.初始化配置数据

        self::initRoute();// 2.初始化路由参数

        self::initConst();// 3.初始化常量定义

        self::initAutoLoad();// 4.初始化类的自动加载
//
//        self::initDispatch();// 5.初始化请求分发

    }

    private static function initConfig()
    {
        $GLOBALS['config'] = require_once(APP_PATH."Conf".DS."Config.php");
//        print_r($GLOBALS);
//        die();
    }

    private static function initRoute()
    {
        //获取路由参数
        $p = $GLOBALS['config']['default_platform'];       //平台参数
        $c = isset($_GET['c']) ? $_GET['c'] : $GLOBALS['config']['default_controller'];     //控制器名
        $a = isset($_GET['a']) ? $_GET['a'] : $GLOBALS['config']['default_action'];         //动作名
        define('PLAT', $p);
        define('CONTROLLER', $c);
        define('ACTION', $a);
    }

    private static function initConst()
    {
        define('VIEW_PATH', APP_PATH."View".DS.CONTROLLER.DS);
//        echo VIEW_PATH;
    }

    private static function initAutoLoad()
    {
    }
}