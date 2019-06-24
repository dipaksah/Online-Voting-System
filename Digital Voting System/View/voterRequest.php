<!DOCTYPYE html>
    <html lang="en">

    <head>
        <title>Voter Request</title>
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
                        <h1>Voter Request</h1>
                    </div>
                    <a href="admin-panel.php" class="btn btn-primary" text-align="center">Go To Dashboard</a><br>
                    <hr class="hidden-sm hidden-lg hidden-md" />

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 candidate_profile_div">

                                <?php
                                include('../Model/Voting_DBConnection.php');
                                global $conn;
                                  $query = "SELECT * FROM tbl_voter_register";
                                  $execQuery=mysqli_query($conn,$query);
                                  
                                    echo '<table font-weight="bold" class="table table-dark table-hover table-responsive" border="4"  cellspacing="4" cellpadding="4"> 
                                          <tr> 
                                              <td class="dt-responsove"> <font face="Arial">Voter ID</font> </td> 
                                              <td> <font face="Arial">First Name</font> </td> 
                                              <td> <font face="Arial">Last Name</font> </td> 
                                              <td> <font face="Arial">Address</font> </td>
                                              <td> <font face="Arial">DOB</font> </td>
                                              <td> <font face="Arial">Gender</font> </td>
                                              <td> <font face="Arial">Citizenship Number</font> </td> 
                                              <td> <font face="Arial">Email</font> </td> 
                                              <td> <font face="Arial">Password</font> </td> 
                                              <td> <font face="Arial">Give VoterID</font> </td> 
                                          </tr>';
                                
                                        while ($row = mysqli_fetch_Array($execQuery))
                                        {
                                             $data['voter_id'] = $row['voter_id'];
                                             $data['f_name'] = $row['first_name'];  
                                             $data['l_name']=$row['last_name'];
                                             $data['address']=$row['address'];
                                             $data['dob']=$row['dob'];
                                             $data['gender']=$row['gender'];
                                             $data['cnumber']=$row['citizenship_number'];
                                             $data['email']=$row['email'];
                                             $data['password']=$row['password'];
                                            

                                            echo '<tr> 
                                                      <td>'.$data['voter_id'].'</td> 
                                                      <td>'.$data['f_name'].'</td> 
                                                      <td>'.$data['l_name'].'</td> 
                                                      <td>'.$data['address'].'</td>
                                                      <td>'.$data['dob'].'</td>
                                                      <td>'.$data['gender'].'</td> 
                                                      <td>'.$data['cnumber'].'</td> 
                                                      <td>'.$data['email'].'</td> 
                                                      <td>'.$data['password'].'</td>
                                                      
                                                      <td>                 
                                                             <a class="btn btn-success" data-toggle="modal" data-target="#voterID" href="#" role="button">Give VoterID</a>
                                                         
                                                      </td>
                                                      
                                                      
                                                  </tr>';
                                        }
                                    
                                    ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        
        
        <div class="modal fade" id="voterID">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h3 class="modal-title pass-text"> Give Voter ID</h3>
                     <button type="button" class="close" data-dismiss='modal'>&times;</button>
                 </div>
                 <div class="body">
                     <form method="POST" action="">
                         <div class="form-group passReset">
                             <i class="fas fa-envelope icon"></i>
                             <input type="number" name="id" value="ID" class="input-field" class="form-control" placeholder="Enter Voter ID" />
                         </div>
                         <div class="register-btn">
                             <button type="submit" name="btn-ID" class="btn btn-outline-light btn-lg bg-primary">Submit</button>
                         </div>
                         <div class="register-btn" class="modal-footer">
                             <button type="button" class="btn btn-outline-light btn-lg btn-danger" data-dismiss="modal">Cancel</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>

    </body>

    </html>