<?php include 'connect.php'; 
    if(isset($_POST['submit'])){
    $pname = $_POST['petname'];
    $age = $_POST['age'];
    $utsex = $_POST['sex'];
    $weight = $_POST['weight'];
    $owner = $_POST['owner'];
    $phone = $_POST['phone']; 
    $email = $_POST['email'];

    $sql = "insert into tblprofile(petname, age, sex, weight, ownername, phone, email) 
            values('$pname','$age','$utsex','$weight','$owner','$phone','$email')";
    $res = mysqli_query($conn,$sql);
    if($res) {
        header('location:profile.php');
    } 
    else {
        die(mysqli_error($conn));
    }
}
?>




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
    <link rel="stylesheet" href="../css/profile.css">
</head>
<body>
    <div class="container">
        <?php  include 'aside.php'; ?>    

        <!--  Main Tag  -->
        <main>
            <section class="tableprofile">
                <h1>Create a Profile</h1>
                <div class="table-profile">
                    <form method="POST">
                        <div class="formprofile">
                            <div> 
                                <input type="text" name="petname" placeholder="Enter Pet Name" required>
                                <span>Pet Name</span>
                            </div>
                            <div> 
                                <input type="text" name="age" placeholder="Enter Pet Age" required>
                                <span>Age</span>
                            </div>
                            <div> 
                                <input type="text" name="sex" placeholder="Choose..." list="sex" required>
                                <datalist id="sex">
                                <option>Male</option>
                                <option>Female</option>    
                                </datalist>
                                <span>Sex</span>
                            </div>
                            <div>
                                <input type="text" name="weight" placeholder="Enter Pet Weight" required>
                                <span>Weight (Kg)</span>
                            </div>
                            <div>
                                <input type="text" name="owner" placeholder="Enter Owner's Name" required>
                                <span>Owner's Name</span>
                            </div>
                            <div>
                                <input type="text" name="phone" placeholder="Enter Phone No." required>
                                <span>Phone</span>
                            </div>
                            <div>
                                <input type="email" name="email" placeholder="Enter Email">
                                <span>Email</span>
                            </div>
                            <div class="buttonflex">
                                <button name="submit" type="submit" class="save" title="Save the record">Save</button>
                                <button name="clear" class="cancel" title="Clear all inputs">Clear</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            <!--  End of profile   -->
            <section class="tableprofile">
                <div class="accrecsearch">
                    <h1>List of Profiles</h1>
                    <div class="searchbar">
                        <input type="text" placeholder="Search here"><span class="material-symbols-sharp">search</span>
                    </div>
                </div>
                <div class="table-profile">
                        <table class="content-table">
                            <thead>
                                <tr>
                                    <th>ProfileID</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Sex</th>
                                    <th>Weight</th>
                                    <th>Owner</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>        </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $sql = "Select * from tblprofile";
                                    $res= mysqli_query($conn,$sql);

                                    if($res){
                                    while($row=mysqli_fetch_assoc($res)){
                                    $proid=$row['profileid'];
                                    $pname=$row['petname'];
                                    $age=$row['age'];
                                    $utsex=$row['sex']; 
                                    $weight=$row['weight'];
                                    $owner=$row['ownername'];
                                    $phone=$row['phone'];
                                    $email=$row['email'];
                                    echo '<tr>
                                    <td>'.$proid.'</td>
                                    <td>'.$pname.'</td>
                                    <td>'.$age.'</td>
                                    <td>'.$utsex.'</td>
                                    <td>'.$weight.'</td>
                                    <td>'.$owner.'</td>
                                    <td>'.$phone.'</td>
                                    <td>'.$email.'</td>
                                    <td>
                                    <button name="savechanges" class="modal-open" data-modal="modal1"><span class="material-symbols-sharp edit" title="Edit this profile">edit</span></button>
                                    <button name="archiveaccount" class="modal-open" data-modal="modal2"><span class="material-symbols-sharp archive" title="Archive the record">archive</span></button>
                                    </td>
                                        </tr>';
                                        }
                                    }
