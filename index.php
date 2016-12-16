<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>All Projects</title>
  </head>
  <body>
    <pre><h1> My Projects</h1></pre>
    <?php
      $dir = '/var/www/html/';
      $files = scandir($dir);
      $count=0;
      foreach($files as $file)
      {
        if(is_dir($file)&&($file != '.')&&($file != '..')&&($file != '.git'))
        {
          $count++;
          print("<pre>{$count}. <a target='_blank' href='{$file}'>{$file}</a></pre>");
        }
      }
    ?>
  </body>
</html>
