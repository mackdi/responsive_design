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
  $stmt->bindParam(':password', password_hash($_POST['psw'], PASSWORD_BCRYPT));
  if($stmt->execute()) :
    die('Success');
  else:
    die('Fail');
	endif;
endif;
?>