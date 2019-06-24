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
                        <li class="nav-item active"><a class="nav-link" href="#home">
                        <i class="fas fa-home"></i>Home</a></li>

                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>

                        <li class="nav-item"><a class="nav-link" href="blog.php">Blogs</a></li>

                        <li class="nav-item"><a class="nav-link" href="instruction.php">Help</a></li>

                        <li class="nav-item"><a class="nav-link" href="admin_login.php">Admin Login</a></li>

                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li> 

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

       <!--- Image Slider --->
       <div class="container-fluid">
       	<div class="row">
       		<div class="col-md-12">
   <div id="Slider" class="carousel slide" data-ride="carousel">
   	 <ul class="carousel-indicators">
   	 	<li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
   	 </ul>

   	 <div class="carousel-inner slider-image-control">
   	 	<div class="carousel-item active">
   	 		<img src="image/v6.jpg" height="600" width="100%" alt="Digital voting">
   	 		
   	 		<div class="carousel-caption">
   	 			<marquee scrollamount=10 behavior="alternate"><img src="image/flag.gif" alt="nepal flag"><h1>मतदान गरौ असल मानिस को परिचय दिउ !!</h1></marquee>

   	 			<a href="voter-login.php"><button type="button" class="btn btn-outline-light btn-lg bg-primary"> VOTERS LOGIN</button></a>
   	 			<h1 class="display-2">Digital Voting System</h1>
   	 			<h3>Your Vote is Your Voice</h3>
                <a href="instruction.php"><button type="button" class="btn btn-outline-light btn-lg bg-primary">VIEW DEMO</button></a>
   	 			<a href="candidate_Login.php"><button type="button" class="btn btn-outline-light btn-lg bg-primary">CANDIDATE LOGIN</button></a>
   	 		</div>
   	 	</div>

   	 	<div class="carousel-item">
   	 		<img src="image/v7.jpg" height="600" width="100%" alt="Digital Voting">
   	 		<div class="carousel-caption">
   	 		<h1 class="display-2">Digital Voting System</h1>
   	 		<h3>Your Vote is Your Voice</h3>
   	 	</div>
   	 	</div>

   	 	<div class="carousel-item">
   	 		<img src="image/v3.jpg" height="600" width="100%" alt="Digital Voting">
   	 		<div class="carousel-caption">
   	 		<h1 class="display-2">Digital Voting System</h1>
   	 		<h3>Your Vote is Your Voice</h3>
   	 	</div>
   	 	</div>

   	 </div>
   	 </div>
   	</div>

   	<!-- Left and right controls -->
  <a class="carousel-control-prev" href="#Slider" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#Slider" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
   <!---End Image Slider----> 

<div class="container-fluid text-center">
   <div class="jumbotron jumbotron-fluid">
    <h1>Voting System Services</h1>
    <p>Your Vote is Your Voice</p>
     <hr class="hidden-sm hidden-md hidden-lg">
    <div class="row">
      
      <div class="col-sm-4 pont-img">
        <img src="image/election.png" alt="digital elections">
        <h3>Digital Elections</h3>
        <p>Send your voters an email with secure, single-use voting links that ensure only authorized voters can vote, once.</p>
      </div>
      

    <div class="col-sm-4 pont-img">
      <img src="image/poll.png" alt="digital poll">
       <h3>Digital Vote</h3>
       <p>Create a personalized poll that anyone can vote on, and publicize it using your website, email, or social media.</p>
    </div>
   

    <div class="col-sm-4 pont-img">
      <img src="image/count.png" alt="automated ballot count">
       <h3>Automated Ballot Counts</h3>
       <p>Count ranked ballots that you've already collected (using e.g., paper ballots or your own vote collection software).</p>
    </div>
   
    </div>
