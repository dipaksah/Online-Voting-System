<?php
session_start();
include('../Model/Model_VoterNumber.php');

include'../Model/Model_Voter_Register.php';
include'../Model/Voting_DBConnection.php';



/*if($_GET['id'] && $_GET['act']="view"){
    $edit=new Voter_Controller();
    $edit->editVoter();
}*/

$loginn=new Voter_Controller;
$loginn->voter_login();

$inset = new Voter_Controller;
$inset->VoterRegister();

$forgets=new Voter_Controller();
$forgets->forgetpass();


//$updatevoter=new voter_Controller();
//$updatevoter->updateVoter();




//print_r($_SESSION['vid']);

class Voter_Controller
{
  // private $voterID;
    
        public function VoterRegister()
         {
              
             if(isset($_POST['button-VoterRegister']))
                {
                    $data= array();
                    $data['f_name']=$_POST['f_name'];
                    $data['l_name']=$_POST['l_name'];
                    $data['addr']=$_POST['address'];
                    $data['dob']=$_POST['dob'];
                    $data['gender']=$_POST['gender'];
                    $data['cnumber']=$_POST['cnumber'];
                    $data['email']=$_POST['email'];
                    $data['psw']=$_POST['password'];
                    $data['cpsw']=$_POST['cpassword'];
                 
                
                        $voter=new model_voter_register();
                        $voter->Insert_Voters($data);  
                        //$count=mysqli_num_rows($data);
                        if ($voter)
                        {
                            
                           $_SESSION['success']=" Account Sucessfully created";                         
                           header("Location: ../View/voter-login.php");

                        }
                        else
                        {
                            echo "failed to inserted";
                        }  
                }
            }
        

        public function voter_login()
        {
            $id;
            
            if(isset($_POST['login']))
            {
                $data=array();

                $data['email']=$_POST['email'];
                $data['password']=$_POST['password'];

                $login=new model_voter_register;
                $log = $login->login_check($data);
                $count=mysqli_num_rows($log);

                if($count>0)
                {
                  $dat=mysqli_fetch_assoc($log);
                    
                  $_SESSION['email']=$dat['email'];
                  $_SESSION['Id']=$dat['voter_id'];
                   
                /*    $id=$_SESSION['Id'];
                  $this->voterID=$id;*/
                   
                header('location:../View/voter-dashboard.php');
                }
                else
                {
                    if(!isset($_COOKIE['attempt']))
                    {
                        setcookie('attempt',1,time()+180);
                    }
                    else
                    {
                        $count=$_COOKIE['attempt']+1;
                        setcookie('attempt',$count,time()+180,'/');
                    }
                    if (empty($row['email']) && empty($row['password']))
                    {
//                         $_SESSION['warning']="SORRY... YOU ENTERD WRONG Email AND PASSWORD... PLEASE RETRY...";
                        header("Location: ../View/voter-login.php");
                        
					   $_SESSION['warning']= 2-$_COOKIE['attempt']."Attempt Left SORRY... YOU ENTERD WRONG Email AND PASSWORD... PLEASE RETRY..";
                    }     
                }   
            }        
        }
    
    
    
       
    
        public function editVoter($id)
        {   
            
            $edit=new model_voter_register();
            $ed=$edit->editProfile($id);
            $row = mysqli_fetch_assoc($ed);
            return $row;    
        }
    
    
        
        public function forgetpass()
        {
            if(isset($_POST['btn-PassReset']))
               {
                   $data=array();
                   $data['psw']=$_POST['password'];
                   $data['email']=$_POST['email'];   
                
                   $for=new model_voter_register();
                   $forgetpa=$for->forget($data);
                
                   if($forgetpa>0){
                       echo "sucessfully updated";
                   }else{
                       echo "failed";
                   }
               }
        }

    
    
        public function updateVoter($id)
        {
               
//            if(isset($_POST['btnUpdate']))
//            {   
                  
                $data=array();
                $data['f_name']=$_POST['f_name'];
                $data['l_name']=$_POST['l_name'];
                $data['addr']=$_POST['address'];
                $data['dob']=$_POST['dob'];
                $data['gender']=$_POST['gender'];
                $data['cnumber']=$_POST['cnumber'];
                $data['email']=$_POST['email'];
                $data['psw']=$_POST['password'];

                $updVoter=new model_voter_register();
                $update=$updVoter->updVoterQuery($data, $id);
                
                return $update;
                
           }  
        //}
    
    
    
        public function GetVoter()
        {            
            $getVoter=new model_voter_register();
            $res=$getVoter->SelectVoter();
 
            return $res;
        }
    
    
       public function deleteVoter($id){
            
            $newId=$id;
            $delVoter=new model_voter_register();
            $res=$delVoter->delVoterQuery($newId);
            return $res;
    }

    
    
 public function getVoterById($id)
    {
        $NewID=$id;
        $voterss=new model_voter_register();
        $voter=$voterss->selectVoterByid($NewID);
        $data=mysqli_fetch_assoc($voter);
     
          return $data;
    }
    
    


    public function id_generate()
        {
             if(isset($_POST['btn-ID']))
             {
                 $number=$_POST['Vid'];
                 $id=$_SESSION['id'];
                 
                 $gene=new Model_voterNumber();
                 $idGen=$gene->Number($number,$id);
                  
                 if($idGen>0){
                     $_SESSION['success']="Voter ID Number send sucessfully";
                     echo"sucessfully";
                 }else{
                     $_SESSION['warning']="ID Aready given";
                     header('location:../View/voterRequest.php');
                     //echo "ID Aready given";
                 }
             }  
        }
    
    
    public function displayVoterID($id)
    {
        $num=$id;
        $numberID=new  Model_voterNumber();
        $vot=$numberID->dispVoterID($num);
        $res=mysqli_fetch_assoc($vot);
        return $res;
    }
    
    
    public function checkVoterNumber()
    {
        if(isset($_POST['generateId']))
        {
            $Vnumber=$_POST['id'];
            
            $num=new Model_voterNumber();
            $vID=$num->checkId($Vnumber);
            $res=mysqli_num_rows($vID);
            
            if($res>0){
                header('location:../View/vote.php');
            }else
            {
                 if(!isset($_COOKIE['attempt']))
                    {
                        setcookie('attempt',1,time()+180);
                    }
                    else
                    {
                        $count=$_COOKIE['attempt']+1;
                        setcookie('attempt',$count,time()+180,'/');
                    }
                    if (empty($row['email']) && empty($row['password']))
                    {
                        echo "SORRY... YOU ENTERD WRONG Voter ID... PLEASE RETRY...";
					    echo "<br />";
					    echo 3-$_COOKIE['attempt']."Attempt Left";
                    }     
            }
        }
    }
    
    
    
}
    
$voterId=new voter_Controller();
$voterId->checkVoterNumber();


$gener=new Voter_Controller();
$gener->id_generate();

//$vot=new Voter_Controller();
//$res=$vot->deleteVoter();
//print_r($res);

//$voter=new Voter_Controller();
//$voter->voterBYID();



?>