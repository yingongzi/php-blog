<?php
/**
 * description:
 * File: PDOWrapper.class.php
 * DateTime: 2019\7\14 0014 12:48
 * Author: yingongzi
 */
//声明命名空间
namespace Frame\Vendor;
use \PDO;

//定义最终的PDOWrapper类
final class PDOWrapper
{
    //数据库配置信息
    private $db_type;   //数据库类型
    private $db_host;
    private $db_port;
    private $db_user;
    private $db_pass;
    private $db_name;
    private $charset;
    private $pdo = null;

    //公共的构造方法
    public function __construct()
    {
        $this->db_type = $GLOBALS['config']['db_type'];
        $this->db_host = $GLOBALS['config']['db_host'];
        $this->db_user = $GLOBALS['config']['db_user'];
        $this->db_pass = $GLOBALS['config']['db_pass'];
        $this->db_name = $GLOBALS['config']['db_name'];
        $this->charset = $GLOBALS['config']['charset'];

        $this->createPDO();     //创建PDO对象
        $this->setErrMode();    //设置报错模式

    }

    private function createPDO()
    {
        //构建dsn字符串
        $dsn = "{$this->db_type}:host={$this->db_host};port={$this->db_port};";
        $dsn .= "dbname={$this->db_name};charset={$this->charset}";
        //创建PDO对象
        $this->pdo = new PDO($dsn, $this->db_user, $this->db_pass);
//        var_dump($pdo);
    }

    private function setErrMode()
    {

    }


}