
   <?php session_start(); ?>

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
                <div class="col-md-12 request_body">
                   <?php include'../View/notification.php'; ?>
                    <div class="voter-dash">
                        <h1>Candidate Request</h1>
                    </div>
                    <hr class="hidden-sm hidden-lg hidden-md" />

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 request_profile_div">
                                <form method="POST" action="../Controller/Request_Controller.php" enctype="multipart/form-data">

                                    <div class="form-group candidate-register">
                                        <i class="fas fa-user-tie icon"></i><input type="text" class="input-field" placeholder="Enter First Name" name="f_name" value="" class="form-control" required>
                                    </div>
                                       <div class="form-group candidate-register">
                                        <i class="fas fa-user icon"></i>
                                        <input type="text" class="input-field" placeholder="Enter Last Name" name="l_name" value="" class="form-control" required>
                                    </div>

                                    <div class="form-group candidate-register">
                                        <i class="fas fa-map-marker-alt icon"></i>
                                        <input type="text" class="input-field" placeholder="Enetr Your Address/zone in which you want for election" name="address" value="" class="form-control" required>
                                    </div>
                                    
                                     <div class="form-group candidate-register">
                                        <i class="fas fa-map-marker-alt icon"></i>
                                        <?php
								$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
								?>
                                        
                                        <select name="place" class="form-control" autocomplete="off" >
                                        <option value selected ></option>
                                        <?php
                                        foreach($countries as $key => $value):
                                        echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
                                        endforeach;
                                        ?>
                                         </select>
                                    </div>                       

                                    <div class="form-group candidate-register">
                                        <i class="fas fa-map-marker-alt icon"></i>
                                        <input type="number" class="input-field" placeholder="Enter Your Phone Number" name="phone_no" value="" class="form-control" required>
                                    </div>

                                    <div class="form-group candidate-register">
                                        <i class="far fa-calendar-alt icon"></i>
                                        <a class="DB">DOB</a>
                                        <input type="date" class="input-field" name="dob" value="" class="form-control" required>
                                    </div>

                                    <div class="form-group gender-style">
                                        <i class="fas fa-male icon"></i>
                                        <a class="DB">Gender</a><input type="radio" name="gender" value="male" class="form-control" class="input-field" checked>Male<br>
                                        <input type="radio" value="female" name="gender" class="input-field" class="form-control" checked>Female<br>
                                        <input type="radio" name="gender" value="other" class="input-field" class="form-control" checked>Other
                                    </div>

                                    <div class="form-group candidate-register">
                                        <i class="fas fa-envelope icon"></i>
                                        <input type="email" placeholder="Enter Your Email" class="input-field" value="" name="email" class="form-control" required>
                                    </div>
                                    
                                    <div class="form-group candidate-register">
                                        <i class="fas fa-list-ol icon"></i>
                                        <input type="number" class="input-field" placeholder="Enter Your Citizenship number" name="cnumber" value="" class="form-control" required>
                                    </div>
                                    
                                    <div class="input-group candidate-register">
                                      <div class="input-group-prepend">
                                       <i class="fas fa-camera icon"></i>
                                        <span class="input-group-text" id="inputGroupFileAddon01">Your Photo</span>
                                      </div>
                                      <div class="custom-file">
                                        <input type="file" name="photo" class="custom-file-input" id="inputGroupFile01"
                                          aria-describedby="inputGroupFileAddon01" class="input-field" class="form-control">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                      </div>
                                    </div>

                                    <div class="register-btn">
                                        <button type="submit" name="SendRequest" class="btn btn-outline-light btn-lg bg-primary">Send Request</button>
                                    </div>

                                    <div class="register-btn">
                                        <a href="candidate-dashboard.php"><button type="button" class="btn btn-outline-light btn-lg btn-danger" data-dismiss="modal">Cancel</button></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        
        
                            
        
        

    </body>

    </html>