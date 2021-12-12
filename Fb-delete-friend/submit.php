<?php

echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Fb-tools Auto Delete Friend</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    <link href= "https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body style="font-family: sans-serif;">
    <div class="container">
      <br>
          <a class="btn btn-success" href="./deletefriends.php">Click Here to Delete All Friend</a>
  </body>
</html>';

$token=$_POST['fadillah'];

$file = fopen('token.txt','w');
               fwrite($file,$token);
               fclose($file);
exit;
?>