</div>
</div>


  <div class="container intro-font">
  <div class="row">

    <div class="col-sm-4">
      <h2>Online Voting System</h2>
     <hr class="hidden-sm hidden-md hidden-lg">
      <div class="intro-system card"><p><b>Online voting</b> is a popular voting mechanism used in organisational elections, ballots, polls and referendums, and to submit a proxy vote for an AGM, due to its security, speed, simplicity and cost-effectiveness. Online voting is also extremely versatile and so can be used with other voting services such as postal ballots, SMS text voting, telephone voting</p>

      	<p>We believe we have the most modern and secure online voting system on the market and, unlike other online voting systems ours can support elements of your brand identity to help aid member engagement with your brand or organisation. Our online voting system offers many benefits for clients and their members.</p>
      	<a href="about.php">Read More about online voting system</a>
      </div>
   
      <h3>Connect with Us</h3>
       <hr class="hidden-sm hidden-md hidden-lg">
      <div class="middle">
        <ul>
        <li><a class="btn-social"  href="https://www.facebook.com">
         <i class="fab fa-facebook-f"></i>
        </a></li>

        <li><a class="btn-social"  href="https://www.google.com">
          <i class="fab fa-google"></i>
        </a></li>

        <li><a class="btn-social"  href="https://www.twitter.com">
          <i class="fab fa-twitter"></i>
        </a></li>

        <li><a class="btn-social" href="instagram">
          <i class="fab fa-instagram"></i>
        </a></li>

        </ul>
      </div>
      <hr class="hidden-sm hidden-md hidden-lg">
    </div>

    <div class="col-sm-8 intro-font">
      <h2>Introduction to Digital Voting System</h2>
      <h5>Description, june 3, 2019</h5>
      <div class="intro-system"><img src="image/v5.jpg"></div></br>
      <p>Internet is increasingly becoming an important medium for dissemination of information and conducting business. Enabling transactions through Internet thus becomes essential as a means to provide better flexibility and convenience to share holders and further increasing efficiency of decision making in the capital market. Safety of transactions is however, a very crucial issue in Internet based solutions. This assumes significance in case of electronic voting since it involves votes from share holders. Further, electronic voting is also time critical.The lapse or failure to deliver the vote in time for voting to the scrutinizer may lead to loss of vote. Hence, an Internet application for electronic voting necessarily demands an elaborate and robust infrastructure that ensures efficient execution, secured processing and guaranteed delivery of transactions.</p>
      <br>

      <h2>VOTE</h2>
      <h5>securly and safely</h5>
      <div class="intro-system intro-font"><img src="image/votes.jpg"></div>
      <p> <h3>Voting systems:</h3>Voting is a method by which
          groups of people make decisions. These decisions could
          be political, social or public. Voting can also be used to
          choose between difficult plans of actions or to decide who is best eligible to be awarded a prize. Voting can thus bedefined as a process that allows a group of individuals to choose between a number of options. Most voting systems are based on the concept of majority rule or plurality. For example, in an election, a candidate with a plurality receives more votes than any other candidate, but does not necessarily receive the majority of the total votes cast.</p>
    </div>
  </div>
</div></br>
  <!---------------------->



<!-----Classes---->
   <div class="container quote">
    <h2 text-align="center">About</h2>
     <div class="row">
	    <div class="col-md-4 ">
		<!----bootstrap card---->
		   <div class="quote">
			   <div class=" box box1">
			      <h2>Instruction</h2>
				    <p>At first voters can registered their account then login, after this process generate a voter id by simply clicking the generate button and then put into the input fied and then access the all information and profile and also give a vote to the specific candidate, only one vote give to the only one candidate. Candidate also at first registeres their account and then login after this candidate request for a candidate to the admin and admin decide to making candidate or not. voters and candidate also see the voting results after end of the voting date...
					</p>

					<a href="instruction.php" class="btn btn-primary">Read More</a>
			   </div>
			   <div class="bg"></div>
		   </div>
		</div>
		<div class="col-md-4 ">
		    <div class="quote">
			   <div class=" box box2">
			      <h2 class="card-title">E-Voting</h2>
				    <p class="card-text">Electronic voting is voting that uses electronic means to either aid or take care of casting and counting votes. Depending on the particular implementation, e-voting may use standalone electronic voting machines or computers connected to the Internet. It may encompass a range of Internet services, from basic transmission of tabulated results to full-function online voting through common connectable household devices. The degree of automation may be limited to marking a paper ballot, or may be a...
					</p>
					<a href="about.php" class="btn btn-primary">Read More</a>
			   </div>
			   <div class="bg"></div>
		   </div>
		</div>
		<div class="col-md-4 ">
		     <div class="quote">
			   <div class=" box box3">
			      <h2 class="card-title">Security</h2>
				    <p class="card-text">Foreign  experience  [9]  revealed  that  they  are  often   confronted   by   security   issues   while   the   electronic voting system is running. The origin of the security issues happened was due to not only outsider (such  as  voters  and  attackers)  but  also  insider  (such  as  system  developers  and  administrators),  even  just  because the inheritance of some objects in the source code  are  unsuitable.  These  errors  caused  the  voting  system crashed....  
					</p>
					<a href="security.php" class="btn btn-primary">Read More</a>
			   </div>
			   <div class="bg"></div>
		   </div>
		</div>
	</div>
	 </div>
