<?php

include ('../Model/Model_Request.php');
include('../Model/Voting_DBConnection.php');


$reque=new Request_Controller();
$reque->request_form();

class Request_Controller
{
    public function request_form()
    {
        if(isset($_POST['SendRequest']))
        {
            $data=array();
            $data['f_name']=$_POST['f_name'];
            $data['l_name']=$_POST['l_name'];
            $data['address']=$_POST['address'];
            $data['country']=$_POST['place'];
            $data['phone_no']=$_POST['phone_no'];
            $data['dob']=$_POST['dob'];
            $data['gender']=$_POST['gender'];
            $data['email']=$_POST['email'];
            $data['cnumber']=$_POST['cnumber'];
            $target="../View/candidate-photo/".basename($_FILES['photo']['name']);
            $data['photo']=$_FILES['photo']['name'];
            
            if(move_uploaded_file($_FILES['photo']['tmp_name'],$target))
			 {
				echo "success";
			 }

            $request=new Model_Request();
            $request->insertQuery($data);
            
            //print_r($request);

            if($request)
            {
                echo '<pre>';
                print_r($request);
                echo '</pre>';
                
                echo "successfully inserted";
            }else{
                echo "failed to insert";
            }
        }
    }
}


?>