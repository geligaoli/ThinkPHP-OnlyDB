## ThinkPHP-OnlyDB

分离出来的ThinkPHP的数据库ORM模型，可以由普通php文件调用

技术发展的很快，这个还是Tp3.2版本的，建议学习Think5.x吧

## 介绍

ThinkPHP是一个非常不错的开源项目。地址见 https://github.com/liu21st/thinkphp

在实际使用中，有时遇到一些情况，比如老项目的改造的兼容性，或者只是几个简单的php文件，又有点杀鸡用牛刀的感觉，而ThinkPHP中最优秀的特性之一，就是对数据库操作的封装 -- 简洁、安全、快速开发。

于是对ThinkPHP的数据库操作功能，单独提取了出来，做了一些简单的修改，能够让普通的PHP程序直接调用。


## 使用方式

见dbconn.php。

增加数据库驱动，请从ThinkPHP项目中，拷贝ThinkPHP/Db/Driver/下相应的文件。


