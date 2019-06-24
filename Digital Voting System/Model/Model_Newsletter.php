<?php

  include('Voting_DBConnection.php');

  class Model_Newsletter
  {

  	public $f_name;
  	public $l_name;
  	public $email;
  	Public $message;
  	
  	public function Insert_newsletter($data)
  	{
  		global $conn;

  	    $newsletter_query='insert into tbl_newsletter
                            set
                            first_name="'.$data['f_name'].'",
                            last_name="'.$data['l_name'].'",
                            email="'.$data['email'].'",
                            message="'.$data['message'].'"
                            ';

           $query=mysqli_query($conn, $newsletter_query);
  	}
  }

?>