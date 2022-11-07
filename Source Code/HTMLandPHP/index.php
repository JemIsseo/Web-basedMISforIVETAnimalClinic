<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Account</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" 
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" 
    crossorigin="anonymous">
</head>

<body>
        <!-- Login Form Section -->
    <main>
        <section class = "glassloginform">
            <img src="../Images/petcare.png" alt="Login Portal Logo">
            <h2 class="logintext">User Login</h2>
    
                <?php if (isset($_GET['error'])) {?>
                    <p class="error"><?php  echo $_GET['error'] ?></p>
                <?php } ?> 
    
            <form action="dashboard.php" method="POST">
                <div class="input-box">
                    <i class="fa-sharp fa-solid fa-user"></i>
                    <input type="text" name="username" required>
                    <span>Username</span>
                </div>
                <div class="input-box">
                    <i class="fa-sharp fa-solid fa-lock"></i>
                    <input type="password" name="password" required>
                    <span>Password</span>
                </div>
                    <button name="login" type="submit" class="login-btn">Login</button>
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