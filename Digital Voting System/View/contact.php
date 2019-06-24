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

    <!-- ***** Navigation Bar ***** -->
      <nav class="navbar navbar-expand-xl navbar-light bg-light sticky-top" id="topbar" >
               <!-- Logo -->
                <div class="container-fluid">
                <a class="navbar-brand logo"><img src="image/logo.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon" data-target="#navbarResponsive"></span></button>
                <!-- Menu Area -->
                   <div class="collapse navbar-collapse" id="ca-navbar">

                      <ul class="navbar-nav ml-auto" id="nav">
                        <li class="nav-item active"><a class="nav-link" href="index.php">
                        <i class="fas fa-home"></i>Home</a></li>

                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>

                        <li class="nav-item"><a class="nav-link" href="blog.php">Blogs</a></li>

                        <li class="nav-item"><a class="nav-link" href="instruction.php">Help</a></li>

                        <li class="nav-item"><a class="nav-link" href="admin_login.php">Admin Login</a></li>

                        <li class="nav-item active"><a class="nav-link" href="contact.php">Contact Us</a></li> 

                        <li class="nav-item search-box">
                        	<input class="search-txt" type="text" placeholder="Type To Search.."/>
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
      <div class="col-md-12 contact-image">
      <img src="image/contacts.jpg">
        <div class="text-block">
            <h1>Contact</h1>
           <h1>Digital Voting System</h1>
           <h2>Contact with us safely</h2>
        </div>
      </div>
    </div>
    </div>
    

    <div class="container-fluid text-center">
       <div class="jumbotron jumbotron-fluid">
          <h1>Contact Us</h1>
          <p>Your Vote is Your Voice</p>
          <p><h4>Our online voting systems let you upgrade from manually counting ballots without sacrificing the integrity of your vote.</h4></p>
       </div>
    </div>
    <!-- ***** Contact Us Area Start ***** -->
        <div class="container jumbotron">
            <div class="row">
                <div class="col-md-6">
                  <section class="footer-contact-area section_padding_100 clearfix" id="contact">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Get in touch with us!</h2>
                        <div class="line-shape"></div>
                    </div>
                    <div class="footer-text">
                        <p>We'll send you epic weekly blogs, whitepapers and things to make your app startup thrive, all FREE!</p>
                    </div>
                    <div class="address-text">
                        <p><span>Address:</span> KATHMANDU,NEPAL</p>
                    </div>
                    <div class="phone-text">
                        <p><span>Phone:</span>ABC</p>
                    </div>
                    <div class="email-text">
                        <p><span>Email:</span> digitalvoting@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Form Start-->
                    <div class="contact_from">
                        <form action="../Controller/Contact_Controller.php" method="POST">
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div class="row">
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your E-mail" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Your Message *" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <div class="button3D"><a><button type="submit" name="Send" class="btn btn-outline-light btn-lg bg-primary">Send Now</button></a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                    </div>
                     </section>
                </div>
            </div>
        </div>
    <!-- ***** Contact Us Area End ***** -->>

     

     <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix">
        <!-- footer logo -->
        <div class="footer-text">
            <h2>Digital Voting System</h2>
        </div>
        <hr class="hidden-sm hidden-md hidden-lg">
        <!-- social icon-->
        <div class="footer-social-icon">
            <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
            <a href="https://www.google.com"><i class="fab fa-google"></i></a>
        </div>
        <div class="footer-menu">
            <nav>
                    <a href="about.php">About</a>
                    <a href="#">Terms &amp; Conditions</a>
                    <a href="#">Privacy Policy</a>
                    <a href="contact.php">Contact</a>
            </nav>
        </div>
        <!-- Foooter Text-->
        <div class="copyright-text">
            <p>Copyright ©2019 System Designed by Dipak Shah</p>
        </div>
    </footer>
    <!-- ***** Footer Area Start ***** -->


  </body>
  </html>