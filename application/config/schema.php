<?php

define('DB_SCHEMA', 'CREATE DATABASE IF NOT EXISTS :db CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci');

define('BASEDATA_TABLE_SCHEMA', 'CREATE TABLE `' . BASEDATA_TABLE . '` (
	`id` varchar(11) NOT NULL,
	`page` varchar(100) NOT NULL,
	`word` varchar(1000) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4');

define('CHAR_ENCODING_SCHEMA', 'SET NAMES utf8mb4');

?>
