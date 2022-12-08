
<?php 
    include 'connect.php';
    
    if (isset($_POST['updateID'])) {     
        $updateID = $_POST['updateID'];
        $sql = "Select * from tblprofile where profileid =$updateID";
        $res= mysqli_query($conn,$sql);
        $upRow = mysqli_fetch_assoc($res);
        $proid=$upRow['profileid'];
        $pname=$upRow['petname'];
        $age=$upRow['age'];
        $sex=$upRow['sex']; 
        $weight=$upRow['weight'];
        $owner=$upRow['ownername'];
        $phone=$upRow['phone'];
        $email=$upRow['email'];
        
        ?><section class="tableprofile">
        <div class="table-profile">
            <form action="profile.php" method="POST" >
            <div class="formprofile">
            <input type="hidden" name="profileid" value=<?= $proid; ?>>
                <div> 
                <input type="text" name="petname" value=<?= $pname; ?>>
                <span>Pet Name</span>
                </div>
            <div> 
            <input type="text" name="age" value=<?= $age; ?>>
            <span>Age</span>
        </div>
        <div> 
            <input type="text" name="sex" list="sex" value=<?= $sex; ?>>
            <datalist id="sex">
            <option>Male</option>
            <option>Female</option>    
            </datalist>
            <span>Sex</span>
        </div>

        <div>
            <input type="text" name="owner" value=<?=$owner; ?>>
            <span>Owner's Name</span>
        </div>
        <div>
            <input type="text" name="weight" value=<?= $weight; ?>>
            <span>Weight</span>
        </div>
        <div>
            <input type="text" name="phone" value=<?= $phone; ?>>
            <span>Phone</span>
        </div>
        <div>
            <input type="email" name="email" value=<?= $email; ?>>
            <span>Email</span>
        </div>
        <div class="buttonflexright">
            <button name="updateprofile" type="submit" class="yes" title="Save Record">Update Profile</button>
            <button class="cancel modal-close" title="Cancel">Cancel</button>
        </div>
    </div>

</div>
</section>
        <?php
    }
?> 
<?php
    // archive profile
    if (isset($_POST['archiveID'])) {     
        $archiveID = $_POST['archiveID'];
        $sql = "Select * from tblprofile where profileid =$archiveID";
        $res= mysqli_query($conn,$sql);
        $arRow = mysqli_fetch_assoc($res);
        $proid=$arRow['profileid'];
        $pname=$arRow['petname'];
        $age=$arRow['age'];
        $sex=$arRow['sex']; 
        $weight=$arRow['weight'];
        $owner=$arRow['ownername'];
        $phone=$arRow['phone'];
        $email=$arRow['email'];

        ?> 
                    <h3>Are you sure you want to archive this record?</h3>
                    <form action="profile.php" method="POST" >
                        <div class="formprofile formarchive">
                                <input type="hidden" name="profileid" value=<?= $proid; ?>>
                                    <div> 
                                    <input type="text" name="petname" value=<?= $pname; ?>>
                                    <span>Pet Name</span>
                                    </div>
                            <div> 
                                <input type="text" name="age" value=<?= $age; ?>>
                                <span>Age</span>
                            </div>
                            <div> 
                                <input type="text" name="sex" list="sex" value=<?= $sex; ?>>
                                <datalist id="sex">
                                <option>Male</option>
                                <option>Female</option>    
                                </datalist>
                                <span>Sex</span>
                            </div>
                          
                            <div>
                                <input type="text" name="owner" value=<?= $owner; ?>>
                                <span>Owner's Name</span>
                            </div>
                            <div>
                                <input type="text" name="weight" value=<?= $weight; ?>>
                                <span>Weight</span>
                            </div>
                            <div>
                                <input type="text" name="phone" value=<?= $phone; ?>>
                                <span>Phone</span>
                            </div>
                            <div>
                                <input type="email" name="email" value=<?= $email; ?>>
                                <span>Email</span>
                            </div>
                            
                        </div>
                            <div class="buttonflexright messageyesno">
                                <button name="savearchiveprofile" type="submit" class="yes">Yes</button>
                                <button class="no modal-close">No</button>
                            </div>
               
                    </form> 
<?php

    }
