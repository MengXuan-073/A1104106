<html>
    <head>
        <meta charset="utf-8">
    </head>

<?php

// 連結資料
$name=$_POST["name"];
$email=$_POST["email"];
$photo=$_FILES["photo"];

$time=time();
$FileName=$time.".png";
$relativePath = "pic/" . $FileName;
$savePath = __DIR__ . '/' . $relativePath;
$webPath = "http://localhost/hw6_0425/" . $relativePath; // 瀏覽器可以看的網址

if ( copy($photo["tmp_name"], $savePath)) {
    echo "檔案上傳成功<br/>";
    unlink($photo["tmp_name"]);
    echo "姓名:" . $name . "<br/>";
    echo "信箱:" . $email . "<br/>";
    echo "<img src='$webPath' width='40%'><br/>";
}
else
   echo "<a href='register.php'>照片上傳失敗，請重新註冊</a>";

// 連結資料庫
$link = mysqli_connect( // 如果@mysqli_connect，小老鼠可用於將結果隱藏
            'localhost',  // MySQL主機名稱 
            'root',       // 使用者名稱 
            '',  // 密碼
            'hw6_0425');  // 預設使用的資料庫名稱

    mysqli_set_charset($link, 'utf8'); //防止亂碼

    $sql = "INSERT INTO register (name, email, photo) VALUES ('$name', '$email', '$webPath')";
    mysqli_query($link, $sql);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '';                     //SMTP username
    $mail->Password   = '';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet = "UTF-8"; // 設定信件內容編碼
    $mail->Encoding = "base64"; // 避免亂碼


    //Recipients
    $mail->setFrom('a1104106@mail.nuk.edu.tw', '註冊系統');
    // $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    // $mail->addAddress('a520kiki520@gmail.com');               //Name is optional
    $mail->addAddress($email);
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "恭喜註冊成功";
    $mail->Body    = " <p>{$name}您好：</p>
                       <p>恭喜您註冊成功！</p>
                       <p>以下是您上傳的照片：</p>
                       <img src='cid:userphoto' width='40%'><br>";
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    // 嵌入圖片
    $mail->addEmbeddedImage($savePath, 'userphoto');

    $mail->send();
    echo '註冊成功信件已寄出';
} catch (Exception $e) {
    echo "寄信失敗: {$mail->ErrorInfo}";
}
?>

</html>
