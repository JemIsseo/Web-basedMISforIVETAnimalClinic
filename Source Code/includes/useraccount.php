
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
                                    <button type="button"><span class="material-symbols-sharp edit">edit</span></button>
                                    <button type="button"><span class="material-symbols-sharp archive">archive</span></button>
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
                                    <button type="button"><span class="material-symbols-sharp edit">edit</span></button>
                                    <button type="button"><span class="material-symbols-sharp archive">archive</span></button>
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
                                <span class="material-symbols-sharp">account_circle</span><br>
                                <input type="file">
                                <button type="submit" class="upload">Upload</button>
                            </div> 

                    
                        <div class="formprofile">
                             
                            <div> 
                                <input type="text" name="username" required>
                                <span>Username</span>
                            </div>
                            <div>
                                <input type="password" name="password" required>
                                <span>Password</span>
                            </div>
                            <div>
                                <input type="password" name="password" required>
                                <span>Confirm Password</span>
                            </div>
                            <div>
                                <span class="material-symbols-sharp markdown">expand_more</span>
                                <select name="usertype" id="ut" required>
                                <option value="Usertype">Usertype</option>
                                <option value="Admin">Admin</option>
                                <option value="Secretary">Secretary</option>    
                                </select>
                                <span>Usertype</span>
                            </div>
                            <div>
                                <input type="text" name="loginname" required>
                                <span>Loginname</span>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </section>
            <!--  End of Create Profile  -->
        </main>
        <!--  End of Main Tag  -->

        <?php   include 'systemaccountanddate.php'; ?>
    
    
            <!--  Start of Buttons  -->
            <div class="buttons">
                <button type="submit" class="button-1"> Add </button>
                <button type="submit" class="button-1"> Edit </button>
                <button type="submit" class="button-1"> Archive </button>
            </div>
    </div>
    <script src="../JS/script.js"></script>
</body>
</html>

