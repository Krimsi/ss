<?php
require_once 'adr.php'; 
 

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
 
if (!$link) {
die("Connection failed: " . mysqli_connect_error());
}
 
$first_name = strip_tags(trim($_POST['first_name']));
$last_name = strip_tags(trim($_POST['last_name']));
$textarea1 = strip_tags(trim($_POST['textarea1']));
$email = strip_tags(trim($_POST['email']));
$sql = "INSERT INTO tab1 (first_name, last_name, textarea1, email) VALUES ('$first_name', '$last_name', '$textarea1', '$email')";
if (mysqli_query($link, $sql)) {
      
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($link);
}
mysqli_close($link);
		
?>