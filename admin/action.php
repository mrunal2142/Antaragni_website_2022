<?php 
// Start the session
session_start();
require('config.php');

if(isset($_POST['submit'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from admin WHERE username='$username' AND password='$password'";
    
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1){
        $_SESSION['user'] = $username;
        echo"<script>
            alert('You Have Successfully Logged in');
            window.location='result.php';
        </script>";
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>