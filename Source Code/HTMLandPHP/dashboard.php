<?php 


    $uname = $_POST['username'];
    $pword = $_POST['password']; 

    // Database Connection

    $con = new mysqli("localhost", "root", "", "dbivetclinic");
    if ($con->connect_error) {
        die("Failed to connect : " . $con->connect_error);
    } else {
        $stmt = $con->prepare("SELECT * FROM tbluseraccount WHERE username = ?");
        $stmt->bind_param("s", $uname);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if ($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if ($data['password'] === $pword) {
                echo "<h1>Welcome to Dashboard!</h1>";
            } else {
                header("Location: index.php?error=Login failed please try again");
                die();
            }
        } else {
            header("Location: index.php?error=Login failed please try again");
            die();  
        }
    }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
</body>
</html>