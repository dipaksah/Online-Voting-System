
<?php
   include'../Controller/VoterController.php';

   if(empty($_SESSION['Id']))
   {
       header('location:voter-login.php');
       die();
       
   }
 
  // where attempt is more than else it is block the site for 3 times
  //echo $_COOKIE['attempt'];
  if(isset($_COOKIE['attempt']) and $_COOKIE['attempt']>=2)
  {
	  
	  echo "You attempt wrong ID Number 3 Times. So, you cannot access this site for 3 minutes!!!!!!!";
	  die();
  }  
  ?>

   
   
   <!DOCTYPYE html>
    <html lang="en">

    <head>
        <title>Digital Voting System</title>
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
                            <p>User DashBoard</p>
                            <hr class="hidden-sm hidden-md hidden-lg" />
                        </div>
                        <a href="vote.php"><i class="fa fa-fw fa-home"></i>Home</a>
                        <a href="voter_profile.php"><i class="fas fa-plus"></i>View Profile</a>
                        <a href="generate.php"><i class="fa fa-fw fa-wrench"></i>Cast Vote</a>
                        <a href="#contact"><i class="fas fa-sign-out-alt"></i>Log out</a>
                    </div>
                </div>

                <div class="col-md-10 vote-area">
                    <div class="cast-vote">
                        <h1>Welcome to Digital Voting System</h1>
                    </div>
                    <hr class="hidden-sm hidden-lg hidden-md" /><br><br><br><br><br><br>



                    
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-6 generate-background">
                                <form method="POST" action="../Controller/VoterController.php" >

                                    <div class="form-group">
                                        <i class="far fa-calendar-alt"></i>
                                        <label>Enter Your voter id</label>
                                        <input type="text" name="id" autocomplete="off" placeholder="Enter Your Voter ID" class="form-control"><br>
                                        <input type="submit" name="generateId" value="Submit" class="btn btn-primary" />
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    

                    <div class="admin-footer">
                        <marquee behavior="alternate" scrollamount=8>
                            <h1>Digital Voting System</h1>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>


    </body>

    </html>