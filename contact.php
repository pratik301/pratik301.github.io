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
                
                
                <!--Contact Detail Entry-->
                <div class="booking-details">
                    <h3>Contact Us</h3><br/>
                    <form action="insert1.php" method="POST">
                        <span class="name">First Name</span>
                        <input type="text" name="firstname" placeholder="First Name Please" required /><br />
                        
                        <span class="name">Last Name</span>
                        <input type="text" name="lastname" placeholder="Last Name Please" required /><br />
                        
                        <span class="name">E-Mail</span>
                        <input type="email" name="email" placeholder="E-Mail Please" required /><br />
                        
                        <span class="name">Conatct No.</span>
                        <input type="tel" name="contact" placeholder="Contact Number Please" required /><br />
                        
                        <span class="name">Message</span> 
                        <textarea name="message" placeholder="Your message Please" required ></textarea><br /></br>
                        
                        <input type="submit" value="submit" placeholder="SEND" />
                        <input type="reset" name="reset" placeholder="RESET" />
                    </form>
                </div>
            </div>
        </div>
        <!--Main Body Ends HERE-->
        
        <!--Footer Starts HERE-->
        <footer class="footer">
            <div class="wrapper">
                <p>&copy; <a href="#">House Rental System</a>. developed by pratik.</p>
            </div>
        </footer>
        <!--Footer Ends HERE-->
    </body>
</html>