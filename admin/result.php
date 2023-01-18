<?php
    // Start the session
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Antaragni Query panel!</title>
  </head>
  <body>
      <!--<img src="../img/antragni_new.png">-->
   
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Antaragni</a>
        <a class="nav-link" style="float: right;" href="logout.php">Logout</a>
 

  <!--<div class="collapse navbar-collapse" id="navbarSupportedContent">-->
  <!--  <ul class="navbar-nav mr-auto">-->
  <!--    <li class="nav-item active">-->
  <!--      <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>-->
  <!--    </li>-->
  <!--   </ul>-->

  <!--</div>-->
   <!--<div class="nav navbar-right">-->
   <!--    <li class="nav-item" >-->
   <!--     <a class="nav-link" style="float: right;" href="logout.php">Logout</a>-->
   <!--   </li>-->
   <!-- </div>-->
  </div>
</nav>
    
    
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-lg-12 col-sm-12">-->
            
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sr</th>
      <th scope="col">Full name</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
      <th scope="col">Time</th>
      <th scope="col">Email</th>
      <th scope="col">Reply</th>
    </tr>
  </thead>
  <tbody>
    
        <?php

require'config.php';

$query = "SELECT * FROM newsletter";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
     
    while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
    <th scope="row"><?php echo $row["id"];?></th>
      <td><?php echo $row["full_name"];?></td>
      <td><?php echo $row["subject"];?></td>
      <td><?php echo $row["message"];?></td>
      <td><?php echo $row["time"];?></td>
      <td><?php echo $row["email"];?></td>
      <td><button type="button" class="btn btn-info">
          <?php
          $subject="Reply to: ".$row['subject'];
          $body = "Dear ".$row['full_name'].",";
          $mail = "mailto:".$row['email']."?subject=".$subject."&body= ".$body;
          ?>
      <a href="<?php echo $mail ?>" style="text-decoration: none;color:white;">Reply</a></button></td>
      </tr>
        <?php }
    }

?>
    
    
  </tbody>
</table>
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
