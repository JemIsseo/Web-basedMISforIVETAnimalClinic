
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
    <link rel="stylesheet" href="../CSS/useraccount.css">
</head>
<body>
    <div class="container">
         <!-- Start of Modal -->
        <div class="modal" id="hide">
            <div class="modal-header">
                <button id="hideIcon">
                    <span class="material-symbols-sharp">close</span>
                </button>
            </div>  
            <section class="tableaccountrecords modaltableprofile">
                <h1>Edit Profile</h1>
                <div class="accountrecordsbg profile-edit-height">
                    <div class="accountrecords">
                        <form action="" method="POST" class="profile-edit-picture" >
                            <div class="profilepicture ">
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
                            <div>
                                <span class="material-symbols-sharp markdown profile-edit-markdown">expand_more</span>
                                <select name="usertype" id="ut" >
                                <option value="Admin">Admin</option>
                                <option value="Secretary">Secretary</option>    
                                </select>
                                <span>Usertype</span>
                            </div>
                            <div>
                                <input type="text" name="loginname">
                                <span>Loginname</span>
                            </div>
                            </div>
                            <div class="buttonflex">
                                <button id="hideButton" name="saveprofile" type="submit" class="cancel">Cancel</button>
                                <button name="updateprofile" type="submit" class="savechanges">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <?php  include 'aside.php'; ?>
        <!--  Main Tag  -->
        <main>
            <section class="tableaccountrecords">
                <h1>Account Records</h1>
                <div class="accountrecordsbg">
                <div class="accountrecords">
                        <table class="content-table">
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
                                    <td>***</td>
                                    <td>Administrator</td>
                                    <td>admin123</td>
                                    <td>
                                    <button id="showButton"><span class="material-symbols-sharp edit">edit</span></button>
                                    <a href="#"><span class="material-symbols-sharp archive">archive</span></a>
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
                                    <button id="showButton"><span class="material-symbols-sharp edit">edit</span></button> 
                                    <button name="archiveaccount"><span class="material-symbols-sharp archive">archive</span></button> 
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
                                    <button id="showButton"><span class="material-symbols-sharp edit">edit</span></button>
                                    <a href="#"><span class="material-symbols-sharp archive">archive</span></a>
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
                            <div>
                                <span class="material-symbols-sharp markdown">expand_more</span>
                                <select name="usertype" id="ut" >
                                <option value="Admin">Admin</option>
                                <option value="Secretary">Secretary</option>    
                                </select>
                                <span>Usertype</span>
                            </div>
                            <div>
                                <input type="text" name="loginname">
                                <span>Loginname</span>
                            </div>
                                <button name="saveprofile" type="submit" class="save">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </section> -->
            <!--  End of Create Profile  -->
           
            

          
        </main>
        <!--  End of Main Tag  -->

        <?php  include 'systemaccountanddate.php'; ?>

        <h1>Retrieve Profile</h1>
        <div class="buttons">
            <div class="buttonmodify">
                <button id="showButton"><span class="material-symbols-sharp">table_view</span>View Archive</button> 
            </div>
        </div>
    </div>
    
    <script src="../JS/script.js"></script>
</body>
</html>

