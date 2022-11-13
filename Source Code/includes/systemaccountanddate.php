        
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-symbols-sharp">menu</span>
                </button>
                <button id="dark-mode-toggle" class="theme-toggler">
                    <span class="material-symbols-sharp active">light_mode</span>
                    <span class="material-symbols-sharp">dark_mode</span>
                </button>
                <div class="profile">
                    <div class="info">
                        <p>Welcome,  <b>Kim</b></p>
                        <small class="text-muted">Administrator</small>
                    </div>
                    <div class="profile-photo">
                        <img src="../Images/profile-1.jpg" alt="User Photo">
                    </div>
                </div>
            </div>
            <!-- End of top -->
            
            <div class="date-today">
                <div class="rectangle-border"></div>
                <div class="datetoday">
                <span class="material-symbols-sharp">event</span>
                       <?php  echo "<br>Today is " . 
                       date("M d, Y \n l, ") . 
                       "<br>Have a great day! :)"   ?>
                </div>
            </div>
            <!--  End of Date  -->