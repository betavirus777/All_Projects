<?php

	require_once "/home1/enginee8/public_html/Engineer2016/VirtualBounty/include/mysql.php";

	DB::$user = 'enginee8_ph';
	DB::$password = 'saikiran1';
	DB::$host = 'localhost';
	DB::$dbName = 'enginee8_vbengi';
    
    session_start(); 
    
    date_default_timezone_set("Asia/Kolkata");

    function check_table($database, $table)
    {
    	return DB::queryFirstField("SELECT count(*) FROM information_schema.tables WHERE table_schema = %s AND table_name = %s", $database, $table);
    }

    function dump()
    {
        $arguments = func_get_args();
        require "/home1/enginee8/public_html/Engineer2016/VirtualBounty/views/dump.php";
        exit;
    }

    function logout()
    {
        $_SESSION = array();

        if (!empty($_COOKIE[session_name()]))
        {
            setcookie(session_name(), "", time() - 42000);
        }

        session_destroy();
    }

    function redirect($location)
    {
        if (headers_sent($file, $line))
        {
            trigger_error("HTTP headers already sent at {$file}:{$line}", E_USER_ERROR);
        }
        header("Location: {$location}");
        exit;
    }
    
    function render_php($view, $values)
    {
    	if (file_exists("../public/{$view}"))
    	{
    		extract($values);
    
    		require "/home1/enginee8/public_html/Engineer2016/VirtualBounty/public/{$view}";
    		exit;
    	}
    
    	else
    	{
    		trigger_error("Invalid view: {$view}", E_USER_ERROR);
    	}
    }

    function render($view, $values)
    {
        if (file_exists("../views/{$view}"))
        {
            extract($values);
            
			if(empty($render))
            	require "/home1/enginee8/public_html/Engineer2016/VirtualBounty/views/header.php";	
			require "/home1/enginee8/public_html/Engineer2016/VirtualBounty/views/{$view}";
            if(empty($render))
            	require "/home1/enginee8/public_html/Engineer2016/VirtualBounty/views/footer.php";
            
            exit;
        }

        else
        {
            trigger_error("Invalid view: {$view}", E_USER_ERROR);
        }
    }

?>
