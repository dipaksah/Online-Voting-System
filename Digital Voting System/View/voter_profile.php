   <?php
    include '../Controller/VoterController.php';

   if(empty($_SESSION['Id']))
   {
       header('location:voter-login.php');
       die();
       
   }
    ?>
   
   <!DOCTYPYE html>
    <html lang="en">

    <head>
        <title>Voter Profile</title>
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
                        
                       <?php/* $url="../Controller/VoterController.php?id=".$_SESSION['Id']."&act=view";*/ ?>
                        <a href="voter_profile.php" id="viewProfile"><i class="fas fa-plus"></i>View Profile</a>
                        <a href="result.php"><i class="fas fa-search"></i>View Results</a>
                        <a href="generate.php"><i class="fa fa-fw fa-wrench"></i>Cast Vote</a>
                        <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Log out</a>
                    </div>
                </div>
                
                <?php
               $id=$_SESSION['Id'];
                $edit=new Voter_Controller();
                $data=$edit->editVoter($id); 
                ?>

                <div class="col-md-10 profile_body">
                    <div class="voter-dash">
                        <h1>Voter Profile</h1>
                    </div>
                    <hr class="hidden-sm hidden-lg hidden-md" />

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 voter_profile_div">
                               
                                <form method="POST" action="" name="voterForm">

                                    <div class="form-group voter-register">
                                        <i class="fas fa-user-tie icon"></i><input type="text" class="input-field" placeholder="Enter First Name" id="name" name="f_name" value="<?php echo $data['first_name']; ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group voter-register">
                                        <i class="fas fa-user icon"></i>
                                        <input type="text" class="input-field" placeholder="Enter Last Name" name="l_name" value="<?php echo $data['last_name']; ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group voter-register">
                                        <i class="fas fa-map-marker-alt icon"></i>
                                        <input type="text" class="input-field" value="<?php echo $data['address']; ?>" placeholder="Enter Your Address" name="address" value="" class="form-control" required>
                                    </div>
                                    <div class="form-group voter-register">
                                        <i class="far fa-calendar-alt icon"></i>
                                        <a class="DB">DOB</a><input type="date" value="<?php echo $data['dob']; ?>" class="input-field" id="date" name="dob" class="form-control" required>
                                    </div>
                                    <div class="form-group voter-register gender-style">
                                        <i class="fas fa-male icon"></i>
                                        <a class="DB">Gender</a><input class="input-field" value"<?php echo $data['gender']; ?>" class="form-control" type="radio" name="gender" checked> Male<br>
                                        <input class="input-field" class="form-control" type="radio" name="gender" value"<?php echo $data['gender']; ?>"> Female<br>
                                        <input class="input-field" class="form-control" type="radio" name="gender" value"<?php echo $data['gender']; ?>"> Other
                                    </div>

                                    <div class="form-group voter-register">
                                        <i class="fas fa-list-ol icon"></i>
                                        <input type="number" class="input-field" value="<?php echo $data['citizenship_number']; ?>" placeholder="Enter Your Citizenship number" name="cnumber" class="form-control" required>
                                    </div>

                                    <div class="form-group voter-register">
                                        <i class="fas fa-envelope icon"></i>
                                        <input type="email" class="input-field" placeholder="Enter Your Email" name="email" value="<?php echo $data['email']; ?>" class="form-control">
                                    </div>

                                    <div class="form-group voter-register">
                                        <i class="fas fa-key icon"></i>
                                        <input type="password" class="input-field" placeholder="" name="password" value="<?php echo $data['password'] ?>" class="form-control" required>
                                    </div>

                                    <div class="register-btn" class="modal-footer">
                                        <a href="logout.php"><button type="button" class="btn btn-outline-light btn-lg btn-danger" data-dismiss="modal">Cancel</button></a>
                                    </div><br><br><br>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </body>

    </html>