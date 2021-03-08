
<html>
<head>
</head>
<body>
<style>
a{
   text-decoration:none;
   display:inline-block;
   padding:8px 16px;
}

a:hover{
	background-color:#ddd;
	color:black;
}
.next{
	background-color:#4CAF50;
	color:white;
}
</style>



<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$days = $_POST['days'];
if (!empty($firstname) || !empty($lastname) || !empty($email) || !empty($contact) || !empty($address) || !empty($days)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "bookingdetail";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From booking Where email = ? Limit 1";
     $INSERT = "INSERT Into booking (firstname, lastname, email, contact, address, days) values(?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssii", $firstname, $lastname, $email, $contact, $address, $days);
      $stmt->execute();
      echo "Booking detail inserted sucessfully";
	  

	  
     } else {
      echo "Someone already booking using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>


<a href="paym2.php" class="next">payment</a>
</body>
</html>