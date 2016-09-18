<?php 
$server = "localhost";
$username = "root";
$password = "YVxTWLmkSTuyZ1aa";
$database = "responsive_design";

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} 
catch (PDOExeption $e) {
  die("Connection failed: " . $e->getMessege());
}



if(!empty($_POST['uname']) && !empty($_POST['psw'])):
  $sql = "INSERT INTO users(username ,password) VALUES(:username , :password)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':username', $_POST['uname']);
  $stmt->bindParam(':password', $_POST['psw']);
  if($stmt->execute()) :
    die('Logged in!');
  else:
    die('Failed');
	endif;
endif;


//subscribers to db
if(!empty($_POST['sb-name']) && !empty($_POST['sb-email'])):
  $sql = "INSERT INTO subscribers(name ,email) VALUES(:name , :email)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':name', $_POST['sb-name']);
  $stmt->bindParam(':email', $_POST['sb-email']);
  if($stmt->execute()) :
    die('Subscribed!');
  else:
    die('Failed');
  endif;
endif;
?>