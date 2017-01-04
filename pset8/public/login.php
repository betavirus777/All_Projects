<?php     

    require(__DIR__ . "/../includes/config.php");
    

    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        print("Direct Access is not allowed");
    }

    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        if($_POST['info'] == 'verify')
        {
            $rows = CS50::query("SELECT * FROM users WHERE username = ?", $_POST["username"]);

            if (count($rows) == 1)
            {
                $row = $rows[0];
                
                if ($_POST["password"] == $row["password"])
                {
                    $_SESSION["id"] = $row["id"];
                    $id = $row["id"];
                    $_SESSION["username"] = $row["username"];
                    
                    $rows = CS50::query("SELECT name FROM history WHERE id = ?", $id);
                    $str = Array();
                    $count = 0;
                    
                    foreach($rows as $row)
                    {
                        $str[$count] = $row['name'];
                        $count = $count + 1;
                    }
                    $_SESSION['history'] = $str;
                    
                    print("success|{$id}");
                }
            }
        }
        
        if($_POST['info'] == 'register')
        {
            $ret = CS50::query("INSERT IGNORE INTO users (username, password) VALUES(?, ?)", $_POST["username"], $_POST["password"]);
        
            if($ret == 0)
            {
                print("error|userExist");
            }
            else
            {
                $rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
                $id = $rows[0]["id"];
                
                $_SESSION["id"] = $id;
                $_SESSION["username"] = $_POST["username"];
                print("success|{$id}");
                $_SESSION['history'] = Array();
            }
            
        }
        
        if($_POST['info'] == 'history')
        {
            if (!empty($_SESSION["username"]))
            {
                $rows = CS50::query("INSERT INTO history values(?, ?)", $_SESSION['id'], $_POST['name']);
                
                $str = $_SESSION['history'];
                $count = count($str);
                $str[$count] = $_POST['name'];
                $_SESSION['history'] = $str;
            }
        }
        
    }
    
    
?>