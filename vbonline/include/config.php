<?php

	require_once "/home1/enginee8/public_html/vb-iet/include/mysql.php";
	require_once "/home1/enginee8/public_html/vb-iet/include/helpers.php";

    ini_set("display_errors", true);
    error_reporting(E_ALL);
    
    if(!check_table(DB::$dbName, 'users'))
    {
    	DB::query("CREATE TABLE users (
    			id int(10) unsigned NOT NULL AUTO_INCREMENT,
    			username varchar(255) NOT NULL,
    			roll varchar(255) NOT NULL,
    			hash varchar(255) NOT NULL,
    			email varchar(255) NOT NULL,
    			score int(10) unsigned NOT NULL DEFAULT '0',
    			enable tinyint(1) NOT NULL DEFAULT '0',
    			PRIMARY KEY (id),
    			KEY roll (roll)
    			) ENGINE=InnoDB");
    	
    	
    }
    
    if(!check_table(DB::$dbName, 'leaderboard'))
    {
    	DB::query("CREATE TABLE leaderboard (
    			user_id int(10) unsigned NOT NULL,
    			username varchar(255) NOT NULL,
    			roll char(10) NOT NULL,
    			score int(10) unsigned NOT NULL DEFAULT '0',
    			time BIGINT NOT NULL DEFAULT '0',
    			KEY user_id (user_id)
    			) ENGINE=InnoDB");
    }
    
    if(!check_table(DB::$dbName, 'answers'))
    {
    	DB::query("CREATE TABLE answers (
    			user_id int(10) unsigned NOT NULL,
    			ans11 tinyint(1) NOT NULL DEFAULT '0',
    			ans12 tinyint(1) NOT NULL DEFAULT '0',
    			ans13 tinyint(1) NOT NULL DEFAULT '0',
    			ans14 tinyint(1) NOT NULL DEFAULT '0',
    			ans15 tinyint(1) NOT NULL DEFAULT '0',
    			ans16 tinyint(1) NOT NULL DEFAULT '0',
    			ans17 tinyint(1) NOT NULL DEFAULT '0',
    			ans18 tinyint(1) NOT NULL DEFAULT '0',
    			ans19 tinyint(1) NOT NULL DEFAULT '0',
    			
    			ans21 tinyint(1) NOT NULL DEFAULT '0',
    			ans22 tinyint(1) NOT NULL DEFAULT '0',
    			ans23 tinyint(1) NOT NULL DEFAULT '0',
    			ans24 tinyint(1) NOT NULL DEFAULT '0',
    			ans25 tinyint(1) NOT NULL DEFAULT '0',
    			ans26 tinyint(1) NOT NULL DEFAULT '0',
    			
    			ans31 tinyint(1) NOT NULL DEFAULT '0',

    			KEY user_id (user_id)
    			) ENGINE=InnoDB");
    }
    
    if(!check_table(DB::$dbName, 'start'))
    {
    	DB::query("CREATE TABLE start (
    			enable tinyint(1) NOT NULL DEFAULT '0'
    			) ENGINE=InnoDB");
    }

?>
