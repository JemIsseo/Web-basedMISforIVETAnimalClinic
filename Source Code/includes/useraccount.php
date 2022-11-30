
<?php 
    include 'connect.php';

    if (isset($_POST['saveaccount'])  && isset($_FILES['my_image']))  {
        $un = $_POST['username'];
        $pw = $_POST['password'];
        $ut = $_POST['ut'];
        $ea = $_POST['emailaddress'];

        $img_name = $_FILES['my_image']['name'];
        $img_size = $_FILES['my_image']['size'];
        $tmp_name = $_FILES['my_image']['tmp_name'];
      
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);

                $allowed_exs = array("jpg", "jpeg", "png");

                if (in_array($img_ex_lc, $allowed_exs)) {
                    $img = uniqid("IMG-", true).'.'.$img_ex_lc;
                    $img_upload_path = 'uploads/'.$img;
                    move_uploaded_file($tmp_name,  $img_upload_path);

                    // Insert into database
                    $sql = "insert into tbluseraccount(username,password,usertype,emailaddress,image) 
                    values('$un','$pw','$ut','$ea','$img')";
                    $res = mysqli_query($conn, $sql);
                    if ($res) { ?>
                        <div class="statusmessagesuccess" id="close">
                            <h2>Account Added Successfully!</h2>
                            <button class="icon modal-close"><span class="material-symbols-sharp">close</span></button>
                        </div>       
                 <?php   }
                } 
            }


             // account update statement 
if(isset($_POST['updateaccount']) && isset($_FILES['image']) ){
    $un = $_POST['username'];
    $pw = $_POST['password'];
    $ut = $_POST['ut'];
    $ea = $_POST['emailaddress'];

    $img_name = $_FILES['image']['name'];
    $img_size = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];
  
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $img = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = 'uploads/'.$img;
                move_uploaded_file($tmp_name,  $img_upload_path);

                $sql = "update tbluseraccount set username ='$un',password ='$pw', 
                        usertype='$ut',emailaddress ='$ea', image='$img' 
                        where username= '$un'";
                $res = mysqli_query($conn,$sql);
    if($res) {?>  
        <div class="statusmessagesuccess" id="close">
            <h2>Account Updated Successfully!</h2>
            <button class="icon modal-close"><span class="material-symbols-sharp">close</span></button>
        </div>
        
    <?php  
    } 
    else {
        die(mysqli_error($conn));
    }
}
}



?>

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
    <link rel="stylesheet" href="../css/useraccount.css">
