<!DOCTYPE html>
<html lang="en">

	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="https://static.chotot.com.vn/storage/marketplace/shield-iconx4.png">
        <title>Facebook Profile Picture Guard</title>
				<link rel="icon" href="dist/img/fbicon.png">
				<link rel="stylesheet" href="master_style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
				<style>
					img{
						cursor: pointer;
					}
				</style>
	</head>
	<body>
		<div class="container">
			<br>
			<div class="alert alert-success alert-dismissible" role="alert" style="font-family: sans-serif;">
				<strong>Facebook Profile Picture Guard ใช้สำหรับ เปิดโล่ Facebook เพื่อไม่ให้คนอื่น Copy ภาพโปรไฟล์เราได้</strong>
			</div>
			<div class="jumbotron">
				<div class="lockscreen-image">
					<center>
						<p id="imgfb"><img src="img/fb-profile.png" alt="User Image" style="width: 120px;height: 120px;"></p>
					</center>
				</div>
				<h3><strong>Facebook Profile Picture Guard</strong></h3>
				<br>
				<form method="post" id="guard">
					<div class="form-group">
						<label for="accessToken">Paste Access Token :</label>
						<input type="text" class="form-control" name="access_token" id="access_token" placeholder="ใส่ Token Facebook ของคุณ ...">
					</div>
					<div class="form-group">
						<div class="radio">
							<input name="active" type="radio" id="turn_on" value="on" checked>
							<label for="turn_on">เปิดโล่ [ On Profile Guard ]</label>
						</div>
						<div class="radio">
							<input name="active" type="radio" value="off" id="turn_off">
							<label for="turn_off">ปิดโล่ [ Off Profile Guard ]</label>
						</div>
					</div>
					<button type="submit" name="submit" id="process" class="btn btn-primary">start</button>
				</form>
				<div class="help-block text-center margin-top-20"></div>
			</div>
		</div>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
			<script src="sweetalert.min.js"></script>
			<script>
				var _0x127d=["\u0E2D\u0E4A\u0E30\x21","\u0E40\u0E01\u0E34\u0E14\u0E02\u0E49\u0E2D\u0E1C\u0E34\u0E14\u0E1E\u0E25\u0E32\u0E14\u0E42\u0E1B\u0E23\u0E14\u0E25\u0E2D\u0E07\u0E2D\u0E35\u0E01\u0E04\u0E23\u0E31\u0E49\u0E07\u0E43\u0E19\u0E20\u0E32\u0E22\u0E2B\u0E25\u0E31\u0E07","\x65\x72\x72\x6F\x72","\x66\x61\x69\x6C","\x70\x61\x72\x73\x65","\x74\x69\x74\x6C\x65","\x6D\x65\x73\x73\x61\x67\x65","\x74\x79\x70\x65","\x64\x6F\x6E\x65","\x50\x4F\x53\x54","\x61\x70\x69\x2E\x70\x68\x70","\x73\x65\x72\x69\x61\x6C\x69\x7A\x65","\x74\x65\x78\x74","\x61\x6A\x61\x78","\x68\x74\x6D\x6C","\x23\x69\x6D\x67\x66\x62","\x69\x6D\x67\x2E\x70\x68\x70","\x70\x72\x65\x76\x65\x6E\x74\x44\x65\x66\x61\x75\x6C\x74","\x73\x75\x62\x6D\x69\x74","\x23\x67\x75\x61\x72\x64"];$(function(){$(_0x127d[19])[_0x127d[18]](function(_0x35b6x1){$[_0x127d[13]]({method:_0x127d[9],url:_0x127d[10],data:$(this)[_0x127d[11]](),dataType:_0x127d[12]})[_0x127d[8]](function(_0x35b6x2){var _0x35b6x3=JSON[_0x127d[4]](_0x35b6x2);swal(_0x35b6x3[_0x127d[5]],_0x35b6x3[_0x127d[6]],_0x35b6x3[_0x127d[7]])})[_0x127d[3]](function(){swal(_0x127d[0],_0x127d[1],_0x127d[2])});$[_0x127d[13]]({method:_0x127d[9],url:_0x127d[16],data:$(this)[_0x127d[11]](),dataType:_0x127d[12]})[_0x127d[8]](function(_0x35b6x2){$(_0x127d[15])[_0x127d[14]](_0x35b6x2)});_0x35b6x1[_0x127d[17]]()})})
			</script>
	</body>
</html>
