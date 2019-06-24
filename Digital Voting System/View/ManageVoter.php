<?php include('../Controller/VoterController.php'); ?>

<!DOCTYPYE html>
    <html lang="en">

    <head>
        <title>Manage Voter</title>
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
    
    <?php
        
    
    ?>


        <?php
        if(isset($_GET['voterDeleteId'])){
            $voterId=$_GET['voterDeleteId'];
            $voter=new Voter_Controller();
            $res=$voter->deleteVoter($voterId);
            if($res){
               ?>
              <!--Location-->
               <?php
            }else{
                echo"Not Deleted";
            }
        }
        ?>
        
        
        <?php
        
        if(isset($_GET['voterUPD']))
        {
            $voterid=$_GET['voterUPD'];
            $updatevoter=new voter_Controller();
            $updatevoter->updateVoter($voterid);
            if($updatevoter>0){
                echo "updated";
            }else{
                echo "not updated";
            }
        }
        
        ?>


        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 voterRequest">
                    <div class="voter-heading">
                        <h1>Manage Voter</h1>
                    </div>
                    <a href="admin-panel.php" class="btn btn-primary" text-align="center">Go To Dashboard</a><br>
                    <hr class="hidden-sm hidden-lg hidden-md" />

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 candidate_profile_div">

                                <table font-weight="bold" class="table table-dark table-hover table-responsive" border="4" cellspacing="4" cellpadding="4">
                                    <tr>
                                        <td class="dt-responsove">
                                            <font face="Arial">Voter ID</font>
                                        </td>
                                        <td>
                                            <font face="Arial">First Name</font>
                                        </td>
                                        <td>
                                            <font face="Arial">Last Name</font>
                                        </td>
                                        <td>
                                            <font face="Arial">Address</font>
                                        </td>
                                        <td>
                                            <font face="Arial">DOB</font>
                                        </td>
                                        <td>
                                            <font face="Arial">Gender</font>
                                        </td>
                                        <td>
                                            <font face="Arial">Citizenship Number</font>
                                        </td>
                                        <td>
                                            <font face="Arial">Email</font>
                                        </td>
                                        <td>
                                            <font face="Arial">Password</font>
                                        </td>
                                        <td>
                                            <font face="Arial">Delete</font>
                                        </td>
                                        <td>
                                            <font face="Arial">Update</font>
                                        </td>
                                    </tr>

                                    
                                       <?php
                                        $controller=new Voter_Controller();
                                        $getVoter=$controller->GetVoter();
                                        

                                        while ($data = mysqli_fetch_Array($getVoter))
                                        {                                           
                                            
                                            echo '<tr> 
                                                      <td>'.$data['voter_id'].'</td> 
                                                      <td>'.$data['first_name'].'</td> 
                                                      <td>'.$data['last_name'].'</td> 
                                                      <td>'.$data['address'].'</td>
                                                      <td>'.$data['dob'].'</td>
                                                      <td>'.$data['gender'].'</td> 
                                                      <td>'.$data['citizenship_number'].'</td> 
                                                      <td>'.$data['email'].'</td> 
                                                      <td>'.$data['password'].'</td>
                                                      
                                                    
                                                     
                                                      
                                                    <td>'
                                    ?>
                                                      <a class="btn btn-danger" href="ManageVoter.php?voterDeleteId=<?php echo $data['voter_id'];?>" onclick="return confirm('Are you sure you want to delete this data?');" > Delete</a>
                                                     </td> 
                                                     
                                                      <td>
                                                       <a class="btn btn-success" data-target="#update-vote" data-toggle="modal" href="=ManageVoter.php?voterUPD=<?php echo $data['voter_id']; ?>" >Update</a>
                                                    
                                                    <?php
                                                    echo '</td>                
                                                  </tr>';
                                        }
                                    ?>
                                </table>
                                    
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        
                   
        <?php
             $voter=new Voter_Controller();
             $row=$voter->voterBYID();
        ?>
                   
                   
     <div class="modal fade" id="update-vote">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h3 class="modal-title">Voter Sign Up</h3>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                 </div>
                 <div class="modal-body">
                     <form method="POST" action="../Controller/VoterController.php" onsubmit="return validation()">

                         <div class="form-group voter-register">
                             <i class="fas fa-user-tie icon"></i>
                             <input type="text" id="fname" class="input-field" placeholder="Enter First Name" id="fname" name="f_name" value="<?php echo $row['first_name']; ?>" class="form-control">
                         </div>

                         <div class="form-group voter-register">
                             <i class="fas fa-user icon"></i>
                             <input type="text" class="input-field" id="lname" placeholder="Enter Last Name" name="l_name" value="" class="form-control">
                         </div>
                         <span id="last-name" class="text-danger"></span>

                         <div class="form-group voter-register">
                             <i class="fas fa-map-marker-alt icon"></i>
                             <input type="text" class="input-field" id="ad" placeholder="Enter Your Address" name="address" value="" class="form-control">
                         </div><span id="addr" class="text-danger"></span>


                         <div class="form-group voter-register">
                             <i class="far fa-calendar-alt icon"></i>
                             <a class="DB">DOB</a><input type="date" id="DOB" class="input-field" name="dob" value="" class="form-control">
                         </div>
                         <span id="dob" class="text-danger"></span>

                         <div class="form-group voter-register">
                             <i class="fas fa-male icon"></i>
                             <a class="DB">Gender</a>
                             <input class="input-field" id="gen" class="form-control" type="radio" value="Male" name="gender"> Male<br>
                             <input class="input-field" class="form-control" id="gen" type="radio" value="Female" name="gender"> Female<br>
                             <input class="input-field" class="form-control" id="gen" type="radio" value="Other" name="gender"> Other
                         </div>
                         <span id="gender" class="text-danger"></span>

                         <div class="form-group voter-register">
                             <i class="fas fa-list-ol icon"></i>
                             <input type="number" class="input-field" id="number" placeholder="Enter Your Citizenship number" name="cnumber" value="" class="form-control">
                         </div>
                         <span id="cnumber" class="text-danger"></span>

                         <div class="form-group voter-register">
                             <i class="fas fa-envelope icon"></i>
                             <input type="email" class="input-field" id="emails" placeholder="Enter Your Email" name="email" value="" class="form-control">
                         </div>
                         <span id="email" class="text-danger"></span>

                         <div class="form-group voter-register">
                             <i class="fas fa-key icon"></i>
                             <input type="password" class="input-field" id="psw" placeholder="Enter Your Password" name="password" value="" class="form-control" />
                         </div>
                         <span id="pass" class="text-danger"></span>

                         <div class="form-group voter-register">
                             <i class="fas fa-key icon"></i>
                             <input type="password" class="input-field" id="cpasword" placeholder="Re-Type Password" name="cpassword" value="" class="form-control">
                         </div>
                         <span id="cpass" class="text-danger"></span>

                         <div class="register-btn">
                             <input type="submit" name="button-VoterRegister" id="submit" value="Register" class="btn btn-outline-light btn-lg bg-primary" onClick="_setAge();">
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
