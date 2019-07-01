<?php
include'../Controller/VoterController.php';
if(empty($_SESSION['ID']))
{
    header('location:../View/admin_login.php');
    die();
}
?>

   

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
                    <?php include'../View/notification.php'; ?>
                    <a href="admin-panel.php" class="btn btn-primary" text-align="center">Go To Dashboard</a><br>
                    <hr class="hidden-sm hidden-lg hidden-md" />

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 candidate_profile_div">

                                
                                  
                                    <table font-weight="bold" class="table table-dark table-hover table-responsive" border="4"  cellspacing="4" cellpadding="4"> 
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
                                          </tr>
                                          
                                    <?php
                                        
                                    $controller=new Voter_Controller();
                                    $getVoter=$controller->GetVoter();
                                
                                        while ($row = mysqli_fetch_Array($getVoter))
                                        {
                                            echo '<tr> 
                                                      <td>'.$row['voter_id'].'</td> 
                                                      <td>'.$row['first_name'].'</td> 
                                                      <td>'.$row['last_name'].'</td> 
                                                      <td>'.$row['address'].'</td>
                                                      <td>'.$row['dob'].'</td>
                                                      <td>'.$row['gender'].'</td> 
                                                      <td>'.$row['citizenship_number'].'</td> 
                                                      <td>'.$row['email'].'</td> 
                                                      <td>'.$row['password'].'</td>'
                                                  ?>     
                                                      <td>                 
                                                      <a class="btn btn-success" href="voterRequest.php?VoterId=<?php echo $row['voter_id']; ?>"   >Give VoterID</a>
                                                      
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
            $updatevoter=new voter_Controller();
            if(isset($_GET['VoterId']))
            {
                $_SESSION['id']=$_GET['VoterId'];
                $res=$updatevoter->getVoterById($_GET['VoterId']);
            }                      
     ?>
      
  
        
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6">
                
                     <form method="POST" action="../Controller/VoterController.php" onsubmit="return Validation()">
                        
                        <input type="text" name="id" value="<?php echo $res['voter_id']; ?>" class="input-field" class="form-control" placeholder="Enter Voter ID" disabled/>
                        
                         <div class="form-group passReset">
                             <i class="fas fa-envelope icon"></i>
                             <input type="text" name="Vid" id="vnumber" value="" class="input-field" class="form-control" placeholder="Enter Voter ID" />
                         </div>
                         <span id="num" class="text-danger" ></span>
                         
                         
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
       
     
     <script type="text/javascript">
     function Validation() {
         
         var id = document.getElementById('vnumber').value;
         
         if (id == '') {
             document.getElementById('num').innerHTML = "** Enter voter ID";
             return false;
         } else if (isNaN(id)) {
             document.getElementById('num').innerHTML = "** Only digits are allowed";
             return false;
         } else if (id.length != 11) {
             document.getElementById('num').innerHTML = "**Voter Number must be 11 digits";
             return false;
         } else if (id != '') {
             document.getElementById('num').innerHTML = "";
         }


     }
 </script>
     
     
     

    </body>

    </html>