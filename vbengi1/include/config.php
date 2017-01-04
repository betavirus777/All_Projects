<?php

	require_once realpath($_SERVER["DOCUMENT_ROOT"])."/include/mysql.php";
	require_once realpath($_SERVER["DOCUMENT_ROOT"])."/include/helpers.php";

    ini_set("display_errors", true);
    error_reporting(E_ALL);
    
    if(!check_table(DB::$dbName, 'users'))
    {
    	DB::query("CREATE TABLE users (
    			id int(10) unsigned NOT NULL AUTO_INCREMENT,
    			name varchar(255) NOT NULL,
    			username varchar(255) NOT NULL,
    			email varchar(255) NOT NULL,
    			password varchar(255) NOT NULL,
    			phone int(10) NOT NULL,
    			score int(10) unsigned NOT NULL DEFAULT '0',
    			enable tinyint(1) NOT NULL DEFAULT '0',
    			PRIMARY KEY (username),
    			KEY id (id),
    			KEY email (email)
    			) ENGINE=InnoDB");
    	
    	
    }
    
    if(!check_table(DB::$dbName, 'leaderboard'))
    {
    	DB::query("CREATE TABLE leaderboard (
    			id int(10) unsigned NOT NULL,
    			username varchar(255) NOT NULL,
    			score int(10) unsigned NOT NULL DEFAULT '0',
    			time BIGINT NOT NULL DEFAULT '0',
    			KEY id (id)
    			) ENGINE=InnoDB");
    }
    
    if(!check_table(DB::$dbName, 'answers'))
    {
    	DB::query("CREATE TABLE answers (
    			id int(10) unsigned NOT NULL,
    			ans11 tinyint(1) NOT NULL DEFAULT '0',
    			ans12 tinyint(1) NOT NULL DEFAULT '0',
    			ans13 tinyint(1) NOT NULL DEFAULT '0',
    			ans14 tinyint(1) NOT NULL DEFAULT '0',
    			ans15 tinyint(1) NOT NULL DEFAULT '0',
    			ans16 tinyint(1) NOT NULL DEFAULT '0',
    			ans17 tinyint(1) NOT NULL DEFAULT '0',
    			ans18 tinyint(1) NOT NULL DEFAULT '0',
    			ans19 tinyint(1) NOT NULL DEFAULT '0',
    			ans110 tinyint(1) NOT NULL DEFAULT '0',
    			ans111 tinyint(1) NOT NULL DEFAULT '0',
    			ans112 tinyint(1) NOT NULL DEFAULT '0',
    			ans113 tinyint(1) NOT NULL DEFAULT '0',
    			ans114 tinyint(1) NOT NULL DEFAULT '0',
    			ans115 tinyint(1) NOT NULL DEFAULT '0',
    			ans116 tinyint(1) NOT NULL DEFAULT '0',
    			ans117 tinyint(1) NOT NULL DEFAULT '0',
    			ans118 tinyint(1) NOT NULL DEFAULT '0',
    			ans119 tinyint(1) NOT NULL DEFAULT '0',
    			ans120 tinyint(1) NOT NULL DEFAULT '0',
    			
    			ans21 tinyint(1) NOT NULL DEFAULT '0',
    			ans22 tinyint(1) NOT NULL DEFAULT '0',
    			ans23 tinyint(1) NOT NULL DEFAULT '0',
    			ans24 tinyint(1) NOT NULL DEFAULT '0',
    			ans25 tinyint(1) NOT NULL DEFAULT '0',
    			ans26 tinyint(1) NOT NULL DEFAULT '0',
    			ans27 tinyint(1) NOT NULL DEFAULT '0',
    			ans28 tinyint(1) NOT NULL DEFAULT '0',
    			ans29 tinyint(1) NOT NULL DEFAULT '0',
    			ans210 tinyint(1) NOT NULL DEFAULT '0',
    			
    			ans31 tinyint(1) NOT NULL DEFAULT '0',
    			ans32 tinyint(1) NOT NULL DEFAULT '0',
    			ans33 tinyint(1) NOT NULL DEFAULT '0',
    			ans34 tinyint(1) NOT NULL DEFAULT '0',
    			ans35 tinyint(1) NOT NULL DEFAULT '0',

    			KEY id (id)
    			) ENGINE=InnoDB");
    }
    
    if(!check_table(DB::$dbName, 'start'))
    {
    	DB::query("CREATE TABLE start (
    			enable tinyint(1) NOT NULL DEFAULT '0'
    			) ENGINE=InnoDB");
    }

?>