?> 
<?php      
    //  restore statement in profile 
    if (isset($_POST['restoreID'])) {     
        $restoreID = $_POST['restoreID'];
        $sql = "Select * from tblarcprofile where profileid =$restoreID";
        $res= mysqli_query($conn,$sql);
        $reRow = mysqli_fetch_assoc($res);
        $proid=$reRow['profileid'];
        $pname=$reRow['petname'];
        $age=$reRow['age'];
        $sex=$reRow['sex']; 
        $weight=$reRow['weight'];
        $owner=$reRow['owner'];
        $phone=$reRow['phone'];
        $email=$reRow['email'];
?>
            <h3>Are you sure you want to restore this record?</h3>
                    <form action="profile.php" method="POST" >
                        <div class="formprofile formarchive">
                                <input type="hidden" name="profileid" value=<?= $proid; ?>>
                                    <div> 
                                    <input type="text" name="petname" value=<?= $pname; ?>>
                                    <span>Pet Name</span>
                                    </div>
                            <div> 
                                <input type="text" name="age" value=<?= $age; ?>>
                                <span>Age</span>
                            </div>
                            <div> 
                                <input type="text" name="sex" list="sex" value=<?= $sex; ?>>
                                <datalist id="sex">
                                <option>Male</option>
                                <option>Female</option>    
                                </datalist>
                                <span>Sex</span>
                            </div>
                            <div>
                                <input type="text" name="owner" value=<?= $owner; ?>>
                                <span>Owner's Name</span>
                            </div>
                            <div>
                                <input type="text" name="weight" value=<?= $weight; ?>>
                                <span>Weight</span>
                            </div>
                            <div>
                                <input type="text" name="phone" value=<?= $phone; ?>>
                                <span>Phone</span>
                            </div>
                            <div>
                                <input type="email" name="email" value=<?= $email; ?>>
                                <span>Email</span>
                            </div>
                            
                          </div>
                            <div class="buttonflexright">
                                <button name="saverestoreprofile" type="submit" class="yes">Yes</button>
                                <button class="no modal-close">No</button>
                            </div>
                    </form> 
<?php 
       }
       // update statement form in useraccount
       if (isset($_POST['accountID'])) {     
        $accountID = $_POST['accountID'];
        $sql = "Select * from tbluseraccount where username ='$accountID'";
        $res= mysqli_query($conn,$sql);
        $upRow = mysqli_fetch_assoc($res); 
        $img=$upRow['image'];
        $un=$upRow['username'];
        $pw=$upRow['password'];
        $ut=$upRow['usertype'];
        $ea=$upRow['emailaddress']; 
       

        ?>
        <section class="tableaccountrecords">
                <div class="accountrecordsbg">
                    <div class="accountrecords ">
                        <form action="" method="POST" enctype="multipart/form-data" >
                            <div class="profilepicture">
                            <input name="username" placeholder="Enter Username" value="<?= $un;  ?>" type="hidden">
                            
                            <div class="updatephoto">
                                <img src="uploads/<?php echo $img;?>">
                            </div>                                         
                            <input type="file" name="image" title="Insert photo..." value=" <?= $img; ?> ">
                            <button name="updatephoto" type="submit" class="uploadbtn" title="Upload Photo">Upload</button>
                            </div> 
                        </form> 
                        <form action="useraccount.php" method="POST">
                            <div class="formprofile">
                            <div> 
                                <input type="text" name="username" placeholder="Enter Username" value="<?= $un;  ?>" readonly>
                                <span>Username</span>
                            </div>
                            <div>
                                <input type="password" name="password" placeholder="Enter Password" value="<?= $pw;  ?>">
                                <span>Password</span>
                            </div>
                            <div> 
                                <input type="text" name="ut" placeholder="Choose..." list="ut" autocomplete="off" value="<?= $ut;  ?>">
                                <datalist id="ut">
                                <option value="IT Expert"></option>   
                                <option value="Admin"></option>
                                <option value="Secretary"></option>   
                                </datalist>
                                <span>Usertype</span>
                            </div>
                            <div>
                                <input type="email" name="emailaddress" placeholder="Enter Email" value="<?= $ea;  ?>">
                                <span>Email Address</span>
                            </div>
                            <div class="buttonflex">
                                <button name="updateaccount" type="submit" class="yes" title="Save Record">Update</button>
                                <button class="cancel modal-close" title="Cancel">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
<?php
       }
?>