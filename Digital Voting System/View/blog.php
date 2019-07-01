
<?php

include('../Controller/blog_controller.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Digital Voting System</title>
    <meta charset="utf-8">

    <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/css/style.css" />
    <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap.min.css" />



    <script src="bootstrap-4.3.1/js/bootstrap.min.js" >
    </script>
    <script src="bootstrap-4.3.1/js/bootstrap.js" >
    </script>
    <script src="jquery/jquery.min.js"></script>


    <link type="text/css" rel="stylesheet" href="jquery/jquery.js" />

    <!-- fontawesome icon -->
    <link type="text/css" rel="stylesheet" href="fontawesome-free-5.8.1-web\css\all.css">

    <script src="bootstrap-4.3.1/js/bootstrap.min.js"></script>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</head>

<body>

    <!-- ***** Navigation Bar ***** -->
    <nav class="navbar navbar-expand-xl navbar-light bg-light sticky-top" id="topbar">
        <!-- Logo -->
        <div class="container-fluid">
            <a class="navbar-brand logo"><img src="image/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon" data-target="#navbarResponsive"></span></button>
            <!-- Menu Area -->
            <div class="collapse navbar-collapse" id="ca-navbar">

                <ul class="navbar-nav ml-auto" id="nav">
                    <li><a class="nav-link" href="index.php">
                            <i class="fas fa-home"></i>Home</a></li>

                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>

                    <li class="nav-item active"><a class="nav-link" href="blog.php">Blogs</a></li>

                    <li class="nav-item"><a class="nav-link" href="instruction.php">Help</a></li>

                    <li class="nav-item"><a class="nav-link" href="admin_login.php">Admin Login</a></li>

                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>

                    <li class="nav-item search-box">
                        <input class="search-txt" type="text" placeholder="Type To Search.." />
                        <a class="search-btn" class="nav-link" href="#">
                            <i class="fas fa-search"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ***** navigation end ***** -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 blog-image">
                <img src="image/blog.jpg" alt="blog">
                <div class="blog">
                    <h1>Update frequently news and blogs</h1>
                    <h3>Digital Voting System Blogs</h3>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid text-center">
        <div class="jumbotron jumbotron-fluid">
            <h1>Blogs Digital Voting System</h1>
            <p>Your Vote is Your Voice</p>
            <div class="blog-icon">
                <img src="image/blog-icon.jpg" alt="blog image">
            </div>
                <h4>Our online voting systems let you upgrade from manually counting ballots without sacrificing the integrity of your vote.</h4>
            <h2>instructions</h2>
        </div>
    </div>


    <!---------display blog---->
                              
        <?php

        $Blog=new blog_controller();
        $result=$Blog->displayBlog();

           while($blogcontent=mysqli_fetch_assoc($result))
            {?>
               <div class="container card blogss jumbotron">
                 <div class="row">
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


</body>

</html>