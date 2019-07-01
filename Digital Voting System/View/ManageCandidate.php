<?php 
include('../Controller/Candidate_Controller.php');
if(empty($_SESSION['ID']))
{
    header('location:../View/admin_login.php');
    die();
}
?>

?>

<!DOCTYPYE html>
    <html lang="en">

    <head>
        <title>Manage Candidate</title>
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

if(isset($_GET['candidateID'])){

$candiID=$_GET['candidateID'];
$Candi=new Candidate_Controller();
$delID=$Candi->DeleteCandidate($candiID);

if($delID){
       echo " ";
}else{
   echo "not deleted";
}
}
?>



        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 voterRequest">
                    <div class="voter-heading">
                        <h1>Manage Candidate</h1>
                    </div>
                    <a href="admin-panel.php" class="btn btn-primary" text-align="center">Go To Dashboard</a><br>
                    <hr class="hidden-sm hidden-lg hidden-md" />



                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 candidate_profile_div">

                                <table font-weight="bold" class="table table-dark table-hover table-responsive" border="4" cellspacing="0" cellpadding="1">
                                    <tr>
                                        <td>
                                            <font face="Arial">ID</font>
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
                                            <font face="Arial">Phone_no</font>
                                        </td>
                                        <td>
                                            <font face="Arial">dob</font>
                                        </td>
                                        <td>
                                            <font face="Arial">Gender</font>
                                        </td>
                                        <td>
                                            <font face="Arial">Email</font>
                                        </td>
                                        <td>
                                            <font face="Arial">Citizenship Number</font>
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
                          $ca=new Candidate_Controller();
                          $getCandi=$ca->GetCandidate();
                    
                         //print_r($getCandi);

                        while ($data = mysqli_fetch_Array($getCandi))
                        {

                            echo '<tr> 
                                      <td>'.$data['id'].'</td> 
                                      <td>'.$data['first_name'].'</td> 
                                      <td>'.$data['last_name'].'</td> 
                                      <td>'.$data['address'].'</td> 
                                      <td>'.$data['phone_No'].'</td> 
                                      <td>'.$data['dob'].'</td> 
                                      <td>'.$data['gender'].'</td> 
                                      <td>'.$data['email'].'</td> 
                                      <td>'.$data['citizenship_number'].'</td>
                                      <td>'.$data['password'].'</td>'
                                ?>
                                    <td>
                                        <a class="btn btn-danger" href="ManageCandidate.php?candidateID=<?php echo $data['id'];?>" onclick="return confirm('Are you sure you want to delete this data?');"> Delete</a>
                                    </td>

                                    <td>
                                        <a class="btn btn-success" href="ManageCandidate.php?candiID=<?php echo $data['id']; ?>">Edit</a>
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
        </div>



        <?php
        $candidates=new Candidate_Controller();
        if(isset($_GET['candiID']))
        {
            $res=$candidates->getcandiUP($_GET['candiID']);
        }
?>



        <div class="container-fluid jumbotron jumbotron-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form method="POST" action="">

                        <div class="form-group candidate-register">
                            <i class="fas fa-user-tie icon"></i><input type="text" id="fname" class="input-field" placeholder="Enter First Name" name="f_name" value="<?php echo $res['first_name']; ?>" class="form-control">
                        </div>

                        <div class="form-group candidate-register">
                            <i class="fas fa-user icon"></i>
                            <input type="text" class="input-field" id="la-name" placeholder="Enter Last Name" name="l_name" value="<?php echo $res['last_name']; ?>" class="form-control">
                        </div>
                        <span id="last-name" class="text-danger"></span>

                        <div class="form-group candidate-register">
                            <i class="fas fa-map-marker-alt icon"></i>
                            <input type="text" class="input-field" id="ad" placeholder="Enetr Your Address" name="address" value="<?php echo $res['address']; ?>" class="form-control">
                        </div>

                        <div class="form-group candidate-register">
                            <i class="fas fa-map-marker-alt icon"></i>
                            <input type="number" class="input-field" id="pnumber" placeholder="Enetr Your Phone Number" name="phone_No" value="<?php echo $res['phone_No']; ?>" class="form-control">
                        </div>

                        <div class="form-group candidate-register">
                            <i class="far fa-calendar-alt icon"></i>
                            <a class="DB">DOB</a>
                            <input type="date" class="input-field"value="<?php echo $res['dob']; ?>"  id="DOB" name="dob" class="form-control">
                        </div>

                        <div class="form-group candidate-register">
                            <i class="fas fa-male icon"></i>
                            <a class="DB">Gender</a>
                            
                            <input type="radio" id="gens" value="Male"  <?php if($res['gender']=='Male'){ echo 'checked';} ?> name="gender" class="form-control" class="input-field">Male<br>
                            
                            <input type="radio" id="gens" name="gender" value="Female" <?php if($res['gender']=='Female'){ echo 'checked';} ?> class="input-field" class="form-control">Female<br>
                            
                            <input type="radio" id="gens" name="gender" class="input-field" class="form-control" value="Others"  <?php if($res['gender']=='Others'){ echo 'checked';} ?> >Other
                        </div>


                        <div class="form-group candidate-register">
                            <i class="fas fa-envelope icon"></i>
                            <input type="email" placeholder="Enter Your Email" id="mail" class="input-field" value="<?php echo $res['email']; ?>" name="email" class="form-control">
                        </div>

                        <div class="form-group candidate-register">
                            <i class="fas fa-list-ol icon"></i>
                            <input type="text" class="input-field" id="number" placeholder="Enter Your Citizenship number" name="cnumber" value="<?php echo $res['citizenship_number']; ?>" class="form-control">
                        </div>

                        <div class="form-group candidate-register">
                            <i class="fas fa-key icon"></i>
                            <input type="password" placeholder="Enter Your Password" id="psw" class="input-field" name="password" value="<?php echo $res['password']; ?>" class="form-control">
                        </div>

                        <div class="register-btn">
                            <button type="submit" name="CandidateUpdate" class="btn btn-outline-light btn-lg bg-primary">Update</button>
                        </div>

                        <div class="register-btn">
                            <button type="button" class="btn btn-outline-light btn-lg btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </body>

    </html>