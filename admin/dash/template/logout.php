<?php
session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();
 echo"<script>
            alert('You Have  Logged out Successfully');
            window.location='index.php';
        </script>";
// header("Location:index.php");

?>