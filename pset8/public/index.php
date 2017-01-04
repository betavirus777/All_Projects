<?php require(__DIR__ . "/../includes/config.php"); ?>
<!--

index.html

Computer Science 50
Problem Set 8

A mashup of Google Maps and Google News.

-->

<!DOCTYPE html>

<html>
    <head>

        <!-- http://getbootstrap.com/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>

        <!-- app's own CSS -->
        <link href="/css/styles.css" rel="stylesheet"/>

        <!-- https://developers.google.com/maps/documentation/javascript/ -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>

        <!-- http://google-maps-utility-library-v3.googlecode.com/svn/tags/markerwithlabel/1.1.10/ -->
        <script src="/js/markerwithlabel_packed.js"></script>

        <!-- http://jquery.com/ -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/js/bootstrap.min.js"></script>

        <!-- http://underscorejs.org/ -->
        <script src="/js/underscore-min.js"></script>

        <!-- https://github.com/twitter/typeahead.js/ -->
        <script src="/js/typeahead.jquery.min.js"></script>

        <!-- app's own JavaScript -->
        <script src="/js/scripts.js"></script>

        <title>Mashup</title>

    </head>
    <body>

        <!-- fill viewport -->
        <div class="container-fluid">

            <!-- https://developers.google.com/maps/documentation/javascript/tutorial -->
            <div id="map-canvas"></div>

            <!-- http://getbootstrap.com/css/#forms -->
            <form class="form-inline" id="form" role="form">
                <div class="form-group">
                    <div class="dropdown">
                        <?php if (empty($_SESSION["username"])): ?>   
                            <button id="dLabell" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                User
                                <span class="caret"></span>
                            </button>
                            
                             <ul class="dropdown-menu" aria-labelledby="dLabell">
                                <form action='#' method='post'>
                                    <p id='p1'></p>
                                    <input id='username' type='text' name='username' class="form-control" placeholder='Username'><br>
                                    <input id='password' type='password' name='password' class="form-control" placeholder='Password'><br>
                                    <input id='login' type='button' class="form-control" value='Login'><br>
                                    <input id='register' type='button' class="form-control" value='Register'>
                                </form>
                             </ul>
                             
                        <?php else: ?>
                            <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php print($_SESSION['username'] . "\'s History"); ?>
                                <span class="caret"></span>
                            </button>
                            
                             <ul id='list1' class="dropdown-menu" aria-labelledby="dLabel">
                                <li><a href="logout.php">Logout</a></li>
                                <?php
                                foreach($_SESSION['history'] as $row)
                                {
                                    print("<li>");
                                    print($row);
                                    print("</li>");
                                }
                                ?>
                             </ul>
                        <?php endif ?>
                    </div>
                    <label class="sr-only" for="q">City, State, Postal Code</label>
                    <input class="form-control" id="q" placeholder="City, State, Postal Code" type="text"/>
                </div>
            </form>
        </div>
        
        <script type="text/javascript">
                
                $('#login').click(function(){
                    
                    if($('#username').val() == ""){
                        $("#p1").html("Username can't be left blank");
                        return false;
                    }
                    if($('#password').val() == ""){
                        $("#p1").html("Password can't be left blank");
                        return false;
                    }
                    
                    $.post({
                        url: "/login.php",
                        data: {
                            username: $('#username').val(),
                            password: $('#password').val(),
                            info: "verify"
                        },
                        success: function(result){
                            var r = result.split('|');
                            
                            var id = Number(r[1]);
                            
                            if(r[0] == "success"){
                                $("#p1").html("Loged In!");
                                
                                window.location.href = "/";
                                
                            }
                            else{
                                $("#p1").html("User doesn't exist. Please Register");
                                return false;
                                
                            }
                    
                        }
                        
                    });
                    
                });
                
                
                $('#register').click(function(){
                    
                    if($('#username').val() == ""){
                        $("#p1").html("Username can't be left blank");
                        return false;
                    }
                    if($('#password').val() == ""){
                        $("#p1").html("Password can't be left blank");
                        return false;
                    }
                    
                    $.post({
                        url: "/login.php",
                        data: {
                            username: $('#username').val(),
                            password: $('#password').val(),
                            info: "register"
                        },
                        success: function(result){
                            var r = result.split('|');
                            
                            if(r[0] == "success"){
                                $("#p1").html("Registered!");
                                
                                window.location.href = "/";
                                
                            }
                            else{
                                if(r[1] == 'userExist'){
                                    $("#p1").html("User already Exists");
                                    return false;
                                    
                                }
                            }
                            
                        }
                        
                    });
                    
                });
            
        </script>

    </body>
</html>