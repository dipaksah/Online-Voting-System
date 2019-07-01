
<?php

include'../Controller/Candidate_Controller.php';

if(empty($_SESSION['Id']))
{
    header('location:candidate_Login.php');
}

?>


<!DOCTYPYE html>
<html lang="en">
  <head>
    <title>Candidate DashBoard</title>
    <meta charset="utf-8">

    <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/css/style.css"/>
    <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/js/bootstrap.bundle"/>
    <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/js/bootstrap.js.map"/>
      
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
                       <p>Candidate DashBoard</p>
                       <hr class="hidden-sm hidden-md hidden-lg"/>
                    </div>
                      <a href="candidate-dashboard.php"><i class="fa fa-fw fa-home"></i>Home</a>
                      <a href="CandidateProfile.php"><i class="fas fa-plus"></i>View Profile</a>
                      <a href="request.php"><i class="fa fa-fw fa-wrench"></i>Send Request for participation</a>
                      <a href="result.php"><i class="fas fa-search"></i>View Results</a>
                      <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Log out</a>
                </div>
               </div>

             <div class="col-md-10 content">
              <div class="voter-dash"><h1>Candidate DashBoard</h1> 
              	<hr class="hidden-sm hidden-lg hidden-md"/>
                <img src="image/maintain.jpg" alt="candidate dashboard">
                 
                  <div class="candidate-block">
			           <h1>Candidate can Manage their profile and send a request to the admin for the participation in election.</h1>
			           <h3>Digital Voting System Candidate DashBoard</h3>
			      </div>
                
                  <h2>Management</h2>
                  <p>In this session candidate can view their profile and manage (update, delete, edit) their profile and view result of voting system.</p>
                  </div>
             </div>
            </div>
          </div>

</body>
</html>
