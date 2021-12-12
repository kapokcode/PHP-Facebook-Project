<?php
$token = $_POST["token"];
$idforcomment = $_POST["idforcomment"];
$msg = $_POST["msg"];
$numberloop = $_POST["numberloop"];
function GetCH($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,trim($url));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch,CURLOPT_HTTPAUTH,CURLAUTH_ANY);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);

        $sendCH = curl_exec($ch);
        curl_close($ch);
        return $sendCH;
};
for($i=0;$i<$_POST["numberloop"];$i++){
  GetCH("https://graph.facebook.com/".$idforcomment."/comments?method=POST&message=".$msg."&access_token=".$token);
}
echo "<strong>กำลังทำงาน ได้ไม่ได้แล้วแต่ดวง !!</strong>";
?>
