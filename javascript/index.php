<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Javascript</title>

    <script>
      function finput1()
      {
        alert("input1");
        return true;
      }
    </script>
  </head>
  <body>

    <form class="" action="index.php" method="post" onsubmit="return finput1();">
      <input type="text" name="input1" value="">
      <input type="submit" name="" value="Submit">
    </form>

  </body>
</html>
