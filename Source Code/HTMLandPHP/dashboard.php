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
                   <a href="#"><img src="../Images/ivet.png" alt="IVET Logo"></a>
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
                <a href="useraccount.php">
                    <span class="material-symbols-sharp">person</span>
                    <h3>User Account</h3>
                </a>
                <a href="profile.php" class="active">
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
                    <h3>Products and Services</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">find_in_page</span>
                    <h3>Audit Trail</h3>
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
            <section class="recenttrans">
                <h1>Recent Transactions</h1>
                <div class="listoftrans">
                    <div class="tabletransact">
                        <table class="content-table">
                            <thead>
                                <tr>
                                    <th>Transaction No.</th>
                                    <th>Item Name</th>
                                    <th>Quantity</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dog Soap</td>
                                    <td>4</td>
                                    <td>12/01/2022</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Immunol Vitamin</td>
                                    <td>1</td>
                                    <td>12/03/2022</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Pedigree</td>
                                    <td>3</td>
                                    <td>12/04/2022</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Antibiotic</td>
                                    <td>5</td>
                                    <td>12/07/2022</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Beef Jerky Food</td>
                                    <td>10</td>
                                    <td>12/10/2022</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </main>

        <!--  End of Main Tag  -->
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-symbols-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-symbols-sharp">light_mode</span>
                    <span class="material-symbols-sharp d">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Welcome,  <b>Kim</b></p>
                        <small class="text-muted">Administrator</small>
                    </div>
                    <div class="profile-photo">
                        <img src="../Images/profile-1.jpg" alt="User Photo">
                    </div>
                </div>
            </div>

            <!-- End of top -->
            <div class="date-today">
                <div class="rectangle-border"></div>
                <div class="datetoday">
                <span class="material-symbols-sharp">event</span>
                       <?php  echo "<br>Today is " . 
                       date("M d, Y \n l, ") . 
                       "<br>Have a great day! :)"   ?>
                </div>
            </div>

            <!--  End of Date  -->
            <div class="schedule">
                <h2>Schedule Reservations</h2>
                <div class="schedinfo">
                        <table class="content-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Owner's Name</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Kristina Salinga</td>
                                    <td>11/24/2022</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Brill Egualada</td>
                                    <td>11/07/2022</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Jeremy Liberty</td>
                                    <td>12/15/2022</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Vann Oliveros</td>
                                    <td>12/23/2022</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Roahn Vallega</td>
                                    <td>12/29/2022</td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>

    </div>

    <script src="../JS/script.js"></script>
</body>
</html>

