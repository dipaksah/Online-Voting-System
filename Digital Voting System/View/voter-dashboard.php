 <?php
   session_start();
   
   if(empty($_SESSION['Id']))
   {
       header('location:voter-login.php');
       die();
       
   }

//    if(isset($_SESSION['Id'])){
//        //echo "login";
//        header('location:voter-dashboard.php'); 
//    }else{
//        echo "not login";
//        exit;
//    }
    ?>
   

   
   <!DOCTYPYE html>
    <html lang="en">

    <head>
        <title>Voter DashBoard</title>
        <meta charset="utf-8">

        <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/css/style.css" />
        <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap.css" />
        <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/js/bootstrap.bundle" />
        <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/js/bootstrap.js.map" />

        <!-- fontawesome icon -->
        <link type="text/css" rel="stylesheet" href="fontawesome-free-5.8.1-web\css\all.css">


        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <script language="javascript" type="text/javascript" src="http://dl.dropboxusercontent.com/u/152048609/nepali.js"></script>

    </head>

    <body>



        <div class="container-fluid">
            <div class="row">

                <div class="col-md-2">
                    <div class="sidebar">
                        <div class="admin-image">
                            <img src="image/user1.png" alt="admin-image">
                            <p>Voter DashBoard</p>
                            <hr class="hidden-sm hidden-md hidden-lg" />
                        </div>
                        <a href="voter-dashboard.php"><i class="fa fa-fw fa-home"></i>Home</a>
                        <a href="voter_profile.php"><i class="fas fa-plus"></i>Edit Profile</a>
                        <a href="result.php"><i class="fas fa-search"></i>View Results</a>
                        <a href="generate.php"><i class="fa fa-fw fa-wrench"></i>Cast Vote</a>
                        <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Log out</a>
                    </div>
                </div>

                <div class="col-md-10 content">
                    <div class="voter-dash">
                        <h1>Voter DashBoard</h1>
                        <hr class="hidden-sm hidden-lg hidden-md" />
                        <img src="image/maintain.jpg" alt="Voter dashboard">
                        <div class="voter-block">
                            <h1>Voter can Manage profile and give a vote securly.</h1>
                            <h3>Digital Voting System Voter DashBoard</h3>
                        </div>
                        <h2>Management</h2>
                        <p>In this session voter can view their profile and manage (update, delete, edit) their profile and view result of voting system. in this session also a part of form include in which voter can cast vote securly.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </body>

    </html>