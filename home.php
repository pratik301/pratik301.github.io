<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
        <meta name="author" content="Pratik Singh" />
        <meta name="description" content="HOUSE RENTAL SYSTEM" />
        <meta name="keywords" content="Give Your Keywords for SEO" />
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>
<body>
<header class="header">
            <div class="wrapper">
                <h1>HOUSE RENTAL </h1>
            </div>
            
        </header>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="home.php?logout='1'" style="color: red;">logout</a> </p>
		<a href="house.php" style="color: red;">HOME</a>
    <?php endif ?>
</div>
</br>
</br>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  <footer class="footer">
            <div class="wrapper">
                <p>&copy; <a href="#">House Rental System</a>. developed by PS.</p>
            </div>
        </footer>
		
</body>
</html>