
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
                <div class="col-md-12 voterRequest">
                    <div class="voter-heading">
                        <h1>Candidate Request</h1>
                    </div>
                    <hr class="hidden-sm hidden-lg hidden-md" />

                    <div class="container-fluid">
                        <div class="row">    
                            <div class="col-md-12 candidate_profile_div">

                                <?php
                                include('../Model/Voting_DBConnection.php');
                                global $conn;
                                  $query = "SELECT * FROM tbl_candidate_register";
                                  $execQuery=mysqli_query($conn,$query);
                                  
                                    echo '<table width="100%" font-weight="bold" class="table table-dark table-hover table-responsive" border="4"  cellspacing="0" cellpadding="1"> 
                                          <tr> 
                                              <td> <font face="Arial">ID</font> </td> 
                                              <td> <font face="Arial">First Name</font> </td> 
                                              <td> <font face="Arial">Last Name</font> </td> 
                                              <td> <font face="Arial">Address</font> </td> 
                                              <td> <font face="Arial">Phone_no</font> </td> 
                                              <td> <font face="Arial">dob</font> </td> 
                                              <td> <font face="Arial">Gender</font> </td>
                                              <td> <font face="Arial">Email</font> </td> 
                                               <td> <font face="Arial">Citizenship Number</font> </td> 
                                              <td> <font face="Arial">Password</font> </td> 
                                          </tr>';
                                
                                        while ($row = mysqli_fetch_Array($execQuery))
                                        {
                                             $data['id'] = $row['id'];  
                                             $data['f_name'] = $row['first_name'];  
                                             $data['l_name']=$row['last_name'];
                                             $data['address']=$row['address'];
                                             $data['Phone_no']=$row['phone_No'];
                                             $data['dob']=$row['dob'];
                                             $data['gender']=$row['gender'];
                                             $data['email']=$row['email'];
                                             $data['cnumber']=$row['citizenship_number'];
                                             $data['password']=$row['password'];
                                            

                                            echo '<tr> 
                                                      <td>'.$data['id'].'</td> 
                                                      <td>'.$data['f_name'].'</td> 
                                                      <td>'.$data['l_name'].'</td> 
                                                      <td>'.$data['address'].'</td> 
                                                      <td>'.$data['Phone_no'].'</td> 
                                                      <td>'.$data['dob'].'</td> 
                                                      <td>'.$data['gender'].'</td> 
                                                      <td>'.$data['email'].'</td> 
                                                      <td>'.$data['cnumber'].'</td>
                                                      <td>'.$data['password'].'</td>
                                                  </tr>';
                                        }
                                    
                                    ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </body>

    </html>