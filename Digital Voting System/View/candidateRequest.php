<?php
include'../Controller/Request_Controller.php';
if(empty($_SESSION['ID']))
{
    header('location:../View/admin_login.php');
    die();
}
?>

   

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
                    <?php include'../View/notification.php'; ?>
                    <a href="admin-panel.php" class="btn btn-primary" text-align="center">Go To Dashboard</a><br>
                    <hr class="hidden-sm hidden-lg hidden-md" />

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 candidate_profile_div">

                                
                                  
                                    <table font-weight="bold" class="table table-dark table-hover table-responsive" border="4"  cellspacing="4" cellpadding="4"> 
                                          <tr> 
                                              <td class="dt-responsove"> <font face="Arial">Candidate ID</font> </td> 
                                              <td> <font face="Arial">First Name</font> </td> 
                                              <td> <font face="Arial">Last Name</font> </td> 
                                              <td> <font face="Arial">Address</font> </td>
                                              <td> <font face="Arial">Country</font> </td>
                                              <td> <font face="Arial">phone Number</font> </td>
                                              <td> <font face="Arial">DOB</font> </td>
                                              <td> <font face="Arial">Gender</font> </td>
                                              <td> <font face="Arial">Email</font> </td> 
                                              <td> <font face="Arial">Citizenship Number</font> </td>
                                              <td> <font face="Arial">photo</font> </td> 
                                              <td> <font face="Arial">Action</font> </td> 
                                          </tr>
                                          
                                    <?php
                                        
                                   $req=new  Request_Controller();
                                   $result=$req->getcandidateRequest();
                                
                                        while ($row = mysqli_fetch_Array($result))
                                        {
                                            echo '<tr> 
                                                      <td>'.$row['id'].'</td> 
                                                      <td>'.$row['first_name'].'</td> 
                                                      <td>'.$row['last_name'].'</td> 
                                                      <td>'.$row['address'].'</td>
                                                      <td>'.$row['country'].'</td>
                                                      <td>'.$row['phone_no'].'</td>
                                                      <td>'.$row['dob'].'</td>
                                                      <td>'.$row['gender'].'</td> 
                                                      <td>'.$row['email'].'</td>
                                                      <td>'.$row['citizenship_number'].'</td>
                                                      
                                                
                                                   <td><img src="../View/candidate-photo/'.$row['photo'].'" height="100px" width="100px" ></td>'
                                                
                                                
                                                  ?>     
                                                      <td>                 
                                                      <a class="btn btn-success" href="voterRequest.php?VoterId=<?php echo $row['voter_id']; ?>"  >Action</a>
                                                      
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
        
     
     

    </body>

    </html>