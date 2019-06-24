<?php

 include('../Model/Voting_DBConnection.php');
 include('../Model/Model_Newsletter.php');


 $newsletter=new Newsletter_Controller();
 $newsletter->newsletter();

 class Newsletter_Controller
 {
 	
 	public function newsletter() 
 	{
 		if(isset($_POST['subscribe']))
 		{
 			$data=array();
 			$data['f_name']=$_POST['f_name'];
 			$data['l_name']=$_POST['l_name'];
 			$data['email']=$_POST['email'];
 			$data['message']=$_POST['message'];

 			$news=new Model_Newsletter();
 			$news->Insert_newsletter($data);

 			if ($news) {
 				echo "successfully subscribe";
 			}else
 			{
 				echo "subscribe invalid";
 			}
 		}
 	}
 }

?>