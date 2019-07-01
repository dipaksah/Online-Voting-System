<?php
include('../Controller/VoterController.php'); 
if(empty($_SESSION['ID']))
{
    header('location:../View/admin_login.php');
    die();
}
?>

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
                                                      <td>'.$data['password'].'</td>'
                                                      
                                                    
                                                     
                                                      
                                                    
                                   ?>
                                    <td>
                                        <a class="btn btn-danger" href="ManageVoter.php?voterDeleteId=<?php echo $data['voter_id'];?>" onclick="return confirm('Are you sure you want to delete this data?');"> Delete</a>
                                    </td>

                                    <td>
                                        <a class="btn btn-success" href="ManageVoter.php?updateVoterId=<?php echo $data['voter_id']; ?>">Edit</a>

                                    </td>
                                    <?php
                                            
                                            
                                            echo '</tr>';
                                                  
                                        }
                                        ?>


                                </table>


                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <?php
            
            $updatevoter=new voter_Controller();
           
            if(isset($_GET['updateVoterId'])){
                $voterIDS=$_GET['updateVoterId'];
                $res=$updatevoter->getVoterById($voterIDS);
            }              
            
            
                $updvoter=new voter_Controller();
                $result=$updvoter->updateVoter($voterIDS);
                
                if($result>0){
                echo "updated";
            }else{
                echo "not updated";
            } 
            
            ?>



            <div class="containe-fluid jumbotron jumbotron-fluid">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form method="POST" action="ManageVoter.php">

                            <div class="form-group voter-register">
                                <i class="fas fa-user-tie icon"></i>
                                <input type="text" id="fname" class="input-field" placeholder="Enter First Name" id="fname" name="f_name" value="<?php echo $res['first_name']; ?>" class="form-control">
                            </div>

                            <div class="form-group voter-register">
                                <i class="fas fa-user icon"></i>
                                <input type="text" class="input-field" id="lname" placeholder="Enter Last Name" name="l_name" value="<?php echo $res['last_name']; ?>" class="form-control">
                            </div>
                            
                            <div class="form-group voter-register">
                                <i class="fas fa-map-marker-alt icon"></i>
                                <input type="text" class="input-field" id="ad" placeholder="Enter Your Address" name="address" value="<?php echo $res['address']; ?>" class="form-control">
                            </div>


                            <div class="form-group voter-register">
                                <i class="far fa-calendar-alt icon"></i>
                                <a class="DB">DOB</a><input type="date" id="DOB" class="input-field" name="dob" value="<?php echo $res['dob']; ?>" class="form-control">
                            </div>
                           

                            <div class="form-group voter-register">
                                <i class="fas fa-male icon"></i>
                                <a class="DB">Gender</a>
                                
                                <input class="input-field" id="gen" class="form-control" type="radio" value="Male"              <?php if($res['gender']=='Male'){ echo 'checked';} ?> name="gender"> Male<br>
                                
                                <input class="input-field" class="form-control" id="gen" type="radio" value="Female"                  <?php if($res['gender']=='Female'){ echo 'checked';} ?> name="gender"> Female<br>
                                
                                <input class="input-field" class="form-control" id="gen" type="radio" value="Others"                  <?php if($res['gender']=='Others'){ echo 'checked';} ?> name="gender"> Other
                            </div>
                           

                            <div class="form-group voter-register">
                                <i class="fas fa-list-ol icon"></i>
                                <input type="text" class="input-field" id="number" placeholder="Enter Your Citizenship number" name="cnumber" value="<?php echo $res['citizenship_number']; ?>" class="form-control">
                            </div>
                            

                            <div class="form-group voter-register">
                                <i class="fas fa-envelope icon"></i>
                                <input type="email" class="input-field" id="emails" placeholder="Enter Your Email" name="email" value="<?php echo $res['email']; ?>" class="form-control">
                            </div>
                           

                            <div class="form-group voter-register">
                                <i class="fas fa-key icon"></i>
                                <input type="password" class="input-field" id="psw" placeholder="Enter Your Password" name="password" value="<?php echo $res['password']; ?>" class="form-control" />
                            </div>
                            
                            <div class="register-btn">
                                <input type="submit" name="btnUpdate" id="submit" value="Update" class="btn btn-outline-light btn-lg bg-primary">
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