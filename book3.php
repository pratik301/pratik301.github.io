<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="pratik singh" />
        <meta name="description" content="HOUSE RENTAL SYSTEM" />
        <meta name="keywords" content="house booking, house on rent near me" />
        
        <title>HOUSE RENTAL SYSTEM</title>
        <!--ADING CSS HERE-->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    </head>
    
    <body>
        <!--Header Starts HERE-->
        <header class="header">
            <div class="wrapper">
                <h1>HOUSE RENTAL SYSTEM</h1>
            </div>
            
        </header>
        <!--Header Ends HERE-->
        
        <!--Menu Starts HERE-->
        <nav class="menu">
            <div class="wrapper">
                <ul>
                    <a href="index.html"><li>Home</li></a>
                    <a href="about.php"><li>About Us</li></a>
                    <a href="house.php"><li>Houses</li></a>
                    <a href="contact.php"><li>Contact Us</li></a>
                    <a href="login.php"><li>Log In</li></a>
                </ul>
            </div>
        </nav>
        <!--Menu Ends HERE-->
        
        <!--Main Body Starts HERE-->
        <div class="main">
            <div class="wrapper">
                <div class="book-house">
                    <h3> White House</h3>
                    
                    <!--House Details Here-->
                    <img src="images/3.jpg" />
                    <span class="house-added">House-Added 03-03-2018</span><br />
                    <span class="house-location">LBS Road, Mummbai</span><br />
                    <span class="house-price">INR 15000</span>
                    <p>
                        Our first president, George Washington, selected the site for the White House in 1791. The cornerstone was 
						laid in 1792 and a competition design submitted by Irish-born architect James Hoban was chosen. After eight
						years of construction, President John Adams and his wife, Abigail, moved into the unfinished house in 1800 
						During the War of 1812, the British set fire to the President’s House in 1814. James Hoban was appointed to
						rebuild the house, and President James Monroe moved into the building in 1817.
                    </p>
					</br></br>
                    
                </div>
                
                <!--Client Booking Detail Entry-->
                <div class="booking-details">
                    <h3>Your Booking Details</h3>
                    <form action="insertb1.php" method="POST">
                        <span class="name">First Name</span>
                        <input type="text" name="firstname" placeholder="First Name Please" required /><br />
                        
                        <span class="name">Last Name</span>
                        <input type="text" name="lastname" placeholder="Last Name Please" required /><br />
                        
                        <span class="name">E-Mail</span>
                        <input type="email" name="email" placeholder="E-Mail Please" required /><br />
                        
                        <span class="name">Conatct No.</span>
                        <input type="tel" name="contact" placeholder="Contact Number Please" required /><br />
						
                        
                        <span class="name">Address</span> 
                        <textarea name="address" placeholder="house Address Please" required ></textarea><br />
						
						<span class="name">Days</span> 
                        <textarea name="days" placeholder="for how many days"required ></textarea><br />
                        
                        <input type="submit" value="OK" placeholder="BOOK NOW"/>
                        <input type="reset" name="reset" placeholder="RESET" />
                    </form>
                </div>
            </div>
        </div>
        <!--Main Body Ends HERE-->
        
        <!--Footer Starts HERE-->
        <footer class="footer">
            <div class="wrapper">
                <p>&copy; <a href="#">House Rental System</a>. Developed by pratik.</p>
            </div>
        </footer>
        <!--Footer Ends HERE-->
    </body>
</html>