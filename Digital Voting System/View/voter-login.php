 <?php
   include'../Controller/VoterController.php';

      if(isset($_COOKIE['attempt']) and $_COOKIE['attempt']>=2)
        {
	         echo "You attempt wrong password 3 Times. So, you cannot access this site for 3 minutes!!!!!!!";  
              die();
        } 
  ?>

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
       <?php include'../View/notification.php'; ?>
        
         
     <img class="login-body" src="image/background.png">
    
     <div class="login-box">   
         <img src=image/user2.png> 
         <form method="POST" action="../Controller/VoterController.php">
         <div class="text-box">
             <i class="far fa-envelope"></i>
             <input type="email" placeholder="Email" name="email" value="" required>
         </div>
         <div class="text-box">
             <i class="fas fa-lock"></i>
             <input type="password" placeholder="password" name="password" value="" id="showpw" required />
             <a onclick="showpw();"><i class="fa fa-eye"></i></a>
         </div>

         <input class="btn1" class="btn" type="submit" name="login" value="LOGIN">
         <br><br><a href="#passReset" data-toggle="modal" data-target="#passReset">Forgot Password??</a><br><br>
         <a href="#Vregister" data-target="#Vregister" data-toggle="modal">Sign Up For New Account</a>
         <a href="logout.php">LOGOUT</a><div class="hr-line"></div>
         
         <div class="social-media">
             <a href="#">Login Secure</a>
         </div>
         </form>
     </div>


     <div class="modal fade" id="Vregister">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h3 class="modal-title">Voter Sign Up</h3>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                 </div>
                 <div class="modal-body">
                     <form method="POST" action="../Controller/VoterController.php" onsubmit="return validation()">

                         <div class="form-group voter-register">
                             <i class="fas fa-user-tie icon"></i>
                             <input type="text" id="fname" class="input-field" placeholder="Enter First Name" id="fname" name="f_name" value="" class="form-control">
                         </div>
                         <span id="first-name" class="text-danger"></span>

                         <div class="form-group voter-register">
                             <i class="fas fa-user icon"></i>
                             <input type="text" class="input-field" id="lname" placeholder="Enter Last Name" name="l_name" value="" class="form-control">
                         </div>
                         <span id="last-name" class="text-danger"></span>

                         <div class="form-group voter-register">
                             <i class="fas fa-map-marker-alt icon"></i>
                             <input type="text" class="input-field" id="ad" placeholder="Enter Your Address" name="address" value="" class="form-control">
                         </div><span id="addr" class="text-danger"></span>


                         <div class="form-group voter-register">
                             <i class="far fa-calendar-alt icon"></i>
                             <a class="DB">DOB</a><input type="date" min="1990-12-12" max="2019-12-12" id="DOB" class="input-field" name="dob" value="" class="form-control">
                         </div>
                         <span id="dob" class="text-danger"></span>

                         <div class="form-group voter-register">
                             <i class="fas fa-male icon"></i>
                             <a class="DB">Gender</a>
                             <input class="input-field" id="gen" class="form-control" type="radio" value="Male" name="gender"> Male<br>
                             <input class="input-field" class="form-control" id="gen" type="radio" value="Female" name="gender"> Female<br>
                             <input class="input-field" class="form-control" id="gen" type="radio" value="Other" name="gender"> Other
                         </div>
                         <span id="gender" class="text-danger"></span>

                         <div class="form-group voter-register">
                             <i class="fas fa-list-ol icon"></i>
                             <input type="number" class="input-field" id="number" placeholder="Enter Your Citizenship number" name="cnumber" value="" class="form-control">
                         </div>
                         <span id="cnumber" class="text-danger"></span>

                         <div class="form-group voter-register">
                             <i class="fas fa-envelope icon"></i>
                             <input type="email" class="input-field" id="emails" placeholder="Enter Your Email" name="email" value="" class="form-control">
                         </div>
                         <span id="email" class="text-danger"></span>

                         <div class="form-group voter-register">
                             <i class="fas fa-key icon"></i>
                             <input type="password" class="input-field" id="psw" placeholder="Enter Your Password" name="password" value="" class="form-control" />
                         </div>
                         <span id="pass" class="text-danger"></span>

                         <div class="form-group voter-register">
                             <i class="fas fa-key icon"></i>
                             <input type="password" class="input-field" id="cpasword" placeholder="Re-Type Password" name="cpassword" value="" class="form-control">
                         </div>
                         <span id="cpass" class="text-danger"></span>

                         <div class="register-btn">
                             <input type="submit" name="button-VoterRegister" id="submit" value="Register" class="btn btn-outline-light btn-lg bg-primary" onClick="_setAge();">
                         </div>

                         <div class="register-btn" class="modal-footer">
                             <button type="button" class="btn btn-outline-light btn-lg btn-danger" data-dismiss="modal">Cancel</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
     
     
     
     

     <div class="modal fade" id="passReset">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h3 class="modal-title pass-text">Password Reset </h3>
                     <button type="button" class="close" data-dismiss='modal'>&times;</button>
                 </div>
                 <div class="body">
                     <form method="POST" action="../Controller/VoterController.php" onsubmit="return ResetValidation()">
                         <div class="form-group passReset">
                             <i class="fas fa-envelope icon"></i>
                             <input type="email" name="email" id="em" value="" class="input-field" class="form-control" placeholder="Enter Your Email" />
                         </div>
                         <span id="mail" class="text-danger"></span>
                         
                         <div class="form-group passReset">
                             <i class="fas fa-key icon"></i>
                             <input type="password" id="pasw" name="password" placeholder="Enter New Password" class="input-field" class="form-control" />
                         </div>
                         <span id="passs" class="text-danger"></span>
                         
                         <div class="form-group passReset">
                             <i class="fas fa-key icon"></i>
                             <input type="password" id="cpa" class="input-field" placeholder="Re-Type Password" name="cpass" value="" class="form-control">
                         </div>
                         <span id="cpasss" class="text-danger" ></span>
                         
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
     
    

 </body>
 </html>

 <!----Form Validation using JavaScript---->
 <script type="text/javascript">
     function validation() {

         var fname = document.getElementById('fname').value;
         var lname = document.getElementById('lname').value;
         var address = document.getElementById('ad').value;
         var date = document.getElementById('DOB').value;
         var gen = document.getElementById('gen').value;
         var cnumber = document.getElementById('number').value;
         var email = document.getElementById('emails').value;
         var pasword = document.getElementById('psw').value;
         var cpasword = document.getElementById('cpasword').value;


         if (fname == '') {
             document.getElementById('first-name').innerHTML = "** please fill the First Name";
             return false;
         } else if ((fname.length <= 2) || (fname.length > 20)) {
             document.getElementById('first-name').innerHTML = "** Name length must be character between 3 and 20";
             return false;
         } else if (!isNaN(fname)) {
             document.getElementById('first-name').innerHTML = "** Only characters are allowed";
             return false;
         } else if (fname != '') {
             document.getElementById('first-name').innerHTML = " ";
         }




         if (lname == '') {
             document.getElementById('last-name').innerHTML = "** please fill the Last Name";
             return false;
         } else if ((lname.length <= 2) || (lname.length > 20)) {
             document.getElementById('last-name').innerHTML = "** Name length must be characters between 2 and 20";
             return false;
         } else if (!isNaN(lname)) {
             document.getElementById('last-name').innerHTML = "** Only characters are allowed";
             return false;
         } else if (lname != '') {
             document.getElementById('last-name').innerHTML = " ";
         }




         if (address == '') {
             document.getElementById('addr').innerHTML = "** please enter your address";
             return false;
         } else if (address != '') {
             document.getElementById('addr').innerHTML = " ";
         }
         
         if (date == '') {
             document.getElementById('dob').innerHTML = "** please fill your date of birth";
             return false;
         } else if (date !== '') {
             document.getElementById('dob').innerHTML = " ";
         } 
         
         if (gen == '') {
             document.getElementById('gender').innerHTML = "** please select your gender";
             return false;
         } else if (gen != '') {
             document.getElementById('gender').innerHTML = " ";
         }



         if (cnumber == '') {
             document.getElementById('cnumber').innerHTML = "** please fill your citizenship number";
             return false;
         } else if (isNaN(cnumber)) {
             document.getElementById('cnumber').innerHTML = "** Only digits are allowed";
             return false;
         } else if (cnumber.length != 11) {
             document.getElementById('cnumber').innerHTML = "** Citizenship Number must be 11 digits";
             return false;
         } else if (cnumber != '') {
             document.getElementById('cnumber').innerHTML = "";
         }




         if (email == '') {
             document.getElementById('email').innerHTML = "** please your Email";
             return false;
         } else if (email.indexOf('@') <= 0) {
             document.getElementById('email').innerHTML = "**Invalid Email Address @";
             return false;
         } else if (email.charAt(email.length - 4) != '.') {
             document.getElementById('email').innerHTML = "**Invalid Email Address .";
             return false;
         } else if (email != '') {
             document.getElementById('email').innerHTML = " ";
         }



         if (pasword == '') {
             document.getElementById('pass').innerHTML = "** please fill field password";
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
 
<script type="text/javascript">
     function ResetValidation() {
         
         var email = document.getElementById('em').value;
         var pasword = document.getElementById('pasw').value;
         var cpasword = document.getElementById('cpa').value;

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
             document.getElementById('passs').innerHTML = "** please type new  password";
             return false;
         } else if ((pasword.length <= 5) || (pasword.length > 20)) {
             document.getElementById('passs').innerHTML = "** password length required between 5 and 20 ";
             return false;
         } else if (pasword != '') {
             document.getElementById('passs').innerHTML = " ";
         }



         if (cpasword == '') {
             document.getElementById('cpasss').innerHTML = "** please re-type your password";
             return false;
         } else if (pasword != cpasword) {
             document.getElementById('cpasss').innerHTML = "** Password doesnt match";
             return false;
         } else if (cpasword != '') {
             document.getElementById('cpasss').innerHTML = "";
         }
     }
 </script>