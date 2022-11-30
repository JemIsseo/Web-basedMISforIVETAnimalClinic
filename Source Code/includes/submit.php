
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

       if (isset($_POST['saveaccount'])  && isset($_FILES['my_image']))  {

            echo "<pre>";
            print_r($_FILES['my_image']);
            echo "</pre>";

            $img_name = $_FILES['my_image']['name'];
            $img_size = $_FILES['my_image']['size'];
            $tmp_name = $_FILES['my_image']['tmp_name'];
            $error = $_FILES['my_image']['error'];

            if ($error === 0) {
                if ($img_size > 500000) {
                    $em = "Sorry, the file is too large.";
                    header("Location: useraccount.php?error=$em");
                } else {
                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);

                    $allowed_exs = array("jpg", "jpeg", "png");

                    if (in_array($img_ex_lc, $allowed_exs)) {
                        $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                        $img_upload_path = 'uploads/'.$new_img_name;
                        move_uploaded_file($tmp_name,  $img_upload_path);

                        // Insert into database

                    } else {
                        $em = "You can't upload files of this type";
                        header("Location: useraccount.php?error=$em");
                    }
                }
                

            } else {
                $em = "Unknown error occured";
                header("Location: useraccount.php?error=$em");
            }

        } else {
        header("Location: useraccount.php");
        }

?>