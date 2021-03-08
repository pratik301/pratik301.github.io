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
$message = $_POST['message'];
if (!empty($firstname) || !empty($lastname) || !empty($email) || !empty($contact) || !empty($message)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "youtube";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From register Where email = ? Limit 1";
     $INSERT = "INSERT Into register (firstname, lastname, email, contact, message) values(?, ?, ?, ?, ?)";
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
      $stmt->bind_param("sssis", $firstname, $lastname, $email, $contact, $message);
      $stmt->execute();
      echo "We will try to reply your query answer, as soon as possible! Thank you ";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>

<a href="index.html" class="next">Go to Home</a>
</body>
</html>