<?php
require 'connection.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$otp = rand(100000, 999999);
$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Port = "587";
$mail->Username = "stellarminds3@gmail.com";
$mail->Password = "asp12345678";
$mail->Subject = "test";
$mail->setFrom("stellarminds3@gmail.com");
$mail->Body = "OTP for registration is: $otp";
$mail->addAddress($_POST['email']);
$mail->send();
if ($mail->send()) {
    $query = "insert into otp values('$otp','" . $_POST['email'] . "')";
    $result = mysqli_query($con, $query);
    if ($result) {
        ?>
        <form action="credential.php" method="post">
            <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>"/>
            <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>"/>
            <input type="hidden" name="phone" value="<?php echo $_POST['phone']; ?>"/>
            <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>"/>
            <h5 style="margin-top:-10%; font-family: sans-serif; font-weight: 10">A 6-digit OTP has been at your email address<br><b><?php echo $_POST['email']; ?></b><br> Please enter the OTP to complete your registration</h5>
            <input type="text" placeholder="Enter OTP" name="otp" />


            <button type="submit" class="btn" name="register" id="register">Submit</button>
        </form>
        <?php
    }
} 
else {
    echo "wrong";
}
$mail->smtpClose();
?>