<!DOCTYPYE html>
    <html lang="en">

    <head>
        <title>Candidate Request</title>
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

                <div class="col-md-12 request_body">
                    <div class="voter-dash">
                        <h1>Candidate Request</h1>
                    </div>
                    <hr class="hidden-sm hidden-lg hidden-md" />

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 request_profile_div">
                                <form method="POST" action="../Controller/Request_Controller.php" enctype="multipart/form-data">

                                    <div class="form-group candidate-register">
                                        <i class="fas fa-user-tie icon"></i><input type="text" class="input-field" placeholder="Enter First Name" name="f_name" value="" class="form-control" required>
                                    </div>
                                       <div class="form-group candidate-register">
                                        <i class="fas fa-user icon"></i>
                                        <input type="text" class="input-field" placeholder="Enter Last Name" name="l_name" value="" class="form-control" required>
                                    </div>

                                    <div class="form-group candidate-register">
                                        <i class="fas fa-map-marker-alt icon"></i>
                                        <input type="text" class="input-field" placeholder="Enetr Your Address/zone in which you want for election" name="address" value="" class="form-control" required>
                                    </div>
                                    
                                     <div class="form-group candidate-register">
                                        <i class="fas fa-map-marker-alt icon"></i>
                                        <input type="text" class="input-field" name="place" placeholder="Country" value="" class="form-control" required>
                                    </div>

                                    <div class="form-group candidate-register">
                                        <i class="fas fa-map-marker-alt icon"></i>
                                        <input type="number" class="input-field" placeholder="Enter Your Phone Number" name="phone_no" value="" class="form-control" required>
                                    </div>

                                    <div class="form-group candidate-register">
                                        <i class="far fa-calendar-alt icon"></i>
                                        <a class="DB">DOB</a>
                                        <input type="date" class="input-field" name="dob" value="" class="form-control" required>
                                    </div>

                                    <div class="form-group gender-style">
                                        <i class="fas fa-male icon"></i>
                                        <a class="DB">Gender</a><input type="radio" name="gender" value="male" class="form-control" class="input-field" checked>Male</br>
                                        <input type="radio" value="female" name="gender" class="input-field" class="form-control" checked>Female</br>
                                        <input type="radio" name="gender" value="other" class="input-field" class="form-control" checked>Other
                                    </div>

                                    <div class="form-group candidate-register">
                                        <i class="fas fa-envelope icon"></i>
                                        <input type="email" placeholder="Enter Your Email" class="input-field" value="" name="email" class="form-control" required>
                                    </div>
                                    
                                    <div class="form-group candidate-register">
                                        <i class="fas fa-list-ol icon"></i>
                                        <input type="number" class="input-field" placeholder="Enter Your Citizenship number" name="cnumber" value="" class="form-control" required>
                                    </div>
                                    
                                    <div class="input-group candidate-register">
                                      <div class="input-group-prepend">
                                       <i class="fas fa-camera icon"></i>
                                        <span class="input-group-text" id="inputGroupFileAddon01">Your Photo</span>
                                      </div>
                                      <div class="custom-file">
                                        <input type="file" name="photo" class="custom-file-input" id="inputGroupFile01"
                                          aria-describedby="inputGroupFileAddon01" class="input-field" class="form-control">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                      </div>
                                    </div>

                                    <div class="register-btn">
                                        <button type="submit" name="SendRequest" class="btn btn-outline-light btn-lg bg-primary">Send Request</button>
                                    </div>

                                    <div class="register-btn">
                                        <a href="candidate-dashboard.php"><button type="button" class="btn btn-outline-light btn-lg btn-danger" data-dismiss="modal">Cancel</button></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>

    </body>

    </html>