?>
                            </tbody>
                        </table>
                </div>
            </section>
        </main>

        <!--  End of Main Tag  -->
        <?php   include 'systemaccountanddate.php'; ?>
        <!--  Start of Retrieve section  -->
        <h1>Retrieve Profile</h1>
        <div class="buttons">
            <div class="buttonmodify">
                <button class="modal-open" data-modal="modal4" title="View and Restore Record"><span class="material-symbols-sharp">table_view</span>View Archive Profile</button> 
            </div>
        </div>
        
        <!-- Start of Modal --> 
        <!-- Modal of Edit Profile -->
        <?php 
            // // Update Profile 
            // $sql = "Select * from tblprofile where profileid = $proid";
            // $res = mysqli_query($conn, $sql);
            // $row = mysqli_fetch_assoc($res);
            // $pname = $row['name'];
            // $age = $row['age'];
            // $sex = $row['sex'];
            // $weight = $row['weight'];
            // $owner = $row['owner'];
            // $phone = $row['phone'];
            // $email = $row['email'];
        ?>
        <div class="modal" id="modal1">
            <div class="modal-content">
                <div class="modal-header"><h1>Edit Profile</h1>
                    <button class="icon modal-close"><span class="material-symbols-sharp">close</span></button>
                </div>
                    <div class="modal-body">
               
                        <section class="tableprofile">
                            <div class="table-profile">
                                <form action="" method="POST" >
                                <div class="formprofile">
                                    <div> 
                                    <input type="text" name="petname" value=<?php 
                                    echo $pname; ?>>
                                    <span>Pet Name</span>
                                    </div>
                                <div> 
                                <input type="text" name="age" >
                                <span>Age</span>
                            </div>
                            <div> 
                                <input type="text" name="sex" list="sex" required>
                                <datalist id="sex">
                                <option>Male</option>
                                <option>Female</option>    
                                </datalist>
                                <span>Sex</span>
                            </div>
                          
                            <div>
                                <input type="text" name="owner" >
                                <span>Owner's Name</span>
                            </div>
                            <div>
                                <input type="text" name="weight" >
                                <span>Weight</span>
                            </div>
                            <div>
                                <input type="email" name="phone" >
                                <span>Phone</span>
                            </div>
                            <div>
                                <input type="email" name="email">
                                <span>Email</span>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

                </div>
                    <div class="modal-footer">
                        <div class="buttonflexright">
                            <button name="updateprofile" type="submit" class="savechanges" title="Save Record">Save Changes</button>
                            <button type="submit" class="cancel modal-close" title="Cancel">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal of Archive Profile MessageBox -->
        <?php 
            // Insert data in tblarcprofile
                                   
        
        ?>
        <div class="modal" id="modal2">
            <div class="modal-content">
                <div class="modal-header"><h1>Archive Profile</h1>
                    <button class="icon modal-close"><span class="material-symbols-sharp">close</span></button>
                </div>
                <div class="modal-body"><h3>Are you sure you want to archive this record?</h3></div>
                    <div class="modal-footer">
                        <div class="buttonflexright">
                            <button name="savearchiveprofile" type="submit" class="yes">Yes</button>
                            <button type="submit" class="cancel no modal-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal of Restore Profile MessageBox -->
        <div class="modal" id="modal3">
            <div class="modal-content">
                <div class="modal-header"><h1>Unarchive Profile</h1>
                    <button class="icon modal-close"><span class="material-symbols-sharp">close</span></button>
                </div>
                <div class="modal-body"><h3>Are you sure you want to restore this record?</h3></div>
                    <div class="modal-footer">
                        <div class="buttonflexright">
                            <button name="savearchiveprofile" type="submit" class="yes">Yes</button>
                            <button type="submit" class="cancel no modal-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal of Restore Profile -->
        <div class="modal" id="modal4">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Restore Profile</h1>
                    <div class="accrecsearch">
                        <div class="searchbar">
                        <input type="text" placeholder="Search here"><span class="material-symbols-sharp">search</span>
                        <button class="icon modal-close"><span class="material-symbols-sharp">close</span></button>
                        </div>
                    </div>
                </div> 
                   
                <div class="modal-body">
                    <section class="tableprofile">
                    <div class="table-profile">
                        <table class="content-table table-archive">
                            <thead>
                                <tr>
                                    <th>ProfileID</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Sex</th>
                                    <th>Weight</th>
                                    <th>Owner</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>        </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Choco</td>
                                    <td>3</td>
                                    <td>Male</td>
                                    <td>15kg</td>
                                    <td>Irene Cruz</td>
                                    <td>09345678821</td>
                                    <td>CruzIrene@gmail.com</td>
                                    <td>
                                    <button class="modal-open" data-modal="modal3" name="restoreprofile">
                                        <span class="material-symbols-sharp restore" title="Unarchiving">unarchive</span>
                                    </button> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Brownie</td>
                                    <td>5</td>
                                    <td>Male</td>
                                    <td>20kg</td>
                                    <td>Stephanie Corpuz</td>
                                    <td>09125568219</td>
                                    <td>StephCorpuz@gmail.com</td>
                                    <td>
                                    <button class="modal-open" data-modal="modal3" name="restoreprofile">
                                        <span class="material-symbols-sharp restore" title="Unarchiving">unarchive</span>
                                    </button> 
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </section>
                    <div class="modal-footer">
                        <div class="buttonflexright">
                            <button type="submit" class="cancel modal-close" title="Cancel">Cancel</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <script src="../JS/script.js"></script>
</body>
</html>

