
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock</title>
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
                    <form action="" method="POST" >
                        <div class="formprofile">
                            <div> 
                                <input type="text" name="petname" placeholder="Enter Pet Name" >
                                <span>Pet Name</span>
                            </div>
                            <div> 
                                <input type="text" name="age" placeholder="Enter Pet Age" >
                                <span>Age</span>
                            </div>
                            <div> 
                                <span class="material-symbols-sharp markdown">expand_more</span>
                                <select name="usertype" id="ut" >
                                <option value="Choose">Choose...</option>
                                <option value="Admin">Male</option>
                                <option value="Secretary">Female</option>    
                                </select>
                                <span>Sex</span>
                            </div>
                            <div>
                                <input type="text" name="weight" placeholder="Enter Pet Weight" >
                                <span>Weight (Kg)</span>
                            </div>
                            <div>
                                <input type="text" name="owner" placeholder="Enter Owner's Name" >
                                <span>Owner's Name</span>
                            </div>
                            <div>
                                <input type="text" name="phone" placeholder="Enter Phone No." >
                                <span>Phone</span>
                            </div>
                            <div>
                                <input type="email" name="email" placeholder="Enter Email">
                                <span>Email</span>
                            </div>
                            <div class="buttonflex">
                                <button name="saveprofile" type="submit" class="save" title="Save the record">Save</button>
                                <button name="saveprofile" type="submit" class="cancel" title="Clear all inputs">Clear</button>
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
                                    <button name="savechanges" class="modal-open" data-modal="modal1"><span class="material-symbols-sharp edit" title="Edit this profile">edit</span></button>
                                    <button name="archiveaccount" class="modal-open" data-modal="modal2"><span class="material-symbols-sharp archive" title="Archive the record">archive</span></button>
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
                                    <button name="savechanges" data-modal="modal1"><span class="material-symbols-sharp edit">edit</span></button>
                                    <button name="archiveaccount" data-modal="modal2"><span class="material-symbols-sharp archive">archive</span></button>
                                    </td> 
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Chanel</td>
                                    <td>4</td>
                                    <td>Female</td>
                                    <td>4kg</td>
                                    <td>Michelle Nervez</td>
                                    <td>09055459215</td>
                                    <td>mitchnervez22@gmail.com</td>
                                    <td>
                                    <button name="savechanges" data-modal="modal1"><span class="material-symbols-sharp edit">edit</span></button>
                                    <button name="archiveaccount" data-modal="modal2"><span class="material-symbols-sharp archive">archive</span></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Antibiotic</td>
                                    <td>5</td>
                                    <td>12/07/2022</td>
                                    <td>12/01/2022</td>
                                    <td>12/01/2022</td>
                                    <td>12/01/2022</td>
                                    <td>12/01/2022</td>
                                    <td>
                                    <button name="savechanges" data-modal="modal1"><span class="material-symbols-sharp edit">edit</span></button>
                                    <button name="archiveaccount" data-modal="modal2"><span class="material-symbols-sharp archive">archive</span></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Beef Jerky Food</td>
                                    <td>10</td>
                                    <td>12/10/2022</td>
                                    <td>12/01/2022</td>
                                    <td>12/01/2022</td>
                                    <td>12/01/2022</td>
                                    <td>12/01/2022</td>
                                    <td>
                                    <button name="savechanges" data-modal="modal1"><span class="material-symbols-sharp edit">edit</span></button>
                                    <button name="archiveaccount" data-modal="modal2"><span class="material-symbols-sharp archive">archive</span></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </section>
        </main>

        <!--  End of Main Tag  -->
        <?php   include 'systemaccountanddate.php'; ?>
        <!--  Start of Retrive section  -->
        <h1>Retrieve Profile</h1>
        <div class="buttons">
            <div class="buttonmodify">
                <button class="modal-open" data-modal="modal4" title="View and Restore Record"><span class="material-symbols-sharp">table_view</span>View Archive Profile</button> 
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
               
                        <section class="tableprofile">
                            <div class="table-profile">
                                <form action="" method="POST" >
                                <div class="formprofile">
                                    <div> 
                                    <input type="text" name="petname" >
                                    <span>Pet Name</span>
                                    </div>
                                <div> 
                                <input type="text" name="age" >
                                <span>Age</span>
                            </div>
                            <div> 
                                <span class="material-symbols-sharp markdown">expand_more</span>
                                <select name="usertype" id="ut" >
                                <option value="Choose">Choose...</option>
                                <option value="Admin">Male</option>
                                <option value="Secretary">Female</option>    
                                </select>
                                <span>Sex</span>
                            </div>
                            <div>
                                <input type="text" name="weight" >
                                <span>Weight</span>
                            </div>
                            <div>
                                <input type="text" name="owner" >
                                <span>Owner's Name</span>
                            </div>
                            <div>
                                <input type="text" name="phone" >
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
                            <button name="updateprofile" type="submit" class="savechanges" title="Restore the record">Restore</button>
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

