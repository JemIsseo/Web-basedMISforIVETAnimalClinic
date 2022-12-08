
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock and Add Stock</title>
    <!-- Materical Icons Link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Stylesheet  -->
    <link rel="stylesheet" href="../css/stockandaddstock.css">
</head>
<body>
    <div class="container">
        <?php  include 'aside.php'; ?>    

        <!--  Main Tag  -->
        <main>
            <section class="tableprofile">
                <h1>Add Stock</h1>
                <div class="table-profile">
                    <form action="" method="POST" >
                        <div class="formprofile">
                            <div> 
                                <input type="text" name="petname" placeholder="Enter Item Name" >
                                <span>Item Name</span>
                            </div>
                            <div> 
                                <span class="material-symbols-sharp markdown">expand_more</span>
                                <select name="usertype" id="ut" >
                                <option value="Choose">Choose...</option>
                                <option value="Admin">Medicine</option>
                                <option value="Secretary">Food</option>    
                                <option value="Secretary">Accessories</option> 
                                </select>
                                <span>Category</span>
                            </div>

                            <div>
                                <input type="text" name="description" placeholder="Enter Description" >
                                <span>Description</span>
                            </div>
                            <div>
                                <input type="text" name="quantity" placeholder="Enter Quantity">
                                <span>Quantity</span>
                            </div>
                           
                        </div>
                            <div class="buttonflex">
                                <button name="saveprofile" type="submit" class="save" title="Save the record">Save</button>
                                <button name="saveprofile" type="submit" class="cancel" title="Clear all inputs">Clear</button>
                            </div>
                    </form>
                </div>
            </section>

            <!--  End of profile   -->
            <section class="tableprofile">
                <div class="accrecsearch">
                    <h1>Edit Stock</h1>
                    <div class="searchbar">
                        <input type="text" placeholder="Search here"><span class="material-symbols-sharp">search</span>
                    </div>
                </div>
                <div class="table-profile">
                        <table class="content-table">
                            <thead>
                                <tr>
                                    <th>Stock ID</th>
                                    <th>Item Name</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Quantity</th>
                                    <th>       </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Immunol</td>
                                    <td>Medicine</td>
                                    <td>Immunol syrup is clinically proven an immunomodulator / immunostimulant and phagocytosis enhancer for dogs and cats to enhance immunity and fights pathogens.</td>
                                    <td>150</th>
                                    <td>
                                    <button class="modal-open" name="savechanges" data-modal="modal1" title="Edit this record"><span class="material-symbols-sharp edit" >edit</span></button>
                                    <button class="modal-open" name="archiveaccount" data-modal="modal2"><span class="material-symbols-sharp archive" title="Archive this record">archive</span></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Pedigree</th>
                                    <td>Food</td>
                                    <td>Nutritionally balanced food helps ensure your dog can live their happiest and healthiest life.</td>
                                    <td>244</td>
                                     <td>
                                    <button class="modal-open" name="savechanges" data-modal="modal1"><span class="material-symbols-sharp edit">edit</span></button>
                                    <button class="modal-open" name="archiveaccount" data-modal="modal2"><span class="material-symbols-sharp archive">archive</span></button>
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
        <div class="rightbottom">
        <h3>View, Restore and Refresh Stock</h3>
        
            <div class="buttonmodify">
                <button class="modal-open" data-modal="modal5" title="View Stocks"><span class="material-symbols-sharp">inventory_2</span>View Stocks</button> 
            </div> 
            <div class="buttonmodify">
                <button title="Restore archive stock" class="modal-open" data-modal="modal4"><span class="material-symbols-sharp">unarchive</span>Restore Stocks</button> 
            </div>
            <div class="buttonmodify">
                <button title="Refresh stock"><span class="material-symbols-sharp">refresh</span>Refresh Stocks</button> 
            </div>
        </div>
        
        <!-- Start of Modal --> 
        <!-- Modal of Edit Stock -->
        <div class="modal" id="modal1">
            <div class="modal-content">
                <div class="modal-header"><h1>Edit Stock</h1>
                    <button class="icon modal-close"><span class="material-symbols-sharp">close</span></button>
                </div>
                    <div class="modal-body">
               
                        <section class="tableprofile">
                            <div class="table-profile">
                        <form action="" method="POST" >
                            <div class="formprofile">
                                <div>   
                                    <input type="text" name="petname" placeholder="Enter Item Name" >
                                    <span>Item Name</span>
                                </div>
                                <div> 
                                    <span class="material-symbols-sharp markdown">expand_more</span>
                                    <select name="usertype" id="ut" >
                                    <option value="Choose">Choose...</option>
                                    <option value="Admin">Medicine</option>
                                    <option value="Secretary">Food</option>    
                                    <option value="Secretary">Accessories</option> 
                                    </select>
                                    <span>Category</span>
                                </div>

                                <div>
                                    <input type="text" name="description" placeholder="Enter Description" >
                                    <span>Description</span>
                                </div>
                                <div>
                                    <input type="text" name="quantity" placeholder="Enter Quantity">
                                    <span>Quantity</span>
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
        <!-- Modal of Archive Stock MessageBox -->
        <div class="modal" id="modal2">
            <div class="modal-content">
                <div class="modal-header"><h1>Archive Stock</h1>
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
        <!-- Modal of Restore Stock MessageBox -->
        <div class="modal" id="modal3">
            <div class="modal-content">
                <div class="modal-header"><h1>Unarchive Stock</h1>
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
        <!-- Modal of View Stock -->
        <div class="modal" id="modal4">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Restore Stocks</h1>
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
                                    <th>Stock ID</th>
                                    <th>Item Name</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Quantity</th>
                                    <th>       </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Stock ID</td>
                                    <td>Item Name</td>
                                    <td>Category</td>
                                    <td>waonrawdwadwadwawawaadwadwaadwadwawawawawadwaidipton</td>
                                    <td>Quantity</th>
                                    <td><button class="modal-open" name="restorestock" data-modal="modal3"><span class="material-symbols-sharp restore">unarchive</span></button></td>
                                </tr>
                                <tr>
                                    <td>Stock ID</td>
                                    <td>Item Name</th>
                                    <td>Category</td>
                                    <td>waonrawdwadwadwawawaadwadwaadwadwawawawawadwaidiptonn</td>
                                    <td>Quantity</td>
                                    <td><button class="modal-open" name="restorestock" data-modal="modal3"><span class="material-symbols-sharp restore">unarchive</span></button></td>
                                </tr>
                                <tr>
                                    <td>Stock ID</td>
                                    <td>Item Name</th>
                                    <td>Category</td>
                                    <td>waonrawdwadwadwawawaadwadwaadwadwawawawawadwaidiptonn</td>
                                    <td>Quantity</td>
                                    <td><button class="modal-open" name="restorestock" data-modal="modal3"><span class="material-symbols-sharp restore">unarchive</span></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </section>
                    <div class="modal-footer">
                        <div class="buttonflexright">
                            <button type="submit" class="cancel modal-close" title="Cancel">Cancel</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Modal of View Stock -->
        <div class="modal" id="modal5">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>View Stocks</h1>
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
                                    <th>Stock ID</th>
                                    <th>Item Name</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Quantity</th>
                                    <th>       </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Stock ID</td>
                                    <td>Item Name</td>
                                    <td>Category</td>
                                    <td>waonrawdwadwadwawawaadwadwaadwadwawawawawadwaidipton</td>
                                    <td>Quantity</th>
                                </tr>
                                <tr>
                                    <td>Stock ID</td>
                                    <td>Item Name</th>
                                    <td>Category</td>
                                    <td>waonrawdwadwadwawawaadwadwaadwadwawawawawadwaidiptonn</td>
                                    <td>Quantity</td>
                                </tr>
                                <tr>
                                    <td>Stock ID</td>
                                    <td>Item Name</th>
                                    <td>Category</td>
                                    <td>waonrawdwadwadwawawaadwadwaadwadwawawawawadwaidiptonn</td>
                                    <td>Quantity</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </section>
                    <div class="modal-footer">
                        <div class="buttonflexright">
                            <button type="submit" class="cancel modal-close" title="Cancel">Cancel</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <?php  include 'scriptingfiles.php';  ?>
</body>
</html>

