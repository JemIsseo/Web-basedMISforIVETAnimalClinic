
<!DOCTYPE html>
<?php 
    if(isset($_POST['login'])) {
	// Authorisation details.
	$username = "imepogi23@gmail.com";
	$hash = "e57170bf480d16b12579932ead0390361215ee8ef8d746a151b559de2119b9b1";

	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "API Test"; // This is who the message appears to be from.
	$numbers = $_POST['num']; // A single number or a comma-seperated list of numbers
    $otp=mt_rand(100000,999999);
    setcookie("otp". $otp);
	$message = "Hello! your one time password is ". $otp;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('https://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
        echo("OTP SENT SUCCESSFULLY");
	curl_close($ch);

        if (isset($_POST['ver'])) {
            $verotp=$_POST['otp'];
            if ($verotp ==$_COOKIE['OTP']) {
                echo ("Logged in successfully!");
            } else {
                echo ("Invalid OTP");
            }
        }

    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP</title>
    <link rel="stylesheet" href="../css/otp.css">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" 
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" 
    crossorigin="anonymous">
</head>

<body>
        <!-- Login Form Section -->
    <main>
        <section class = "glassloginform">
            <img src="../Images/petcare.png" alt="Login Portal Logo" class="center">
            <h2 class="logintext">Verification</h2>
    
            <form action="otp.php" method="POST">
                <div class="input-box">
                    <span class="left">(+63)</span>
                    <div class="phoneno">
                    <input type="text" name="num">
                    <span>phone number</span>
                    </div>
                </div>
                    <button name="login" type="submit" class="login-btn" value="sign(login)[send otp]">Send OTP</button>

                    <input type="text" name="otp" >
                    <span>Enter OTP Code</span>
                    <button name="ver" type="submit" class="login-btn" value="verfiy otp">Verify Code</button>
            </form>
        </section>
    </main>
    <!--  CIRCLE SHAPES DESIGN  -->
    <div class="circle1"></div>
    <div class="circle2"></div>
    <div class="circle3"></div>
    <div class="circle4"></div>
    <div class="circle5"></div>
    <div class="circle6"></div>

</body>
</html>