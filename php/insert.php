<?php

require"config.php";

$name = $_POST['name'];
$mail = $_POST['email'];
$sub = $_POST['subject'];
$message = $_POST['message'];

$query = mysqli_query($conn,"INSERT INTO newsletter (full_name,email,subject,message)VALUES('$name','$mail','$sub','$message')");
if($query){
    echo '<script>alert("Your message has been sent. Thank you!")</script>';
}else{
    echo '<script>alert("Your message not send. Thank you!")</script>';
}
?>