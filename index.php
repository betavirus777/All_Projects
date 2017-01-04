<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>All Projects</title>

    <!--<script type="text/javascript" src="jquery-3.1.1.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

  </head>
  <body>
    <pre><h1> My Projects</h1></pre>
    <?php
      $dir = '.';
      $files = scandir($dir);
      $count=0;
      print("<ol id='list1'>");
      foreach($files as $file){
        if(is_dir($file)&&($file[0] != '.')){
          $count++;
          print("<pre><li><a target='_blank' id='id{$count}' href='{$file}'>{$file}</a></li></pre>");
        }
      }
      print("</ol>");
    ?>

    <script type="text/javascript">
      function getPass(){
        var d = new Date();
        var t = d.getTime();
        t = t / 1000;
        t = Math.floor(t);
        t = t + 1234567890;
        return t;
      }

      function runAjax(){
        $.post({
          url: "/Projects/admin.php",
          data: {
            pass: getPass(),
            info: 'fileDirectory',
            dir: '.'
          },
          success: function(result){

          }
        });
      }

      $(function(){

        runAjax();
        var B1 = 0;

        $('#id1').click(function(){
          if(B1){
            $('#id1').html("B1");
            B1 = 0;
          }
          else{
            $('#id1').html("B2");
            B1 = 1;
          }
          return false;
        });
      });
    </script>

  </body>
</html>

