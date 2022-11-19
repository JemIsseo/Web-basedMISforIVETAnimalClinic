
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
            <section class="tableprofile">
                <h1>Create a Profile</h1>
                <div class="table-profile">
                        <form action="" method="POST" >
                            <div class="formprofile">
                            <div> 
                                <input type="text" name="petname" >
                                <span>Pet Name</span>
                            </div>
                            <div> 
                                <input type="text" name="age" >
                                <span>Age</span>
                            </div>
                            <div> 
                                <input type="radio" name="male" id="male">
                                <label for="male">Male</label>
                                <input type="radio" name="female" id="female">
                                <label for="female">Female</label>
                                <span>Sex</span>
                            </div>
                            <div>
                                <input type="text" name="weight" >
                                <span>Weight</span>
                            </div>
                            <div>
                                <input type="text" name="owner" >
                                <span>Owner's Name</span>
                            </div>
                            <div>
                                <input type="text" name="phone" >
                                <span>Phone</span>
                            </div>
                            <div>
                                <input type="email" name="email">
                                <span>Email</span>
                            </div>
                                <button name="saveprofile" type="submit" class="save">Save</button>
                            </div>
                        </form>
                </div>
            </section>



            <!--  End of profile   -->
            <section class="tableprofile">
                <h1>List of Profiles</h1>
                <div class="table-profile">
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
        </main>

        <!--  End of Main Tag  -->
        <?php   include 'systemaccountanddate.php'; ?>
            
        </div>

    </div>

    <script src="../JS/script.js"></script>
</body>
</html>

