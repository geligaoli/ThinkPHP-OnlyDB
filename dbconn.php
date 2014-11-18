<?php

defined('ROOT_PATH') or define('ROOT_PATH', __DIR__.'/');

include_once 'ThinkDB/ThinkDB.php';

$config = array(
        'APP_DEBUG' => true,         // 开启调试模式
        // 'DB_TYPE'=> 'pdo',         // 数据库类型
        // 'DB_DSN'=> 'mysql:host=127.0.0.1;dbname=mysql;charset=utf8',
        'DB_TYPE'=> 'mysql',         // 数据库类型
        'DB_HOST'=> '127.0.0.1',     // 数据库服务器地址
        'DB_NAME'=> 'mysql',        // 数据库名称
        'DB_USER'=> 'root',          // 数据库用户名
        'DB_PWD'=>  'root',         // 数据库密码
        'DB_PORT'=> '3306',          // 数据库端口
        'DB_PREFIX'=> '',           // 数据表前缀
        'DB_CHARSET'=> 'utf8',       // 数据库字符集
);

C($config);

