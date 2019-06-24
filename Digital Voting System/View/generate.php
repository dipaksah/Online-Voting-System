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
                                <form>

                                    <div class="form-group">
                                        <i class="far fa-calendar-alt"></i>
                                        <label>Enter Your voter id</label>
                                        <input type="text" name="id" auto-complete="off" placeholder="Enter Your VOter ID" class="form-control"><br>
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




        <div class="modal" id="voterId">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h3 class="modal-title">Voter Id Generater</h3>
                        <button type="submit" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body voterid_generater">

                        <form action="../Controller/Voter_id_generate_controller.php" method="POST">
                            <div class="form-group id_generator_form">
                                <i class="fas fa-list-ol"></i>
                                <label>Enter Your Citizenship Number:</label>
                                <input type="Number" name="cnumber" class="form-control">
                            </div>

                            <div class="form-group id_generator_form">
                                <i class="fas fa-envelope icon"></i>
                                <label>Email:</label>
                                <input type="email" name="email" class="form-control">
                            </div>

                            <div class="Generate-btn">
                                <input type="submit" name="Idgenerate" class="btn btn-outline-light btn-lg bg-primary" value="Generate ID" />
                            </div>


                        </form>

                    </div>

                </div>
            </div>
        </div>



    </body>

    </html>