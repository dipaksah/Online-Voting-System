
   <?php
    include_once'../Controller/party_Controller.php';
    include_once'../Controller/addCandidate_Controller.php';
    include'../Controller/AdminController.php';

    if(empty($_SESSION['ID']))
    {
        header('location:../View/admin_login.php');
        die();
    }
        
     $nam=new party_controller();
     $partyName=$nam->partyOnly();


     $options="";
     while($row=mysqli_fetch_assoc($partyName))
     {
          $options = $options.'<option>'.$row['party_name'].'</option>';
     }

   ?>

   
   <!DOCTYPYE html>
    <html lang="en">

    <head>
        <title>Admin System</title>
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
        
          if(isset($_GET['delCandiID']))
          {
              $delCandi=new Candi_Controller();
              $res=$delCandi->deleteCandi($_GET['delCandiID']);
              
              if($res>0){
                  $_SESSION['success']="sucessfully Deleted";
                  header('location:AddCandidate.php');
              }else{
                  $_SESSION['warning']="failed to delete";
                   header('location:AddCandidate.php');
              }
          }
    
          ?>

          
           
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 profile_body">
                    <div class="voter-dash">
                        <h1>Admin System</h1>
                    </div>
                    <hr class="hidden-sm hidden-lg hidden-md" />
                   

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-1"> </div>
                            <div class="col-md-10">
                                <div class="admin-system">
                                <nav>
                                    <a href="admin-panel.php">Home</a>
                                    <a href="AddCandidate.php">Add Cadidate</a>
                                    <a href="AddParty.php">Add Party</a>
                                    <a href="#fghj">Results</a>
                                    <a href="logout.php">LOGOUT</a>
                                </nav>
                                
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2"> </div>
                            <div class="col-md-8">
                                <div class="candidateadd-form">                           
                                    <form method="POST" action="../Controller/addCandidate_Controller.php" enctype="multipart/form-data">
                                       <fieldset>
                                        <legend class="hm-legend">Add Candidate:</legend>
                                        <hr class="hidden-sm hidden-lg hidden-md">  
                                                                          
                                        <div class="form-group">
                                          <i class="fas fa-user-tie"></i>
                                          <lable>Candidate Name:</lable>
                                          <input type="text" name="cname" class="input-field" value=""/>   
                                        </div>
                                        
                                        <div class="form-group">
                                        <i class="fas fa-user-tie"></i>
                                        <lable>Party Name:</lable>
                                           <select style{width:100%;}  name="party">
                                               <?php echo $options;?>
                                           </select>
                                        </div>
                                        
                                         <div class="form-group custom-file photoCa">
                                          <input type="file" name="image" value="image"  class="custom-file-input" id="customFileLang" lang="pl-Pl">
                                          <label class="custom-file-label" for="customFileLang">Party symbol</label>
                                           </div><br><br>
                                           
                                           <div class="form-group custom-file photoCa">
                                          <input type="file" name="cimage" value="image"  class="custom-file-input" id="customFileLang" lang="pl-Pl">
                                          <label class="custom-file-label" for="customFileLang">Candidate photo</label>
                                           </div><br><br>

                                        <div class="candiadd-btn">
                                            <button type="submit" name="candidateadd" class="btn btn-outline-light btn-lg btn-success" data-dismiss="modal">Add</button>
                                        </div>
                                        
                                        </fieldset>
                                    </form>
                                     <hr class="hidden-sm hidden-lg hidden-md">
            
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                               
                               
                               
                               
                                 <div class="container">
                                         <div class="row">
                                         <div class="col-md-2"></div>
                                          <div class="col-md-10"> 
                                       <table style="width:100%;" font-weight="bold" class="table table-hover table-responsive text-center"  cellspacing="6" cellpadding="5">
                                    <tr>
                                        <td>
                                            <font face="Arial">ID</font>
                                        </td>
                                        <td>
                                            <font face="Arial">Candidate Name</font>
                                        </td>
                                        <td>
                                            <font face="Arial">Party Name</font>
                                        </td>
                                          <td>
                                            <font face="Arial">Party Symbol</font>
                                        </td>
                                        <td>
                                            <font face="Arial"> candidate Photo</font>
                                        </td>
                                        <td>
                                            <font face="Arial"> Delete Party</font>
                                        </td>
                                      
                                    </tr>

                                    <?php
                                       $allcan=new candi_Controller();
                                       $res=$allcan->getallcandidates(); 
                                           
                                        while ($data = mysqli_fetch_Array($res))
                                        {        
                                            echo '<tr> 
                                                      <td>'.$data['id'].'</td> 
                                                      <td>'.$data['candidate_name'].'</td> 
                                                      <td>'.$data['party_name'].'</td>
                                                      
                                                       <td><img src="../View/candidate-photo/'.$data['photo'].'" height="100px" width="100px" ></td>
                                                       
                                                        <td><img src="../View/party_symbol/'.$data['party_sign'].'" height="100px" width="100px" ></td>
                                                     
                                                    
                                                     <td>'
                                                  ?>
                                                      <a class="btn btn-danger" href="AddCandidate.php?delCandiID=<?php echo $data['id'];?>" onclick="return confirm('Are you sure you want to delete this data?');" > Delete</a>
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
                        </div>
                   </div>
                   <div class="admin-footer"><marquee behavior="alternate" scrollamount=8><h1>Digital Voting System</h1></marquee></div>
            </div>
        </div>
        </div>

    </body>

    </html>