<!DOCTYPE html>
<html lang="en">

<head>
    <title>Digital Voting System</title>
    <meta charset="utf-8">

    <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/css/style.css" />
     <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap.css" />
     <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap.min.css" />

     <script src="bootstrap-4.3.1/js/bootstrap.min.js" >
     </script>
     <script src="bootstrap-4.3.1/js/bootstrap.js" >
     </script>
     <script src="jquery/jquery.min.js"></script>
     <script src="Sweet%2520Alert/sweetalert.min.js"></script>
     <link type="text/css" rel="stylesheet" href="jquery/jquery.js" />

     <!-- fontawesome icon -->
     <link type="text/css" rel="stylesheet" href="fontawesome-free-5.8.1-web\css\all.css">
     <script src="bootstrap-4.3.1/js/bootstrap.min.js"></script>

     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <!-- Popper JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <!-- Latest compiled JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



</head>

<body>

    <!--------password show and hide ----->
    <script>
        function showpw() {
            var pw = document.getElementById('showpw');
            if (pw.type == "text")
                pw.type = "password";
            else
                pw.type = "text";
        }
    </script>
    <!------------------->

    <img class="login-body" src="image/background.png">

    <div class="login-box">
        <img src=image/user3.png> 
        <form action="../Controller/AdminController.php" method="POST">

        <div class="text-box">
            <i class="far fa-envelope"></i>
            <input type="email" placeholder="Email" id="email" name="email" value="" required>
        </div>

        <div class="text-box">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="password" id="password" name="password" value="" id="showpw" required />
            <a onclick="showpw();"><i class="fa fa-eye"></i></a>
        </div>

        <input type="submit" name="login" class="btn1" class="btn" value="LOGIN"><br><br>
        <a href="#passReset" data-toggle="modal" data-target="#passReset">Forgot Password??</a>
         <a href="logout.php">LOGOUT</a><div class="hr-line"></div>
         
         <div class="social-media">
             <a href="https://www.google.com"><i class="fab fa-google">ooooogle</i></a>
         </div>

        </form>

    </div>
    
    
          
           <div class="modal fade" id="passReset">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h3 class="modal-title pass-text">Password Reset </h3>
                     <button type="button" class="close" data-dismiss='modal'>&times;</button>
                 </div>
                 <div class="body">
                     <form method="POST" action="../Controller/AdminController.php" onsubmit="return AdminValidation() ">
                         <div class="form-group passReset">
                             <i class="fas fa-envelope icon"></i>
                             <input type="email" name="email" id="emails" value="" class="input-field" class="form-control" placeholder="Enter Your Email" />
                         </div>
                         <span id="mail" class="text-danger"></span>
                         
                         <div class="form-group passReset">
                             <i class="fas fa-key icon"></i>
                             <input type="password" id="psw" name="password" placeholder="Enter New Password" class="input-field" class="form-control" />
                         </div>
                         <span id="pass" class="text-danger"></span>
                         
                         <div class="form-group passReset">
                             <i class="fas fa-key icon"></i>
                             <input type="password" class="input-field" id="cpasword" placeholder="Re-Type Password" name="cpass" value="" class="form-control">
                         </div>
                         <span id="cpass" class="text-danger"></span>
                         
                         <div class="register-btn">
                             <button type="submit" name="btn-PassReset" class="btn btn-outline-light btn-lg bg-primary">Reset</button>
                         </div>
                         <div class="register-btn" class="modal-footer">
                             <button type="button" class="btn btn-outline-light btn-lg btn-danger" data-dismiss="modal">Cancel</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
    
 <script type="text/javascript">
     function AdminValidation() {
         
         var email = document.getElementById('emails').value;
         var pasword = document.getElementById('psw').value;
         var cpasword = document.getElementById('cpasword').value;

         if (email == '') {
             document.getElementById('mail').innerHTML = "** please your Email";
             return false;
         } else if (email.indexOf('@') <= 0) {
             document.getElementById('mail').innerHTML = "**Invalid Email Address @";
             return false;
         } else if (email.charAt(email.length - 4) != '.') {
             document.getElementById('mail').innerHTML = "**Invalid Email Address .";
             return false;
         } else if (email != '') {
             document.getElementById('mail').innerHTML = " ";
         }



         if (pasword == '') {
             document.getElementById('pass').innerHTML = "** please type new  password";
             return false;
         } else if ((pasword.length <= 5) || (pasword.length > 20)) {
             document.getElementById('pass').innerHTML = "** password length required between 5 and 20 ";
             return false;
         } else if (pasword != '') {
             document.getElementById('pass').innerHTML = " ";
         }



         if (cpasword == '') {
             document.getElementById('cpass').innerHTML = "** please re-type your password";
             return false;
         } else if (pasword != cpasword) {
             document.getElementById('cpass').innerHTML = "** Password doesnt match";
             return false;
         } else if (cpasword != '') {
             document.getElementById('cpass').innerHTML = "";
         }
     }
 </script>
    

</body>

</html>