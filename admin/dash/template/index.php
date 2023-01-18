<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Admin Login!</title>
  </head>
  <body>
      
     
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="POST" action="action.php">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Email address" required autofocus>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" name="submit" type="submit">Sign in</button>
            </form><!-- /form -->
            
        </div><!-- /card-container -->
    </div><!-- /container --> 
      

    <!--// <script>  -->
    <!--//         function validation()  -->
    <!--//         {  -->
    <!--//             var id=document.f1.inputEmail.value;  -->
    <!--//             var ps=document.f1.inputPassword.value;  -->
    <!--//             if(id.length=="" && ps.length=="") {  -->
    <!--//                 alert("User Name and Password fields are empty");  -->
    <!--//                 return false;  -->
    <!--//             }  -->
    <!--//             else  -->
    <!--//             {  -->
    <!--//                 if(id.length=="") {  -->
    <!--//                     alert("User Name is empty");  -->
    <!--//                     return false;  -->
    <!--//                 }   -->
    <!--//                 if (ps.length=="") {  -->
    <!--//                 alert("Password field is empty");  -->
    <!--//                 return false;  -->
    <!--//                 }  -->
    <!--//             }                             -->
    <!--//         }  -->
    <!--//     </script>-->
  </body>
</html>
