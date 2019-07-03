<?php
session_start();
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
           

            $request=new Model_request();
            $res=$request->insertQuery($data);
            
            if($res>0)
            {   
                move_uploaded_file($_FILES['photo']['tmp_name'],$target);
                $_SESSION['success']= "successfully inserted";
                header('location:../View/request.php');
            }else{
                 $_SESSION['warning']= "failed to insert";
                 header('location:../View/request.php');
            }
        }
    }
    
    
    
    public function getcandidateRequest()
    {
        $re=new Model_request();
        $crequest=$re->getallcandidates();
        
        return $crequest;
        
    }
    
    
}

//$req=new  Request_Controller();
//$req->getcandidateRequest();


?>