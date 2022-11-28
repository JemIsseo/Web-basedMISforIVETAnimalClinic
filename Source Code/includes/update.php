<?php include 'connect.php'; 
    $proid = $_GET['profileid'];
    $sql = "Select * from tblprofile where profileid=$proid";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $pname=$row['petname'];
    $age=$row['age'];
    $sex=$row['sex']; 
    $weight=$row['weight'];
    $owner=$row['ownername'];
    $phone=$row['phone'];
    $email=$row['email'];


    if(isset($_POST['updateprofile'])){
    $pname = $_POST['petname'];
    $age = $_POST['age'];
    $utsex = $_POST['sex'];
    $weight = $_POST['weight'];
    $owner = $_POST['owner'];
    $phone = $_POST['phone']; 
    $email = $_POST['email'];

    $sql = "update tblprofile set profileid ='$proid',petname ='$pname', 
            age='$age',sex ='$utsex',weight ='$weight', ownername ='$owner',phone ='$phone', email='$email' 
            where profileid= $proid";
    $res = mysqli_query($conn,$sql);
    if($res) {
        // dialog message 
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
    <title>Update</title>
     <!-- Materical Icons Link -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Stylesheet  -->
    <link rel="stylesheet" href="../css/update.css">
</head>
<body>


 <!-- Modal of Edit Profile -->
<div class="modal" id="modal1">
            <div class="modal-content">
                <div class="modal-header"><h1>Edit Profile</h1>
                    <a href="profile.php" class="icon modal-close"><span class="material-symbols-sharp">close</span></a>
                </div>
                    <div class="modal-body">

                        <section class="tableprofile">
                            <div class="table-profile">
                                <form action="" method="POST" >
                                <div class="formprofile">
                                <input type="hidden" name="profileid" value=<?php echo $proid; ?>>
                                    <div> 
                                    <input type="text" name="petname" value=<?php echo $pname; ?>>
                                    <span>Pet Name</span>
                                    </div>
                                <div> 
                                <input type="text" name="age" value=<?php echo $age; ?>>
                                <span>Age</span>
                            </div>
                            <div> 
                                <input type="text" name="sex" list="sex" value=<?php echo $sex; ?>>
                                <datalist id="sex">
                                <option>Male</option>
                                <option>Female</option>    
                                </datalist>
                                <span>Sex</span>
                            </div>

                            <div>
                                <input type="text" name="owner" value=<?php echo $owner; ?>>
                                <span>Owner's Name</span>
                            </div>
                            <div>
                                <input type="text" name="weight" value=<?php echo $weight; ?>>
                                <span>Weight</span>
                            </div>
                            <div>
                                <input type="text" name="phone" value=<?php echo $phone; ?>>
                                <span>Phone</span>
                            </div>
                            <div>
                                <input type="email" name="email" value=<?php echo $email; ?>>
                                <span>Email</span>
                            </div>
                        </div>

                </div>
            </section>

                </div>
                    <div class="modal-footer">
                        <div class="buttonflexright">
                            <button name="updateprofile" type="submit" class="yes" title="Save Record">Update Profile</button>
                            <a href="profile.php" class="cancel" title="Cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
            </div>
</div>
    <script src="../js/script.js"></script>
</body>
</html>