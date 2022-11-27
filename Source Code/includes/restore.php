<?php
    include 'connect.php';
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
    <link rel="stylesheet" href="../css/restore.css">
</head>
<body>
    
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
                            <?php
                                $sql = "Select * from tblarcprofile";
                                    $res= mysqli_query($conn,$sql);

                                    if($res){
                                    while($row=mysqli_fetch_assoc($res)){
                                    $proid=$row['profileid'];
                                    $pname=$row['petname'];
                                    $age=$row['age'];
                                    $utsex=$row['sex']; 
                                    $weight=$row['weight'];
                                    $owner=$row['owner'];
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
                                    <a href="restoreconfirm.php?profileid='.$proid.'"">
                                        <span class="material-symbols-sharp restore" title="Unarchiving">unarchive</span>
                                    </a> 
                                    </td>
                                    </tr>';
                                }
                            } 
                            ?>
                            </tbody>
                        </table>
                    </div>
                    </section>
                    <div class="modal-footer">
                        <div class="buttonflexright">
                        <a href="profile.php" ><span class="cancel" title="Cancel">Cancel</span></a>
                        </div>
                    </div>

                </div>
            </div>
     </div>
                     
</body>
</html>