
    <?php

    include'../Controller/party_Controller.php';
    include'../Controller/addCandidate_Controller.php';
    include'../Controller/VoterController.php';

    if(empty($_SESSION['Id']))
   {
       header('location:voter-login.php');
       die();    
   }
    
     $nam=new party_controller();
     $partyName=$nam->partyOnly();

//     echo "<pre>";
//     print_r($partyName);
//     echo "</pre>";
     $options="";
     while($row=mysqli_fetch_assoc($partyName))
     {
          $options = $options.'<option>'.$row['party_name'].'</option>';
     }

   ?>
   
   

   
   <!DOCTYPYE html>
    <html lang="en">

    <head>
        <title>Vote</title>
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




        <!DOCTYPYE html>
            <html lang="en">

            <head>
                <title>Voting System</title>
                <meta charset="utf-8">

                <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/css/style.css" />
                <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap.css" />
                <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/js/bootstrap.bundle" />
                <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/js/bootstrap.js.map" />

                <!-- fontawesome icon -->
                <link type="text/css" rel="stylesheet" href="fontawesome-free-5.8.1-web\css\all.css">

                   <script src="bootstrap-4.3.1/js/bootstrap.min.js"></script>
                    <script src="bootstrap-4.3.1/js/bootstrap.js" ></script>
                    <script src="jquery/jquery.min.js"></script>


                    <link type="text/css" rel="stylesheet" href="jquery/jquery.js" />
                    <link type="text/css" rel="stylesheet" href="jquery/jquery.min.js" />
               
               
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
                
                if(isset($_GET['CandiID']))
                {
                    $newID=$_GET['CandiID'];
                   $CID=new Candi_Controller();
                   $CID->getCandiBYId($newID);
                    
                }
                
                ?>
               
               
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 profile_body">
                            <div class="voter-dash">
                                <h1>Voting System</h1>
                            </div>
                            <hr class="hidden-sm hidden-lg hidden-md" />


                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-1"> </div>
                                    <div class="col-md-10">
                                        <div class="admin-system">
                                            <nav>
                                                <a href="vote.php">Vote</a>
                                                <a href="#fghj">Results</a>
                                                <a href="logout.php">LOGOUT</a>
                                            </nav>

                                            
                                      <div class="container">
                                       
                                         <div class="row">
                                             <div class="col-md-2"></div>
                                          <div class="col-md-10 party_table"> <br><br><br>
                                             <p style="margin-left:300px;margin-top:-40px;">Total vote: <input type="text" name="totprice" id="totvote" value="0" style="height:30px;width:70px;"></input></p>
                                       <table style="width:100%;" font-weight="bold" class="table table-hover table-responsive"  cellspacing="0" cellpadding="0"><br><br><br>
                                       <thead class="table table-dark"  cellspacing="6" colspan="6">
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
                                            <font face="Arial"> Your Vote </font>
                                        </td>
                                      
                                    </tr>
                                      </thead>
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
                                                     <td>
                                                    
                                                     <a href="vote.php?candidateID=<?php  echo $data['id']; ?>" name="voteBy" onclick="vote()" id="vote" class="voters btn btn-sucess">Vote</a>
                                                     </td>                   
                                                             
                                                <?php
                                                
                                                
                                               
                                                    echo '</td>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    </tr>';
                                        }
                                    ?>
                                      
                                          <script>
       
                                               function vote(){
                                                   var y=document.getElementsByClassName("voters");
                                                   for(var i=0; i<=y.length; i++){
                                                       y[i].disabled=true;
                                                   }
                                                   
                                                   
                                                   <?php
                                                      
                                                   ?>
                                                   
                                                   
                                               }

                                           </script>
                                      
                                      
<!--
                                                     <script>
                                                       var count = 0;
                                                         var vote=document.getElementById("totvote");
                                                       $(".voters").click(function( event ) {
                                                       count++
                                                     vote.value=count;
                                                     event.stopImmediatePropagation();
                                                      });
                                                     </script>
-->
                                                     
                                                     
                                                     
                                </table><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                    
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