</head>
<body>
    <div class="container">
        
        <?php  include 'aside.php'; ?>
        <!--  Main Tag  -->
        <main>
            <section class="tableaccountrecords">
                <div class="accrecsearch">
                    <h1>Account Records</h1>
                    <div class="searchbar">
                        <input type="text" placeholder="Search here"><span class="material-symbols-sharp">search</span>
                    </div>
                </div>
                <div class="accountrecordsbg">
                    <div class="accountrecords">
                        <table class="content-table table-fixed">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Usertype</th>
                                    <th>Email Address</th>
                                    <th>Image</th>
                                    <th>       </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                    $sql = "Select * from tbluseraccount";
                                    $res= mysqli_query($conn,$sql);

                                    if($res){
                                    while($row=mysqli_fetch_assoc($res)){
                                    $un=$row['username'];
                                    $pw=$row['password'];
                                    $ut=$row['usertype'];
                                    $ea=$row['emailaddress']; 
                                    $img=$row['image'];
                     ?>  
                                    <tr>
                                    <td><?php echo $un; ?></td>
                                    <td><?php echo $pw; ?></td>
                                    <td><?php echo $ut; ?></td>
                                    <td><?php echo $ea; ?></td>
                                    <td>
                                    <div class="profile-photo">
                                            <img src="uploads/<?php echo $img;?>">
                                    </div>
                                    </td>
                                    <?php echo '
                                    <td>
                                        <button class="modal-open showUpdateAccount" data-modal="modal1" value="'.$un.'" ><span class="material-symbols-sharp edit" title="Edit this account">edit</span></button>
                                        <button class="modal-open showArchiveAccount" data-modal="modal2" value="'.$un.'"><span class="material-symbols-sharp archive" title="Archive the record">archive</span></button>
                                    </td>';   ?>
                                    </tr>
                    <?php
                               }
                            } 
                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <!--  End of table useraccount   -->
            <section class="tableaccountrecords">
                <h1>Create An Account</h1>
                <div class="accountrecordsbg">
                    <div class="accountrecords ">
                        <form action="" method="POST" enctype="multipart/form-data" >
                            <div class="profilepicture">
                                <span class="material-symbols-sharp">account_circle</span><br><br>
                                <input type="file" name="my_image" title="Insert photo..." required>
                            </div> 
                            <div class="formprofile">
                            <div> 
                                <input type="text" name="username" placeholder="Enter Username" required>
                                <span>Username</span>
                            </div>
                            <div>
                                <input type="password" name="password" placeholder="Enter Password" required>
                                <span>Password</span>
                            </div>
                            <div>
                                <input type="password" placeholder="Enter Confirm Password" required>
                                <span>Confirm Password</span>
                            </div>
                            <div> 
                                <input type="text" name="ut" placeholder="Choose..." list="ut" autocomplete="off" >
                                <datalist id="ut">
                                <option value="IT Expert"></option>   
                                <option value="Admin"></option>
                                <option value="Secretary"></option>   
                                </datalist>
                                <span>Usertype</span>
                            </div>
                            <div>
                                <input type="email" name="emailaddress" placeholder="Enter Email" required>
                                <span>Email Address</span>
                            </div>
                            <div class="buttonflex">
                                <button name="saveaccount" type="submit" class="save" title="Save the record">Save</button>
                                <button class="cancel" title="Clear all inputs">Clear</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!--  End of Create Profile  -->
        </main>
        <!--  End of Main Tag  -->

        <?php  include 'systemaccountanddate.php'; ?>
        <!--  Start of Retrieve section  -->
        <h1>Retrieve Account</h1>
        <div class="buttons">
            <div class="buttonmodify">
                <button class="modal-open" data-modal="modal4" title="View and Restore Account"><span class="material-symbols-sharp">table_view</span>View Archive</button> 
            </div>
        </div>
        <!-- Start of Modal --> 
        <!-- Modal of Edit Account -->
        <div class="modal" id="modal1">
            <div class="modal-content">
                <h1>Edit Account</h1>
                <div class="modal-header"> 
                    <button class="icon modal-close"><span class="material-symbols-sharp">close</span></button>
                </div>
                <div class="modal-body" id="updateAccount">
                </div>
            </div>
        </div>
        <!-- Modal of Archive Account MessageBox -->
        <div class="modal" id="modal2">
            <div class="modal-content">
                <div class="modal-header"><h1>Archive Account</h1>
                    <button class="icon modal-close"><span class="material-symbols-sharp">close</span></button>
                </div>
                <div class="modal-body"><h3>Are you sure you want to archive this record?</h3></div>
                    <div class="modal-footer">
                        <div class="buttonflex">
                            <button name="savearchiveaccount" type="submit" class="yes">Yes</button>
                            <button type="submit" class="cancel no modal-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal of Restore Account MessageBox -->
        <div class="modal" id="modal3">
            <div class="modal-content">
                <div class="modal-header"><h1>Unarchive Account</h1>
                    <button class="icon modal-close"><span class="material-symbols-sharp">close</span></button>
                </div>
                <div class="modal-body"><h3>Are you sure you want to restore this record?</h3></div>
                    <div class="modal-footer">
                        <div class="buttonflex">
                            <button name="savearchiveaccount" type="submit" class="yes">Yes</button>
                            <button type="submit" class="cancel no modal-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal of Restore Account -->
        <div class="modal" id="modal4">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Restore Account</h1>
                    <div class="accrecsearch">
                        <div class="searchbar">
                        <input type="text" placeholder="Search here"><span class="material-symbols-sharp">search</span>
                        <button class="icon modal-close"><span class="material-symbols-sharp">close</span></button>
                        </div>
                    </div>
                </div> 
                
                   
            <div class="modal-body">
                <div class="accountrecordsbg">
                    <div class="accountrecords">
                        <table class="content-table table-archive">
                            <thead>
                                <tr>
                                    <th>Profile</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Usertype</th>
                                    <th>Loginname</th>
                                    <th>         </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="profile-photo">
                                            <img src="../images/petcare.png" alt="User Photo">
                                        </div>
                                    </td>
                                    <td>admin</td>
                                    <td>*******</td>
                                    <td>Administrator</td>
                                    <td>Iamlegend</td>
                                    <td>
                                    <button class="modal-open" data-modal="modal3" name="restoreaccount">
                                        <span class="material-symbols-sharp restore" title="Unarchiving">unarchive</span>
                                    </button> 
                                    </td> 
                                </tr>
                                <tr>
                                    <td>
                                        <div class="profile-photo">
                                            <img src="../images/profile-1.jpg" alt="User Photo">
                                        </div>
                                    </td>
                                    <td>sec</td>
                                    <td>****</td>
                                    <td>Secretary</td>
                                    <td>secretary_321</td>
                                    <td>
                                    <button class="modal-open" data-modal="modal3" name="restoreaccount">
                                        <span class="material-symbols-sharp restore" title="Unarchiving">unarchive</span>
                                    </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
                    <div class="modal-footer">
                        <div class="buttonflex">
                            <button class="cancel modal-close" title="Cancel">Cancel</button>
                        </div>
                    </div>
                </div>
        </div>

            
    </div>

    <?php  include 'scriptingfiles.php';  ?>
</body>
</html>



