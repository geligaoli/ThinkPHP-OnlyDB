<?php

defined('ROOT_PATH') or die("must define ROOT_PATH please.");
defined('DATA_PATH') or define('DATA_PATH', ROOT_PATH.'WEB-INF/');
defined('LOG_PATH')  or define('LOG_PATH',  DATA_PATH.'Logs/');

include_once 'Log.class.php';
include_once 'Log/Driver/File.class.php';

include_once 'Model.class.php';
include_once 'Db.class.php';
include_once 'Db/Driver.class.php';
include_once 'Db/Driver/Mysql.class.php';

include_once 'functions.php';


C(array(
        /* Cookie设置 */
        'COOKIE_EXPIRE'         =>  0,       // Cookie有效期
        'COOKIE_DOMAIN'         =>  '',      // Cookie有效域名
        'COOKIE_PATH'           =>  '/',     // Cookie路径
        'COOKIE_PREFIX'         =>  '',      // Cookie前缀 避免冲突
        'COOKIE_SECURE'         =>  false,   // Cookie安全传输
        'COOKIE_HTTPONLY'       =>  '',      // Cookie httponly设置

        /* 数据库设置 */
        'DB_TYPE'               =>  '',     // 数据库类型
        'DB_HOST'               =>  '',     // 服务器地址
        'DB_NAME'               =>  '',     // 数据库名
        'DB_USER'               =>  '',     // 用户名
        'DB_PWD'                =>  '',     // 密码
        'DB_PORT'               =>  '',     // 端口
        'DB_PREFIX'             =>  '',     // 数据库表前缀
        'DB_FIELDTYPE_CHECK'    =>  false,  // 是否进行字段类型检查
        'DB_FIELDS_CACHE'       =>  true,   // 启用字段缓存
        'DB_CHARSET'            =>  'utf8',  // 数据库编码默认采用utf8
        'DB_DEPLOY_TYPE'        =>  0,      // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
        'DB_RW_SEPARATE'        =>  false,  // 数据库读写是否分离 主从式有效
        'DB_MASTER_NUM'         =>  1,      // 读写分离后 主服务器数量
        'DB_SLAVE_NO'           =>  '',     // 指定从服务器序号
        'DB_SQL_BUILD_CACHE'    =>  false,  // 数据库查询的SQL创建缓存
        'DB_SQL_BUILD_QUEUE'    =>  'file', // SQL缓存队列的缓存方式 支持 file xcache和apc
        'DB_SQL_BUILD_LENGTH'   =>  20,     // SQL缓存的队列长度
        'DB_SQL_LOG'            =>  false,  // SQL执行日志记录
        'DB_BIND_PARAM'         =>  false,  // 数据库写入数据自动参数绑定

        /* 日志设置 */
        'LOG_RECORD'            =>  false,   // 默认不记录日志
        'LOG_TYPE'              =>  'File', // 日志记录类型 默认为文件方式
        'LOG_LEVEL'             =>  'EMERG,ALERT,CRIT,ERR',// 允许记录的日志级别
        'LOG_FILE_SIZE'         =>  2097152,    // 日志文件大小限制
        'LOG_EXCEPTION_RECORD'  =>  false,    // 是否记录异常信息日志

        /* SESSION设置 */
        'SESSION_AUTO_START'    =>  true,    // 是否自动开启Session
        'SESSION_OPTIONS'       =>  array(), // session 配置数组 支持type name id path expire domain 等参数
        'SESSION_TYPE'          =>  '',       // session hander类型 默认无需设置 除非扩展了session hander驱动
        'SESSION_PREFIX'        =>  '',      // session 前缀
        //'VAR_SESSION_ID'      =>  'session_id',     //sessionID的提交变量

));

