
<?php
include_once'../Controller/party_Controller.php';
include'../Controller/AdminController.php';

if(empty($_SESSION['ID']))
{
    header('location:../View/admin_login.php');
    die();
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
         
        if(isset($_GET['partyID']))
        {
            $party=$_GET['partyID'];
            $del=new party_controller();
            $delete=$del->delparty($party);
            
            if($delete>0){
                echo "";
            }else{
                echo "not delete";
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
                                    <form method="POST" action="../Controller/party_Controller.php" enctype="multipart/form-data">
                                      
                                       <div class="form-group voter-register">
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<lable>Party Name:</lable>  &nbsp;&nbsp;
                                         <input type="text" class="input-field" id="ad" placeholder="Enter Party Name" name="pname" value="" class="form-control">
                                     </div>
                                     
                                     <div class="form-group custom-file photoCa">
                                          <input type="file" name="image" value="image"  class="custom-file-input" id="customFileLang" lang="pl-Pl">
                                          <label class="custom-file-label" for="customFileLang">Party symbol</label>
                                    </div><br><br>
                                     
                                     <div class="candiadd-btn">
                                            <button type="submit" name="addparty" class="btn btn-outline-light btn-lg btn-success" data-dismiss="modal">Add</button>
                                        </div>
                                     
                                     
                                    </form>
                                     <hr class="hidden-sm hidden-lg hidden-md">
                                </div>
                            </div>
                        </div>
                                      
                                      <div class="container">
                                         <div class="row">
                                             <div class="col-md-2"></div>
                                          <div class="col-md-10 party_table"> 
                                       <table style="width:100%;" font-weight="bold" class="table table-hover table-responsive"  cellspacing="6" cellpadding="5">
                                    <tr>
                                        <td>
                                            <font face="Arial">ID</font>
                                        </td>
                                        <td>
                                            <font face="Arial">Party Name</font>
                                        </td>
                                        <td>
                                            <font face="Arial">Party Symbol</font>
                                        </td>
                                        <td>
                                            <font face="Arial"> Delete Party</font>
                                        </td>
                                      
                                    </tr>

                                    <?php
                                       $parts=new party_controller();
                                       $party=$parts->getparties();  
                                           
                                        while ($data = mysqli_fetch_Array($party))
                                        {        
                                            echo '<tr> 
                                                      <td>'.$data['id'].'</td> 
                                                      <td>'.$data['party_name'].'</td> 
                                  
                                                      <td><img src="../View/party_symbol/'.$data['party_symbol'].'" height="100px" width="100px" ></td>
                                                      
                                                      
                                                     <td>'
                                                  ?>
                                                      <a class="btn btn-danger" href="AddParty.php?partyID=<?php echo $data['id'];?>" onclick="return confirm('Are you sure you want to delete this data?');" > Delete</a>
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
                   </div>
                   <div class="admin-footer"><marquee behavior="alternate" scrollamount=8><h1>Digital Voting System</h1></marquee></div>
            </div>
        </div>
        </div>

    </body>

    </html>