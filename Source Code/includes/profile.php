
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
    <!-- Materical Icons Link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Stylesheet  -->
    <link rel="stylesheet" href="../CSS/profile.css">
</head>
<body>
    <div class="container">
        <?php  include 'aside.php'; ?>    

        <!--  Main Tag  -->
        <main>
            <section class="tableaccountrecords">
                <h1>List of Profiles</h1>
                <div class="accountrecords">
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
            </section>
            <!--  End of table useraccount   -->
            <h1>Create Profile</h1>
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
        </main>

        <!--  End of Main Tag  -->
        <?php   include 'systemaccountanddate.php'; ?>
            
        </div>

    </div>

    <script src="../JS/script.js"></script>
</body>
</html>

