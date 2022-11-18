
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
                                    <button name="savechanges" class="modal-open" data-modal="modal1"><span class="material-symbols-sharp edit">edit</span></button>
                                    <button name="archiveaccount" class="modal-open" data-modal="modal2"><span class="material-symbols-sharp archive">archive</span></button> 
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
                                    <button name="savechanges"><span class="material-symbols-sharp edit">edit</span></button>
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
                                    <button name="savechanges"><span class="material-symbols-sharp edit">edit</span></button>
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
                                <option value="Secretary">Animal Handler</option> 
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
                <button class="modal-open" data-modal="modal4"><span class="material-symbols-sharp">table_view</span>View Archive</button> 
            </div>
        </div>
        <!-- Start of Modal --> 
        <!-- Modal of Edit Profile -->
        <div class="modal" id="modal1">
            <div class="modal-content">
                <div class="modal-header"><h1>Edit Profile</h1>
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
                                <option value="Admin">Admin</option>
                                <option value="Secretary">Secretary</option> 
                                <option value="Secretary">Animal Handler</option>    
                                </select>
                                <span>Usertype</span>
                            </div>
                                <div>
                                    <input type="text" name="loginname">
                                    <span>Loginname</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                    <div class="modal-footer">
                        <div class="buttonflex">
                            <button type="submit" class="cancel modal-close">Cancel</button>
                            <button name="updateprofile" type="submit" class="savechanges">Save Changes</button>
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
                            <button name="updateprofile" type="submit" class="cancel no modal-close">No</button>
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
                            <button name="updateprofile" type="submit" class="cancel no modal-close">No</button>
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
                                    <td>***</td>
                                    <td>Administrator</td>
                                    <td>admin123</td>
                                    <td>
                                    <button class="modal-open" data-modal="modal3" name="restoreaccount">
                                        <span class="material-symbols-sharp restore">unarchive</span>
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
                                        <span class="material-symbols-sharp restore">unarchive</span>
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
                            <button type="submit" class="cancel modal-close">Cancel</button>
                            <button name="updateprofile" type="submit" class="savechanges">Restore</button>
                        </div>
                    </div>
                </div>
        </div>
            
    </div>

    <script src="../JS/script.js"></script>
</body>
</html>



