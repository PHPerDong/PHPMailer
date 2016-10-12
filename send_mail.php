<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/12
 * Time: 9:37
 */
//使用绝对路劲
$path = dirname(__FILE__);

require $path.'/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.qq.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->CharSet  = 'UTF-8';
$mail->Username = '1139429211@qq.com';                 // SMTP username
$mail->Password = 'dongweijie123';                           // SMTP password
//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
//$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('1139429211@qq.com', 'sunny');
$mail->addAddress('3511477250@qq.com', '哈哈');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('1139429211@qq.com', 'sunny');   //假设要回复，回复给哪个邮箱
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // 要发送的压缩包
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // 要发送的文件
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = '这是邮件的主题';           //邮件主题
$mail->Body    = '邮件的正文部分';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}