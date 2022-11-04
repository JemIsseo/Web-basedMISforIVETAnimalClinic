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
    <!-- Materical Icons Link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Stylesheet  -->
    <link rel="stylesheet" href="../CSS/dashboardstyle.css">

</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="../Images/ivet.png" alt="IVET Logo">
                    <h2><span class="primary-variant">ANIMAL</span><span class="warning"> CLINIC</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-sharp">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="#">
                    <span class="material-symbols-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">person</span>
                    <h3>User Account</h3>
                </a>
                <a href="#" class="active">
                    <span class="material-symbols-sharp">pets</span>
                    <h3>Profile</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">inventory</span>
                    <h3>Stock</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">inventory_2</span>
                    <h3>Add Stock</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">medical_information</span>
                    <h3>Services and Reservation</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">report</span>
                    <h3>Reports</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">settings</span>
                    <h3>Settings</h3>
                </a>
                <a href="index.php">
                    <span class="material-symbols-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!--  Main Tag  -->
        <main>
            <h1>Dashboard</h1>

            <div class="date">
                <input type="date">
            </div>

            <div class="insights">
                <div class="sales">
                    <span class="material-symbols-sharp">analytics</span>
                         <div class="middle">
                            <div class="left">
                                <h3>Total Sales</h3>
                                <h1>₱435,000</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36' ></circle>
                                </svg>
                                <div class="number">
                                    <p>79%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">Last 30 Days</small>
                </div>
                <!--  End of Sales  -->
                <div class="stock">
                    <span class="material-symbols-sharp">storage</span>
                         <div class="middle">
                            <div class="left">
                                <h3>Total Stocks</h3>
                                <h1>10,000</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36' ></circle>
                                </svg>
                                <div class="number">
                                    <p>95%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">Last 30 Days</small>
                </div>
                <!--  End of Stock  -->
                <div class="reservation">
                    <span class="material-symbols-sharp">snippet_folder</span>
                         <div class="middle">
                            <div class="left">
                                <h3>Total Reservations</h3>
                                <h1>300</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36' ></circle>
                                </svg>
                                <div class="number">
                                    <p>69%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">Last 30 Days</small>
                </div>
                <!--  End of Reservation  -->
            </div>
        </main>
    </div>
</body>
</html>