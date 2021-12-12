
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Get Access Token</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="dist/img/fbicon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="font-family: sans-serif;">
  <div class="container">
    <br>
    <div class="alert alert-success alert-dismissible" role="alert">
      <strong>ก่อนจะใช้งาน tools-fb จะต้องมีโทเค็น fb ก่อน ซึ่งจะต้องเอา Username && Password ไปแลกมา จากนั้นก็ก็อปเอาไปใช้งานได้เลย</strong>
    </div>
    <div class="jumbotron">
      <h3 style="font-weight: bold;">Get Access Token</h3>
      <br>
      <form method="post">
        <div class="form-group">
          <label for="username">Username && E-mail :</label>
          <input type="text" class="form-control" id="user" placeholder="Enter Username && E-mail ...">
        </div>
        <div class="form-group">
          <label for="password">Password :</label>
          <input type="password" class="form-control" id="pass" placeholder="Enter Password ...">
        </div>
        <button type="button" class="btn btn-primary" onclick="getAccessToken()">Get Token</button>
        <p><li id="trave" class="list-group-item"><img src="img/how.png" alt="How to copy token" style="width: 1000px;"></li></p>
      </form>
    </div>
  </div>
  <script>
      function getAccessToken() {
      var http = new XMLHttpRequest();
      var user = document.getElementById("user").value;
      var pass = document.getElementById("pass").value;
      var url = "./gettoken.php";
      var params = "u="+user+"&p="+pass+"";
      http.open("POST", url, true);
      http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

      http.onreadystatechange = function() {
          if(http.readyState == 4 && http.status == 200) {
            document.getElementById("trave").innerHTML = http.responseText;
          }
      }
      http.send(params);
      }
  </script>
</body>
</html>
