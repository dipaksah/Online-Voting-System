<!DOCTYPE html>
<html lang="en">

<head>
    <title>Digital Voting System</title>
    <meta charset="utf-8">

    <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/js/bootstrap.bundle" />

    <!-- fontawesome icon -->
    <link type="text/css" rel="stylesheet" href="fontawesome-free-5.8.1-web\css\all.css">

    <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/css/style.css" />



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
        
         <a href="logout.php">LOGOUT</a><div class="hr-line"></div>
         
         <div class="social-media">
             <a href="https://www.google.com"><i class="fab fa-google">ooooogle</i></a>
         </div>

        </form>

    </div>

</body>

</html>