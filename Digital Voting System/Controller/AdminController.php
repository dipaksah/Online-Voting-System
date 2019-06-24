<?php

include'../Model/Voting_DBConnection.php';
include'../Model/Model_admin.php';

$admin=new adminController();
$admin->admin_login();


$adm=new adminController();
$adm->admin_reg();

class adminController
{
	
    public function admin_login()
	{

		if(isset($_POST['login']))
		{
            $data=array();
            $data['email']=$_POST['email'];
            $data['password']=$_POST['password'];

		    
            $ad=new Model_admin();
            $admi=$ad->adminLOG($data);
            $count=mysqli_num_rows($admi);
            
            if($count>0){
                header('location:../View/admin-panel.php');
            }else{
                echo "failed";
            }
        }	
	}
    
    
    public function admin_reg()
    {
        if(isset($_POST['manageadmin']))
        {
            $data=array();
            $data['fname']=$_POST['f_name'];
            $data['lname']=$_POST['l_name'];
            $data['email']=$_POST['email'];
            $data['password']=$_POST['password'];
            
            $admi=new Model_admin();
            $adminMng=$admi->adminMng($data);
            
            if($adminMng){
                echo "successfully inserted";
            }else{
                echo "failed ";
            }
        }
    }
    
    
}
?>