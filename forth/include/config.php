<?php

    /**
     * config.php
     *
     * Computer Science 50
     * Problem Set 7
     *
     * Configures app.
     */

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require_once realpath($_SERVER["DOCUMENT_ROOT"])."/include/helpers.php";
    require_once BASE."/include/mysql.php";
    
    create_database(DB::$host, DB::$user, DB::$password, DB::$dbName);
    
    if(!check_table(DB::$dbName, 'users'))
    {
    	DB::query("CREATE TABLE users (
    			id int(10) unsigned NOT NULL AUTO_INCREMENT,
    			username varchar(255) NOT NULL,
    			hash varchar(255) NOT NULL,
    			email varchar(255) NOT NULL,
    			cash decimal(65,4) unsigned NOT NULL DEFAULT '0.0000',
    			PRIMARY KEY (id),
    			UNIQUE KEY username (username),
    			UNIQUE KEY email (email),
    			KEY id (id)
    			) ENGINE=InnoDB");
    }
    
    if(!check_table(DB::$dbName, 'portfolios'))
    {
    	DB::query("CREATE TABLE portfolios (
    			id int(10) unsigned key NOT NULL AUTO_INCREMENT,
    			user_id int(10) unsigned NOT NULL,
    			symbol varchar(12) NOT NULL,
    			shares int(10) unsigned NOT NULL,
    			price double NOT NULL,
    			UNIQUE( `user_id`, `symbol`)
    			) ENGINE=InnoDB AUTO_INCREMENT = 100");
    }
    
    if(!check_table(DB::$dbName, 'history'))
    {
    	DB::query("CREATE TABLE history (
    			user_id int(10) unsigned zerofill NOT NULL,
    			type tinyint(1) NOT NULL,
    			symbol varchar(12) NOT NULL,
    			shares int(11) NOT NULL,
    			price double NOT NULL,
    			date varchar(100) NOT NULL,
    			KEY user_id (user_id)
    			) ENGINE=InnoDB");
    }

    if (empty($_SESSION["id"]))
    {
    	redirect("/public/login.php");
    }

?>
