<?php

include('../Model/Voting_DBConnection.php');
include('../Model/Model_Contact.php');

$set=new Contact_Controller();
$set->Contact();

class Contact_Controller
{
	public function Contact()
	{
		if(isset($_POST['Send']))
		{

			$data=array();
			$data['name']=$_POST['name'];
			$data['email']=$_POST['email'];
			$data['message']=$_POST['message'];

			$contact=new Model_Contact();
			$contact->Insert_Contact($data);
            //$count=num_rows($con);
	         
	        if($contact)
	        {
	        	echo "successfully inserted";
	        }else
	        {
	        	echo "failed to insert";
	        }

        }
	}
}

?>