</div>
<!----end classes---------->


     <!-- ***** Contact Us Area Start ***** -->
        </br></br></br><div class="container jumbotron">
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
                        <p><span>Phone:</span> ABC</p>
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
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" onClick="clearform();" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your E-mail" onClick="clearform();" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Your Message *" onClick="clearform();" required></textarea>
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
    <!-- ***** Contact Us Area End ***** -->



    <div class="container-fluid text-center">
   <div class="jumbotron jumbotron-fluid">
    <h1>Secure and Truthful</h1>
     <hr class="hidden-sm hidden-md hidden-lg">
    <div class="row">
      
      <div class="col-sm-4 pont-img">
        <img src="image/locked.png" alt="secure">
        <h3>Secure</h3>
        <p>Our voting pages are encrypted so your voters can enjoy complete security and privacy while voting. See our 
          <a href="https://blog.opavote.com/2017/12/opavote-security-practices.html">blog post on security</a>
        <span>for more details.</span>
      </p>
      </div>
      

    <div class="col-sm-4 pont-img">
      <img src="image/private.png" alt="Anonymous">
       <h3>Anonymous</h3>
       <p>We offer the strongest possible guarantee of voter anonymity: we simply do not track who votes for what; only who votes, and 
       <span>what the vote is.</span>
       </p>
    </div>
   

    <div class="col-sm-4 pont-img">
      <img src="image/shake-hands.png" alt="private">
       <h3>private</h3>
       <p>We do not use or share your voters' email addresses for any purposes outside of your election. See our 
       <a href="https://www.opavote.com/privacy">privacy policy</a>
       <span>for more details.</span>
       </p>
    </div>
   

    </div>
</div>
</div>

<!-----newsletter-------->
    
  <div class="container">
   <div id="subscribe-form" class="alert alert-dismissible hidden-xs small">
    <button type="button" class="close" data-dismiss='modal'>&times;</button>
       
     <div><h5>Digital Voting System Newsletter</h5></div>
    <div class="row">

     <div class="col-xs-8 col">
       <p>Stay up to date with new features, blog posts, and special offers.</p>
   </div>

     <div class="col-xs-4 col">
      <button href="#Subscribe" data-toggle="modal" data-target="#Subscribe" class="btn btn-default btn btn-outline-light btn-lg btn btn-info ">Subscribe</button>
    </div>

   </div>
   </div>
   </div>

            <div class="modal fade" id="Subscribe">
                <div class="modal-dialog">
                  <div class="modal-content">

                  <div class="modal-header">
                    <h3 class="modal-title pass-text">Stay Up To Date</h3>
                     <hr class="hidden-sm hidden-md hidden-lg"> 
                    <button type="button" class="close" data-dismiss='modal'>&times;</button>
                  </div>

                  <div class="body">
                    <form action="../Controller/NewsletterController.php" method="POST">
                            <div class="container">
                                <div class="row">
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                      <div class="form-group Subscribe">
                                        <i class="fas fa-user-tie icon"></i><input type="text" class="input-field" placeholder="Enter First Name" name="f_name" value="" class="form-control" >
                                      </div>
                                    </div>

                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group Subscribe">
                                          <i class="fas fa-user icon"></i>
                                          <input type="text" class="input-field" placeholder="Enter Last Name" name="l_name" value="" class="form-control">
                                        </div>
                                    </div>

                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                         <div class="form-group Subscribe">
                                            <i class="fas fa-envelope icon"></i>
                                            <input type="email" class="input-field" placeholder="Enter Your Email" name="email" value="" class="form-control">
                                         </div>
                                    </div>


                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" cols="30" rows="4" placeholder="Your Message *" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <div class="Subscribe-btn">
                                           <button type="submit" name="subscribe" class="btn btn-outline-light btn-lg bg-primary">Subscribe Now</button>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </form>
                    </div>

            
                    </form>
                  </div>
                </div>
              </div>
            </div>
<!------------------end--newsletter------->
        

        <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix">

    	<a href="#" class="btn-top to_top" style="display: block;">
    		Top 
    	<i class="fa fa-chevron-up" aria-hidden="true"></i></a>
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
    
    <!----cookiees---->
    <div id="cookieconsent_container">
            <div class="container cookie">
                <div class="row">
                   
                    <div class="col-xs-12 col-sm-8 text-right">
                        This website uses cookies to ensure you get the best experience on our website.
                         <a href="http://cookiesandyou.com/" class="lnk-learn">Learn More</a>
                    </div>
                    
                    <div class="col-xs-12 col-sm-4">
                        <a href="index.php" id="allow_cookies" data-consent="1" data-url="index.php" class="btn-allow">AGREE</a>
                    </div>
                </div>
            </div>
        </div>
    <!-----end cookies------>
    
    <script>
    	$(window).scroll(function(){
					if ($(this).scrollTop() > 100) {
						$('.to_top').fadeIn();
					} else {
						$('.to_top').fadeOut();
					}
				});
				//Click event to scroll to top

				$('.to_top').click(function(){
					$('html, body').animate({scrollTop : 0},800);
					return false;
				});
        
    </script>
    

  </body>
</html>