
<?php

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
        
        if(isset($_GET['adminID']))
        {
            $newAdminID=$_GET['adminID'];
            $del=new adminController();
            $deleteAdmin=$del->deleteAdmin($newAdminID);
            
            if($deleteAdmin>0){
                $message = "Sucessfully Deleted";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }else{
                $message = "Failed to Delete";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }
        
        
        ?>
        
        

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 profile_body">
                    <div class="voter-dash">
                        <h1>Admin Manage</h1>
                    </div>
                    <hr class="hidden-sm hidden-lg hidden-md" />


                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-1"> </div>
                            <div class="col-md-10">
                                <div class="admin-system">
                                    <nav>
                                        <a href="admin-panel.php">Home</a>
                                        <a href="ManageAdmin.php">Manage Administrators</a>
                                        <a href="AddCandidate.php">Add Cadidate</a>
                                        <a href="AddParty.php">Add Party</a>
                                        <a href="#fghj">Results</a>
                                        <a href="logout.php">LOGOUT</a>
                                    </nav><br><br>

                                    <h1>Administrators Management</h1>
                                    <hr class="hidden-sm hidden-lg hidden-md">

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <form method="POST" action="../Controller/AdminController.php" name="voterForm">
                                                    <div class="form-group voter-register">
                                                        <i class="fas fa-user-tie icon"></i><input type="text" class="input-field" placeholder="Enter First Name" id="name" name="f_name" value="" class="form-control" required>
                                                    </div>
                                                    <div class="form-group voter-register">
                                                        <i class="fas fa-user icon"></i>
                                                        <input type="text" class="input-field" placeholder="Enter Last Name" name="l_name" value="" class="form-control" required>
                                                    </div>
                                                    <div class="form-group voter-register">
                                                        <i class="fas fa-envelope icon"></i>
                                                        <input type="email" class="input-field" placeholder="Enter Your Email" name="email" value="" class="form-control">
                                                    </div>

                                                    <div class="form-group voter-register">
                                                        <i class="fas fa-key icon"></i>
                                                        <input type="password" class="input-field" placeholder="Password" name="password" value="" class="form-control" required>
                                                    </div>

                                                    <div class="form-group voter-register">
                                                        <i class="fas fa-key icon"></i>
                                                        <input type="password" class="input-field" placeholder="Re-type Password" name="cpassword" value="" class="form-control" required>
                                                    </div>

                                                    <div class="register-btn">
                                                        <input type="submit" name="manageadmin" id="submit" value="Register" class="btn btn-outline-light btn-lg bg-primary">
                                                    </div>

                                                    <div class="register-btn" class="modal-footer">
                                                        <a href="AdminSystem.php"><button type="button" class="btn btn-outline-light btn-lg btn-danger" data-dismiss="modal">Cancel</button></a>
                                                    </div><br>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="hidden-sm hidden-lg hidden-md">


                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-10 party_table">
                                                <table style="width:100%;" font-weight="bold" class="table table-hover table-responsive" cellspacing="6" cellpadding="5">
                                                    <tr>
                                                        <td>
                                                            <font face="Arial">ID</font>
                                                        </td>
                                                        <td>
                                                            <font face="Arial">First Name</font>
                                                        </td>
                                                        <td>
                                                            <font face="Arial">Last name</font>
                                                        </td>
                                                        <td>
                                                            <font face="Arial"> Email</font>
                                                        </td>
                                                         <td>
                                                            <font face="Arial"> Password</font>
                                                        </td>

                                                    </tr>

                                                    <?php
                                       $admi=new adminController();
                                       $res=$admi->allAdmin(); 
                                           
                                        while ($data = mysqli_fetch_Array($res))
                                        {        
                                            echo '<tr> 
                                                      <td>'.$data['admin_id'].'</td> 
                                                      <td>'.$data['first_name'].'</td> 
                                                      <td>'.$data['last_name'].'</td>
                                                      <td>'.$data['email'].'</td>  
                                                      <td>'.$data['password'].'</td>  
                                                     <td>'
                                                  ?>
                                                    <a class="btn btn-danger" href="ManageAdmin.php?adminID=<?php echo $data['admin_id'];?>" onclick="return confirm('Are you sure you want to delete this data?');"> Delete</a>
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
                    <div class="admin-footer">
                        <marquee behavior="alternate" scrollamount=8>
                            <h1>Digital Voting System</h1>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>

    </body>

    </html>