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
                    <a href="index.php"><li>Home</li></a>
                    <a href="about.php"><li>About Us</li></a>
                    <a href="#"><li>Houses</li></a>
                    <a href="contact.php"><li>Contact Us</li></a>
                    <a href="login.php"><li>Log In</li></a>
                </ul>
            </div>
        </nav>
        <!--Menu Ends HERE-->
        
        
        
        <!--Main Body Starts HERE-->
        <div class="main">
            <div class="wrapper">
                <h3>VASHI NAVIMUMBAI</h3>
                
                <!--Displaying Recently Added Houses in Boxes-->
                <div class="clearfix">
                    
                    <div class="houses">
                        <img src="images/1.jpg" />
                        <span class="house-title">ANTILLA</span><br />
                       
                        <span class="house-location"> Location: SEC-07 SHIVAJI CHOWK,  VASHI.</span><br />
                        <a href="book.php">
                            <button type="button" class="btn-book" >Book House</button>
                        </a>
                    </div>
                    
                    <div class="houses">
                        <img src="images/2.jpg" />
                        <span class="house-title">JK HOUSE</span><br />
                        
                        <span class="house-location">Location: SEC-24E  KING CIRCLE , VASHI.</span><br />
						<a href="book2.php">
                        <button type="button" class="btn-book" >Book House</button>
						</a>
                    </div>
                    
                    <div class="houses">
                        <img src="images/3.jpg" />
                        <span class="house-title">WHITE HOUSE</span><br />
						<a href="book3.php">
                        
                        <span class="house-location">Location: SEC-25 SHIVAJI CHOWK, VASHI.</span><br />
					
                        <button type="button" class="btn-book" >Book House</button>
                    </div>
                    
                    <div class="houses">
                        <img src="images/4.jpg" />
                        <span class="house-title">THE ONE</span><br />
                        
                        <span class="house-location">Location: SEC-14D RAJIV GANDHI ROAD, VASHI.</span><br />
                        <button type="button" class="btn-book" onclick="already booked">Book House</button>
                    </div>
                    
                    
                </div>
                
                <h3>PANVEL NAVIMUMBAI</h3>
                <!--Displaying Luxurious Houses in Boxes-->
                <div class="clearfix">
                    
                    <div class="houses">
                        <img src="images/5.jpg" />
                        <span class="house-title">WORLD CREST</span><br />
                        
                        <span class="house-location">Location: RM-702 WORLD CREST PANVEL</span><br />
                        <button type="button" class="btn-book" >Book House</button>
                    </div>
                    
                    <div class="houses">
                        <img src="images/6.jpg" />
                        <span class="house-title">WORLD CREST</span><br />
                        
                        <span class="house-location">Location: RM-702 WORLD CREST PANVEL</span><br />
                        <button type="button" class="btn-book" >Book House</button>
                    </div>
                    
                    
                    <div class="houses">
                        <img src="images/7.jpg" />
                        <span class="house-title">WORLD CREST</span><br />
                        
                        <span class="house-location">Location: RM-702 WORLD CREST PANVEL</span><br />
                        <button type="button" class="btn-book" >Book House</button>
                    </div>
                    
                    <div class="houses">
                        <img src="images/8.jpg" />
                        <span class="house-title">WORLD CREST</span><br />
                        
                        <span class="house-location">Location: RM-702 WORLD CREST PANVEL</span><br />
                        <button type="button" class="btn-book" >Book House</button>
                    </div>
                    
                    
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