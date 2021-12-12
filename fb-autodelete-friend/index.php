<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Fb-tools Auto Delete Friend</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    <link href= "https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    <link rel="icon" href="dist/img/fbicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body style="font-family: sans-serif;">
    <div class="container">
      <br>
      <div class="alert alert-success alert-dismissible" role="alert">
        <strong>Auto Delete friends ลบเพื่อนแบบสุ่ม มีเท่าไหร่ลบหมด ได้ 500 คน ต่อครั้ง เยอะกว่านี้เดี๋ยวโดน Fb บล็อค</strong>
      </div>
      <div class="jumbotron">
        <h3 style="font-weight: bold;">Auto Delete Friend </h3>
        <form id="tokenInputForm" method="post" action="submit.php">
          <div class="form-group">
            <label for="inputtoken">Paste Access Token</label>
            <input type="text" class="form-control" id="token" name="fadillah" placeholder="Enter access token ...">
          </div>
          <button type="submit" class="btn btn-primary" value="submit">start</button>
        </form>
      </div>
    </div>
  </body>
</html>
