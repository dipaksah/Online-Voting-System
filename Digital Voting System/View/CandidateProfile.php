<?php

   //session_start();
  include('../Controller/Candidate_Controller.php');

?>
   

   <!DOCTYPYE html>
    <html lang="en">

    <head>
        <title>Candidate Profile</title>
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
                            <p>Candidate DashBoard</p>
                            <hr class="hidden-sm hidden-md hidden-lg" />
                        </div>
                        <a href="candidate-dashboard.php"><i class="fa fa-fw fa-home"></i>Home</a>
                        <a href="CandidateProfile.php"><i class="fas fa-plus"></i></i>View Profile</a>
                        <a href="candidateUpdate.php"><i class="fa fa-fw fa-wrench"></i>Update profile</a>
                        <a href="candidateDelete.php"><i class="fa fa-fw fa-wrench"></i>Delete profile</a>
                        <a href="request.php"><i class="fa fa-fw fa-wrench"></i>Send Request for participation</a>
                        <a href="result.php"><i class="fas fa-search"></i>View Results</a>
                        <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Log out</a>
                    </div>
                </div>
                
                
                <?php
            
                  $id=$_SESSION['Id'];
                  $edit=new Candidate_Controller();
                  $data=$edit->Edit($id);
                 
            
//            echo "<pre>";
//            print_r($data);
//            echo "</pre>";
//            exit;
                      
                ?>

                <div class="col-md-10 profile_body">
                    <div class="voter-dash">
                        <h1>Candidate Profile</h1>
                    </div>
                    <hr class="hidden-sm hidden-lg hidden-md" />

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 candidate_profile_div">
                                <form method="POST" action="">

                                    <div class="form-group candidate-register">
                                        <i class="fas fa-user-tie icon"></i><input type="text" class="input-field" placeholder="Enter First Name" name="f_name" value="<?php echo $data['first_name']; ?>" class="form-control" required>
                                    </div>

                                    <div class="form-group candidate-register">
                                        <i class="fas fa-user icon"></i>
                                        <input type="text" class="input-field" placeholder="Enter Last Name" name="l_name" value="<?php echo $data['last_name']; ?>" class="form-control" required>
                                    </div>

                                    <div class="form-group candidate-register">
                                        <i class="fas fa-map-marker-alt icon"></i>
                                        <input type="text" class="input-field" placeholder="Enetr Your Address" name="address" value="<?php echo $data['address']; ?>" class="form-control" required>
                                    </div>

                                    <div class="form-group candidate-register">
                                        <i class="fas fa-map-marker-alt icon"></i>
                                        <input type="number" class="input-field" placeholder="Enetr Your Phone Number" name="phone_No" value="<?php echo $data['phone_No']; ?>" class="form-control" required>
                                    </div>

                                    <div class="form-group candidate-register">
                                        <i class="far fa-calendar-alt icon"></i>
                                        <a class="DB">DOB</a>
                                        <input type="date" class="input-field" name="dob" value="<?php echo $data['dob']; ?>" class="form-control" required>
                                    </div>

                                    <div class="form-group candidate-register gender-style">
                                        <i class="fas fa-male icon"></i>
                                        <a class="DB">Gender</a><input type="radio" name="gender" value="<?php echo $data['gender']; ?>" class="form-control" class="input-field" checked>Male<br>
                                        <input type="radio" value="<?php echo $data['gender']; ?>" name="gender" class="input-field" class="form-control" checked>Female<br>
                                        <input type="radio" name="gender" value="<?php echo $data['gender']; ?>" class="input-field" class="form-control" checked>Other
                                    </div>

                                    <div class="form-group candidate-register">
                                        <i class="fas fa-envelope icon"></i>
                                        <input type="email" placeholder="Enter Your Email" class="input-field" value="<?php echo $data['email']; ?>" name="email" class="form-control" required>
                                    </div>

                                    <div class="form-group candidate-register">
                                        <i class="fas fa-list-ol icon"></i>
                                        <input type="number" class="input-field" placeholder="Enter Your Citizenship number" name="cnumber" value="<?php echo $data['citizenship_number']; ?>" class="form-control" required>
                                    </div>

                                    <div class="form-group candidate-register">
                                        <i class="fas fa-key icon"></i>
                                        <input type="password" placeholder="Enter Your Password" class="input-field" name="password" value="<?php echo $data['password']; ?>" class="form-control" required>
                                    </div>


                                    <div class="register-btn">
                                        <a href="logout.php"><button type="button" class="btn btn-outline-light btn-lg btn-danger" data-dismiss="modal">Cancel</button></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

    </body>

    </html>