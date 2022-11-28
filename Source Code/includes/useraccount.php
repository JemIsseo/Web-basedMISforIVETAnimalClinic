<?php 
    include 'connect.php';
    if (isset($_POST['submit'])) {
        $un = $_POST['username'];
        $pw = $_POST['password'];
        $ut = $_POST['usertype'];
        $lg = $_POST['loginname'];
        $uimg = $_POST['userimg'];

        $sql = "insert into tbluseraccount(username,password,usertype,loginname,userimg) values('$un','$pw','$ut','$lg','$uimg')";
        $res = mysqli_query($conn,$sql);
        if($res) {
            header('location:useraccount.php');
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
                                    <th>Loginname</th>
                                    <th>User Image</th>
                                    <th>         </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>admin</td>
                                    <td>***</td>
                                    <td>Administrator</td>
                                    <td>admin123</td>
                                    <td>
                                        <div class="profile-photo">
                                            <button class="modal-open" data-modal="modal0"><img src="../images/profile-2.png" alt="User Photo"></button>
                                        </div>
                                    </td>
                                    <td>
                                    <button name="savechanges" class="modal-open" data-modal="modal1"><span class="material-symbols-sharp edit" title="Edit this account">edit</span></button>
                                    <button name="archiveaccount" class="modal-open" data-modal="modal2"><span class="material-symbols-sharp archive" title="Archive this record">archive</span></button> 
                                    </td> 
                                </tr>
                                <tr>
                                   
                                    <td>JemLeaves</td>
                                    <td>***********</td>
                                    <td>Animal Handler</td>
                                    <td>jemisseo</td>
                                    <td>
                                        <div class="profile-photo">
                                            <img src="../images/profile-3.jpeg" alt="User Photo">
                                        </div>
                                    </td>
                                    <td>
                                    <button name="savechanges"><span class="material-symbols-sharp edit">edit</span></button>
                                    <button name="archiveaccount"><span class="material-symbols-sharp archive">archive</span></button> 
                                    </td>
                                </tr>
                                <tr>
                                   
                                    <td>sec</td>
                                    <td>****</td>
                                    <td>Secretary</td>
                                    <td>secretary_321</td>
                                    <td>
                                        <div class="profile-photo">
                                            <img src="../images/profile-4.jpg" alt="User Photo">
                                        </div>
                                    </td>
                                    <td>
                                    <button name="savechanges"><span class="material-symbols-sharp edit">edit</span></button>
                                    <button name="archiveaccount"><span class="material-symbols-sharp archive">archive</span></button> 
                                    </td>
                                </tr>
                                <tr>
                                   
                                    <td>sec</td>
                                    <td>****</td>
                                    <td>Secretary</td>
                                    <td>secretary_321</td>
                                    <td>
                                        <div class="profile-photo">
                                            <img src="../images/profile-1.jpg" alt="User Photo">
                                        </div>
                                    </td>
                                    <td>
                                    <button name="savechanges"><span class="material-symbols-sharp edit">edit</span></button>
                                    <button name="archiveaccount"><span class="material-symbols-sharp archive">archive</span></button> 
                                    </td>
                                </tr>
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
                                <input type="file" name"userimg" title="Insert photo...">
                                <button class="uploadbtn">Upload</button>
                            </div> 
                            <div class="formprofile">
                            <div> 
                                <input type="text" name="username" placeholder="Enter Username" >
                                <span>Username</span>
                            </div>
                            <div>
                                <input type="password" name="password" placeholder="Enter Password">
                                <span>Password</span>
                            </div>
                            <div>
                                <input type="password" placeholder="Enter Confirm Password">
                                <span>Confirm Password</span>
                            </div>
                            <div>
                                <span class="material-symbols-sharp markdown">expand_more</span>
                                <select name="ut" id="ut" >
                                <option value="Choose">Choose...</option>
                                <option value="Admin">Admin</option>
                                <option value="Secretary">Secretary</option>    
                                <option value="Secretary">Animal Handler</option> 
                                </select>
                                <span>Usertype</span>
                            </div>
                            <div>
                                <input type="text" name="loginname" placeholder="Enter Loginname">
                                <span>Loginname</span>
                            <div class="buttonflex">
                                <button name="saveprofile" type="submit" class="save" title="Save the record">Save</button>
                                <button name="saveprofile" type="submit" class="cancel" title="Clear all inputs">Clear</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section> -->
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
        <div class="modal" id="modal0">
            <div class="modal-content">
                <div class="modal-header"><h1>Account Photo</h1>
                    <button class="icon modal-close"><span class="material-symbols-sharp">close</span></button>
                </div>
                <div class="modal-body">
                    <img src="../images/profile-2.png" alt="Account Photo">
                </div>
                    <div class="modal-footer">
                        <div class="buttonflex">
                            <button type="submit" class="cancel modal-close">Exit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="modal1">
            <div class="modal-content">
                <div class="modal-header"><h1>Edit Account</h1>
                    <button class="icon modal-close"><span class="material-symbols-sharp">close</span></button>
                </div>
                <div class="modal-body">
                <div class="accountrecordsbg">
                    <div class="accountrecords">
                        <form action="" method="POST" >
                            <div class="profilepicture">
                                <span class="material-symbols-sharp">account_circle</span><br><br>
                                <input type="file" name"profile">
                            </div> 
                            <div class="formprofile">
                            <div> 
                                <input type="text" name="username" >
                                <span>Username</span>
                            </div>
                            <div>
                                <input type="password" name="password" >
                                <span>Password</span>
                            </div>
                            <div>
                                <input type="password" name="cpassword" >
                                <span>Confirm Password</span>
                            </div>
                            <div class="cbo-usertype">
                                <span class="material-symbols-sharp markdown-editprofile">expand_more</span>
                                <select name="usertype" id="ut" >
                                <option value="Choose">Choose...</option>
                                <option value="Admin">Admin</option>
                                <option value="Secretary">Secretary</option> 
                                <option value="Secretary">Animal Handler</option>    
                                </select>
                                <span>Usertype</span>
                            </div>
                                <div>
                                    <input type="text" name="loginname" >
                                    <span>Loginname</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                    <div class="modal-footer">
                        <div class="buttonflex">
                            <button name="updateaccount" type="submit" class="savechanges" title="Save Changes in Record">Save Changes</button>
                            <button type="submit" class="cancel modal-close" title="Cancel">Cancel</button>
                        </div>
                    </div>
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

    <script src="../JS/script.js"></script>
</body>
</html>



