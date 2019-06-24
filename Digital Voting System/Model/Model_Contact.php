<?php
include('Voting_DBConnection.php');

class Model_Contact
{
	public $name;
	public $email;
	public $message;
	
	public function Insert_Contact($data)
	{
		global $conn;

		$contact_query= 'insert into tbl_contact
		         set
                 name="'.$data['name'].'",
                 email="'.$data['email'].'",
                 message="'.$data['message'].'"
		         ';

          $query=mysqli_query($conn,$contact_query);
         
	}
}

?>