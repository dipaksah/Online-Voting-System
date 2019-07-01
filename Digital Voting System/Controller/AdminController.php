<?php
session_start();
include'../Model/Model_Admin.php';
include'../Model/Voting_DBConnection.php';


$adminL=new adminController();
$adminL->admin_login();


$adm=new adminController();
$adm->admin_reg();


$forgetAdminPass=new adminController();
$forgetAdminPass->ResetPass();

class adminController
{
	
    public function admin_login()
	{

		if(isset($_POST['login']))
		{
            $data=array();
            
            $data['email']=$_POST['email'];
            $data['password']=$_POST['password'];
            
            $admin=new Model_admin;
            $login=$admin->adminLOG($data);
            $count=mysqli_num_rows($login);
            
            if($count>0){
                $res=mysqli_fetch_assoc($login);
                $_SESSION['ID']=$res['admin_id'];
                $_SESSION['mail']=$res['email'];
                            
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
    
    
    
    public function ResetPass()
    {
        if(isset($_POST['btn-PassReset']))
        {
            $data=array();
            $data['password']=$_POST['password'];
            $data['email']=$_POST['email'];
            $data['cpassword']=$_POST['cpass'];
            
            $forgetpass=new Model_admin();
            $res=$forgetpass->forget($data);
            
            if($res>0){
                echo"update successfully";
            }else{
                echo"failed to update";
            }
        }
    }
    
    
    
    public function allAdmin()
    {
        $All=new Model_admin();
        $getalladmin=$All->getadmin();
        return $getalladmin;
    }
    
    
    public function deleteAdmin($id)
    {
        $adminID=$id;
        $admindel=new Model_admin();
        $delete=$admindel->delete($adminID);
        return $delete;
    }
    
    
}

//$del=new adminController();
//$del->deleteAdmin();

//$admi=new adminController();
//$admi->allAdmin();
?>