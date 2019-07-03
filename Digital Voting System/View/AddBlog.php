
<?php
include'../Controller/AdminController.php';
include('../Controller/blog_controller.php');

if(empty($_SESSION['ID']))
{
    header('location:../View/admin_login.php');
    die();
}
?>


<!DOCTYPYE html>
<html lang="en">
  <head>
    <title>Digital Voting System</title>
    <meta charset="utf-8">

    <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/css/style.css"/>
    <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/js/bootstrap.bundle"/>
    <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/js/bootstrap.js.map"/>
      
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
      
      if(isset($_GET['BlogID']))
         {
              $delBlog=new blog_controller();
              $delBlog->blogDelete($_GET['BlogID']);
         }
      
      ?>
        

        <div class="container-fluid content">
          <div class="row">

                <div class="col-md-2">
                  <div class="sidebar">
                    <div class="admin-image">
                      <img src="image/user1.png" alt="admin-image">
                       <p>Admin panel</p>
                       <hr class="hidden-sm hidden-md hidden-lg"/>
                    </div>
                      <a href="admin-panel.php"><i class="fa fa-fw fa-home"></i>Home</a>
                        <a href="addblog.php"><i class="fas fa-plus"></i> Add Blogs</a>
                        <a href="ManageCandidate.php"><i class="fa fa-fw fa-wrench"></i>Manage Candidate</a>
                        <a href="ManageVoter.php"><i class="fa fa-fw fa-wrench"></i> Manage Voters</a>
                        <a href="candidateRequest.php"><i class="fa fa-fw fa-wrench"></i>View Candidate request</a>
                        <a href="voterRequest.php"><i class="fa fa-fw fa-wrench"></i>View Voter request</a>
                        <a href="AdminSystem.php"><i class="fa fa-fw fa-home"></i>Voting System</a>
                        <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Log out</a>
                </div>
               </div>

             <div class="col-md-10 blog-area">
              <div class="admin-panel"><br><h1>Admin DashBoard</h1></div>
              <hr class="hidden-sm hidden-lg hidden-md"/>
         
    <!--------add blog --by admin-------->
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 blog-background">
              <form method="POST" action="../Controller/blog_controller.php" enctype="multipart/form-data">
                
                <div class="form-group form-label">
                  <i class="fas fa-heading"></i>
                  <label>Title</label>
                  <input type="text" name="title" class="form-control">
                </div>
          
                <div class="form-group">
                   <i class="fas fa-camera"></i>
                   <label>image</label>
                   <input type="file" name="images" class="form-control">
                </div>
          
                <div class="form-group">
                  <i class="far fa-file-alt"></i>
                  <label>Content</label>
                    <textarea name="content" class="form-control" cols="30" rows="4" placeholder="Content *" required></textarea>
                </div>

                <div class="form-group">
                  <i class="far fa-calendar-alt"></i>
                 <label>Date</label>
                 <input type="date" name="date" class="form-control">
               </div>
          
               <p><input type="submit" name="blog-submit" value="Submit" class="btn btn-primary"/></p>

              </form>
            </div>

            <div class="col-md-6 blog-background"><img src="image/blog1.jpg"></div>

          </div>
        </div>
             <div class="admin-footer"><marquee behavior="alternate" scrollamount=8><h1>Digital Voting System</h1></marquee></div>
             
          <br><br><br><br><br><br>
      
       <!---------display blog---->
                              
        <?php

        $Blog=new blog_controller();
        $result=$Blog->displayBlog();

           while($blogcontent=mysqli_fetch_assoc($result))
            {?>
               <div class="container adbolg card blogss jumbotron">
                 <div class="row">
<!--                       <div class="col-md-4"></div>-->
                        <div class="col-md-4 blogheading">
                             <h2> <?php echo $blogcontent['title']; ?></h2>
                             <h5> <?php echo $blogcontent['date']; ?> </h5>
                             <hr class="hidden-sm hidden-md hidden-lg">
                             <?php echo "
                             <div class='blog-content'>
                             <img class='img-blog' src='uploaded-image/".$blogcontent['image']."' alt='blogcontent'>
                             </div>"?>
                        </div>

                        <div class="col-md-8 blog-con jumbotron">
                           <a href="AddBlog.php?BlogID=<?php echo $blogcontent['id']; ?>" onclick="return confirm('Are you sure you want to delete this data?');" >Delete Blog</a><br><br>
                            <p style="text-align:jusity;">
                            <?php echo $blogcontent['content']; ?>
                            </p>
                        </div>
                   </div>    
                </div>

                <?php
            }
            ?>
            <br>
            <br>
      </div>
        </div>
      </div>
      



</body>
</html>
