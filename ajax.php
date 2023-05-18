<?php

include("connection.php");

 if(isset($_POST['staticName']) && $_POST['staticEmail'] && $_POST['staticmobile'] && $_POST['staticage']){
    $name = $_POST['staticName'];
    $email = $_POST['staticEmail'];
    $mobile = $_POST['staticmobile'];
    $age = $_POST['staticage'];
    $gender = $_POST['gender'];
    $qualification = $_POST['quali'];
    $state = $_POST['state'];
    $district = $_POST['district'];

    $sql = "SELECT * FROM 'personal'";
    $result = mysqli_query($conn,$sql);

    
    $sqlInsert = "INSERT INTO `personal`(`name`,`email`,`mobile`,`gender`,`age`,`qualification`,`state`,`district`) 
    VALUES ('$name','$email','$mobile','$gender','$age','$qualification','$state','$district')";

     mysqli_query($conn, $sqlInsert);
    
     echo '<script>alert("successfully inserted")</script>';
 }
 else {
      echo '<script>alert("please check the input variable or value")</script>';
    

 }

?>