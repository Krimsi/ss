<?php
    //check if submit button is clicked
  If(isset($_POST['submit'])){
    try {
    $conn = new PDO("mysql:host=localhost;dbname=dbross", "root", "");

  // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   // prepare sql and bind parameters
   $stmt = $conn->prepare("INSERT INTO tab1 (first_name, last_name, textarea1, email)
    VALUES (:first_name, :last_name, :textarea1, :email)");
    $stmt->bindParam(':first_name', $first_name);
   $stmt->bindParam(':last_name', $last_name);
    $stmt->bindParam(':textarea1', $textarea1);
   $stmt->bindParam(':email', $email);

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $textarea1 = $_POST['textarea1'];
    $email = $_POST['email'];
    $stmt->execute();
    echo "Сообщение успешно отправлено";
}catch(PDOException $e){
  echo "Error: " . $e->getMessage();
}
$conn = null;
}
?>