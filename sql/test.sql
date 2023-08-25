-- 创建db_test数据库
create database `db_test` default character set utf8 collate utf8_general_ci;
 
use db_test;
 
-- 创建用户表
DROP TABLE IF EXISTS `user`;
 
CREATE TABLE `user` (
 `id` bigint(20) NOT NULL,
 `email` varchar(255) DEFAULT NULL,
 `first_name` varchar(255) DEFAULT NULL,
 `last_name` varchar(255) DEFAULT NULL,
 `username` varchar(255) DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
-- 插入数据
INSERT INTO `user` (`id`, `email`, `first_name`, `last_name`, `username`)
VALUES(0,'li@latelee.org','Late','Lee','latelee');