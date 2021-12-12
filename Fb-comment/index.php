<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Auto Comments Facebook </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="icon" href="dist/img/fbicon.png">
    <style media="screen">
      lebel{
        font-weight: bold;
      }
    </style>
  </head>
    <body style="font-family: sans-serif;">
      <div class="container">
        <br>
        <div class="alert alert-success alert-dismissible" role="alert">
          <strong>Auto Comments เครื่องมือนี้เอาไว้ปั่นคอมเมนต์ เล่นบ่อยๆระวังโดนบล็อค</strong>
        </div>
        <div class="jumbotron">
          <h3 style="font-weight: bold;">Auto Comments</h3>
          <br>
          <form method="post" action="autocomments.php">
            <div class="form-group">
              <label for="accessToken">Paste Access Token :</label>
              <input type="text" class="form-control" id="token" name="token" placeholder="ใส่ โทเค็น ...">
            </div>
            <div class="form-group">
              <label for="idcomments">Id Comments :</label>
              <input type="text" class="form-control" id="idforcomment" name="idforcomment" placeholder="ใส่เลขไอดี คอมเมนต์ ...">
            </div>
            <div class="form-group">
              <label for="message">Message :</label>
              <input type="text" class="form-control" id="msg" name="msg" placeholder="ใส่ข้อความที่ต้องการแสดง ...">
            </div>
            <div class="form-group">
              <label for="numberloop">Number Loop :</label>
              <input type="text" class="form-control" id="numberloop" name="numberloop" placeholder="ใส่จำนวนคอมเมนต์ที่ต้องการแสดง ...">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">start</button>
          </form>
        </div>
      </div>
  </body>
</html>
