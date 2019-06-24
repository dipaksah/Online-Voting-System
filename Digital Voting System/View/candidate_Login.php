<?php
 //include'../Controller/Candidate_Controller.php';
  // where attempt is more than else it is block the site for 3 times
  //echo "aaaaaaaaaaa".$_COOKIE['attempts'];
  
  if(isset($_COOKIE['attempts']) and $_COOKIE['attempts']>=1)
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



    <script src="bootstrap-4.3.1/js/bootstrap.min.js"></script>
    <script src="bootstrap-4.3.1/js/bootstrap.js" ></script>
    <script src="jquery/jquery.min.js"></script>


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
        <img src=image/user1.png> <form method="POST" action="../Controller/Candidate_Controller.php">
        <div class="text-box">
            <i class="far fa-envelope"></i>
            <input type="email" placeholder="Email" name="email" value="" required>
        </div>

        <div class="text-box">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="password" name="password" value="" id="showpw" required />
            <a onclick="showpw();"><i class="fa fa-eye"></i></a>
        </div>

        <input class="btn1" class="btn" type="submit" name="candidate_login" value="LOGIN">
        <br><br><a href="#">Forgot Password??</a><br><br>
        <a href="#C-register" data-toggle="modal" data-target="#C-register">Sign Up For New Account</a>
        <a href="logout.php">LOGOUT</a><div class="hr-line"></div>
         
         <div class="social-media">
             <a href="https://www.google.com"><i class="fab fa-google">ooooogle</i></a>
         </div>

        </form>
    </div>



    <div class="modal fade" id="C-register">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h3 class="modal-title">Candidate Sign Up</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form method="POST" action="../Controller/Candidate_Controller.php" onsubmit="return validation()">

                        <div class="form-group candidate-register">
                            <i class="fas fa-user-tie icon"></i><input type="text" id="fname" class="input-field" placeholder="Enter First Name" name="f_name" value="" class="form-control">
                        </div>
                        <span id="first-name" class="text-danger"></span>

                        <div class="form-group candidate-register">
                            <i class="fas fa-user icon"></i>
                            <input type="text" class="input-field" id="la-name" placeholder="Enter Last Name" name="l_name" value="" class="form-control">
                        </div>
                        <span id="last-name" class="text-danger"></span>

                        <div class="form-group candidate-register">
                            <i class="fas fa-map-marker-alt icon"></i>
                            <input type="text" class="input-field" id="ad" placeholder="Enetr Your Address" name="address" value="" class="form-control">
                        </div>
                        <span id="addr" class="text-danger"></span>

                        <div class="form-group candidate-register">
                            <i class="fas fa-map-marker-alt icon"></i>
                            <input type="number" class="input-field" id="pnumber" placeholder="Enetr Your Phone Number" name="phone_No" value="phoneNumber" class="form-control">
                        </div>
                        <span id="phone_no" class="text-danger"></span>

                        <div class="form-group candidate-register">
                            <i class="far fa-calendar-alt icon"></i>
                            <a class="DB">DOB</a>
                            <input type="date" class="input-field" id="DOB" name="dob" class="form-control">
                        </div>
                        <span id="dob" class="text-danger"></span>

                        <div class="form-group candidate-register">
                            <i class="fas fa-male icon"></i>
                            <a class="DB">Gender</a>
                            <input type="radio" id="gens" value="Male" name="gender" class="form-control" class="input-field" >Male<br>
                            <input type="radio" id="gens" name="gender" value="Female" class="input-field" class="form-control" >Female<br>
                            <input type="radio" id="gens" name="gender" class="input-field" class="form-control" value="Others" >Other
                        </div>
                        <span id="g" class="text-danger"></span>
                        

                        <div class="form-group candidate-register">
                            <i class="fas fa-envelope icon"></i>
                            <input type="email" placeholder="Enter Your Email" id="mail" class="input-field" value="" name="email" class="form-control">
                        </div>
                        <span id="email" class="text-danger"></span>

                        <div class="form-group candidate-register">
                            <i class="fas fa-list-ol icon"></i>
                            <input type="number" class="input-field" id="number" placeholder="Enter Your Citizenship number" name="cnumber" value="" class="form-control">
                        </div>
                        <span id="cnumber" class="text-danger"></span>

                        <div class="form-group candidate-register">
                            <i class="fas fa-key icon"></i>
                            <input type="password" placeholder="Enter Your Password" id="psw" class="input-field" name="password" value="" class="form-control">
                        </div>
                        <span id="pass" class="text-danger"></span>

                        <div class="form-group candidate-register">
                            <i class="fas fa-key icon"></i>
                            <input type="password" id="cpassword" placeholder="Re-Enter Password" value="" name="cpassword" class="input-field" class="form-control">
                        </div>
                        <span id="cpass" class="text-danger"></span>

                        <div class="register-btn">
                            <button type="submit" name="CandidateRegister" class="btn btn-outline-light btn-lg bg-primary">Register</button>
                        </div>

                        <div class="register-btn">
                            <button type="button" class="btn btn-outline-light btn-lg btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!----Form Validation using JavaScript---->
    <script type="text/javascript">
        function validation() {

            var firstname = document.getElementById('fname').value;
            var lastname=document.getElementById('la-name').value;
            var address=document.getElementById('ad').value;
            var phone=document.getElementById('pnumber').value;
            var dob=document.getElementById('DOB').value;
            var gender=document.getElementById('gens').value;
            var email=document.getElementById('mail').value;
            var cnumber=document.getElementById('number').value;
            var password=document.getElementById('psw').value;
//            var cpassword=document.getElementById('cpasword').value;


            if (firstname == '') {
                document.getElementById('first-name').innerHTML = "** please fill the First Name";
                return false;
            }
            else if ((firstname.length <= 2) || (firstname.length > 20)) {
                document.getElementById('first-name').innerHTML = "** Name length must be character between 2 and 20";
                return false;
            }
            else if (!isNaN(firstname)) {
                document.getElementById('first-name').innerHTML = "** Only characters are allowed";
                return false;
            }else if(firstname!=''){document.getElementById('first-name').innerHTML=" ";}




            if (lastname == '') {
                document.getElementById('last-name').innerHTML = "** please fill the Last Name";
                return false;
            }
            else if ((lastname.length <= 2) || (lastname.length > 20)) {
                document.getElementById('last-name').innerHTML = "** Name length must be characters between 2 and 20";
                return false;
            }
            else if (!isNaN(lastname)) {
                document.getElementById('last-name').innerHTML = "** Only characters are allowed";
                return false;
            }else if(lastname!=''){document.getElementById('last-name').innerHTML=" ";}




            if (address == '') {
                document.getElementById('addr').innerHTML = "** please enter your address";
                return false;
            }else if(address!=''){document.getElementById('addr').innerHTML=" ";}
            
            
            
            if(phone==''){
                document.getElementById('phone_no').innerHTML=" ** Enter your contact number";
                return false;
            }else if(isNaN(phone)){
                document.getElementById('phone_no').innerHTML=" ** Please enter only Number";
                return false;
            }else if((phone.charAt(0)!=9) || (phone.charAt(1)!=7) || (phone.charAt(2)!=7)){
                document.getElementById('phone_no').innerHTML=" ** Number Must be start with 977 code";
                return false;
            }else if(phone!=''){document.getElementById('phone_no').innerHTML=" ";}
                
            
            
            if (dob == '') {
                document.getElementById('dob').innerHTML = "** please fill your date of birth";
                return false;
            }else if(dob!=''){document.getElementById('dob').innerHTML=" ";}
            
            
            
            if (gender == '') {
                document.getElementById('g').innerHTML = "** please select your gender";
                return false;
            }

           
            
            
            if (email == '') {
                document.getElementById('email').innerHTML = "** please your Email";
                return false;
            }
            else if (email.indexOf('@') <= 0) {
                document.getElementById('email').innerHTML = "**Invalid Email Address @";
                return false;
            }
            else if (email.charAt(email.length - 4) != '.') {
                document.getElementById('email').innerHTML = "**Invalid Email Address .";
                return false;
            }else if(email!=''){document.getElementById('email').innerHTML=" ";}


            
            if (cnumber == '') {
                document.getElementById('cnumber').innerHTML = "** please fill your citizenship number";
                return false;
            }
            else if (isNaN(cnumber)) {
                document.getElementById('cnumber').innerHTML = "** Only digits are allowed";
                return false;
            }
            else if (cnumber.length != 11) {
                document.getElementById('cnumber').innerHTML = "** Citizenship Number must be 11 digits";
                return false;
            }else if(cnumber!=''){document.getElementById('cnumber').innerHTML=" ";}


            if (pasword == '') {
                document.getElementById('pass').innerHTML = "** please fill field password";
                return false;
            }
            else if ((password.length <= 5) && (password.length > 20)) {
                document.getElementById('pass').innerHTML = "** password length required between 5 and 20 ";
                return false;
            }else if(pasword!=''){document.getElementById('pass').innerHTML=" ";}

//
//
//            if (cpasword == '') {
//                document.getElementById('cpass').innerHTML = "** please re-type your password";
//                return false;
//            }
//            else if (password != cpasword) {
//                document.getElementById('cpass').innerHTML = "** Password doesnt match";
//                return false;
//            }else if(cpasword!=''){document.getElementById('cpass').innerHTML=" ";}
        }
    </script>

</body>

</html>