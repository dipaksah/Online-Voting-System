
<?php 
include('../Controller/Candidate_Controller.php');

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
                                      <td>'.$data['password'].'</td>

                                      <td><a class="btn btn-success" data-target="#Cupdate" data-toggle="modal" role="button">Update</a></td>


                                     <td>'
                                  ?>
                                      <a class="btn btn-danger" href="ManageCandidate.php?candidateID=<?php echo $data['id'];?>" onclick="return confirm('Are you sure you want to delete this data?');" > Delete</a>
                                       
                                      
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
//     if(isset)
//     $upd=new Candidate_Controller();
//     $upd->updateCandi();
     
?>



<?php
    
if(isset($_GET['candidate']))
{
$id=$_GET['candidate'];
$candiall=new Candidate_Controller();
$data=$candiall->getcandiUP($id);
}

?>


<?php

$candiall=new Candidate_Controller();
$row=$candiall->getcandiUP();

while($data=mysqli_fetch_Array($row)){
        $fname=$data['first_name'];
        $lname=$data['last_name'];
//                        $address=
//                        $phone=
//                        $dob=
//                        $gender=
//                        $email=
//                        $ctzenno=
//                        $pass=

}

//                echo "<pre>";
//                print_r($data);
//                echo "</pre>";
//                exit;

?>

</div>

<div class="container-fluid">
    <div class="row">
       <div class="col-md-2"></div>
        <div class="col-md-8">
         <form method="POST" action="../Controller/Candidate_Controller.php">

        <div class="form-group candidate-register">
            <i class="fas fa-user-tie icon"></i><input type="text" id="fname" class="input-field" placeholder="Enter First Name" name="f_name" value="<?php echo $data['first_name']; ?>" class="form-control">
        </div>
        <span id="first-name" class="text-danger"></span>

        <div class="form-group candidate-register">
            <i class="fas fa-user icon"></i>
            <input type="text" class="input-field" id="la-name" placeholder="Enter Last Name" name="l_name" value="<?php echo $data['last_name']; ?>" class="form-control">
        </div>
        <span id="last-name" class="text-danger"></span>

        <div class="form-group candidate-register">
            <i class="fas fa-map-marker-alt icon"></i>
            <input type="text" class="input-field" id="ad" placeholder="Enetr Your Address" name="address" value="" class="form-control">
        </div>
        <span id="addr" class="text-danger"></span>

        <div class="form-group candidate-register">
            <i class="fas fa-map-marker-alt icon"></i>
            <input type="number" class="input-field" id="pnumber" placeholder="Enetr Your Phone Number" name="phone_No" value="phoneNumber" class="form-control">
        </div>
        <span id="phone_no" class="text-danger"></span>

        <div class="form-group candidate-register">
            <i class="far fa-calendar-alt icon"></i>
            <a class="DB">DOB</a>
            <input type="date" class="input-field" id="DOB" name="dob" class="form-control">
        </div>
        <span id="dob" class="text-danger"></span>

        <div class="form-group candidate-register">
            <i class="fas fa-male icon"></i>
            <a class="DB">Gender</a>
            <input type="radio" id="gens" value="Male" name="gender" class="form-control" class="input-field" >Male<br>
            <input type="radio" id="gens" name="gender" value="Female" class="input-field" class="form-control" >Female<br>
            <input type="radio" id="gens" name="gender" class="input-field" class="form-control" value="Others" >Other
        </div>
        <span id="g" class="text-danger"></span>


        <div class="form-group candidate-register">
            <i class="fas fa-envelope icon"></i>
            <input type="email" placeholder="Enter Your Email" id="mail" class="input-field" value="" name="email" class="form-control">
        </div>
        <span id="email" class="text-danger"></span>

        <div class="form-group candidate-register">
            <i class="fas fa-list-ol icon"></i>
            <input type="number" class="input-field" id="number" placeholder="Enter Your Citizenship number" name="cnumber" value="" class="form-control">
        </div>
        <span id="cnumber" class="text-danger"></span>

        <div class="form-group candidate-register">
            <i class="fas fa-key icon"></i>
            <input type="password" placeholder="Enter Your Password" id="psw" class="input-field" name="password" value="" class="form-control">
        </div>
        <span id="pass" class="text-danger"></span>

        <div class="form-group candidate-register">
            <i class="fas fa-key icon"></i>
            <input type="password" id="cpassword" placeholder="Re-Enter Password" value="" name="cpassword" class="input-field" class="form-control">
        </div>
        <span id="cpass" class="text-danger"></span>

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