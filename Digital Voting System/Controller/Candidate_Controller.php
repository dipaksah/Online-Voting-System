<?php
session_start();
include('../Model/Voting_DBConnection.php');
include('../Model/Model_Candidate.php');




$candi=new Candidate_Controller;
$candi->Candidate_Register(); 


$login=new Candidate_Controller;
$login->candidate_login();




  class Candidate_Controller
  {
      
      //private $cadId;
      
      
  	public function Candidate_Register()
  	{
  		if (isset($_POST['CandidateRegister']))
  		 {
  			$data=array();
  			$data['f_name']=$_POST['f_name'];
            $data['l_name']=$_POST['l_name'];
            $data['address']=$_POST['address'];
            $data['phone_No']=$_POST['phone_No'];
            $data['dob']=$_POST['dob'];
            $data['gender']=$_POST['gender'];
            $data['email']=$_POST['email'];
            $data['cnumber']=$_POST['cnumber'];
            $data['password']=$_POST['password'];
            $data['cpassword']=$_POST['cpassword'];
        
        if ($data['password']!=$data['cpassword']) {
             echo "password doesn't match";
             return;
        }


        $candidate=new Candidate_Model;
        $candidate->InsertCandidate($data);	
         
         if ($candidate) {
           echo "sucessfully inserted";
         }else
         {
          echo "failed to insert";
         }

      }
  	}

    

    public function candidate_login()
    {
        $id;
        
      if(isset($_POST['candidate_login']))
      {
        $data=array();

        $data['email']=$_POST['email'];
        $data['password']=$_POST['password'];

        $login_candi=new Candidate_Model();   
        $c_log=$login_candi->login_query($data);
          
        $count=mysqli_num_rows($c_log);
          
        //print_r($count);
        if($count>0)
        {
             $dat=mysqli_fetch_assoc($c_log);
             $_SESSION['email']=$dat['email'];
             $_SESSION['Id']=$dat['id'];
            
             header('location:../View/candidate-dashboard.php');
        }
        else
        {
          if(!isset($_COOKIE['attempts']))
          {
              setcookie('attempts',1,time()+180);
          }
            else
            {
                $count=$_COOKIE['attempts']+1;
                setcookie('attempts',$count,time()+180,'/');
                //print_r($count);
                //echo $count;
            }
            if(empty($row['email']) AND empty($row['password']))
            {   
                echo "SORRY... YOU ENTERD WRONG Email AND PASSWORD... PLEASE RETRY...";
                echo "<br />";
                echo 3-$_COOKIE['attempts']."Attempt Left";
                
            }
        }
      }
        //$this->cadId=$_SESSION['Id'];
        
    }
      
      
      
      
      public function Edit($id)
      {
          //$id=$_SESSION['Id'];
          
          $edit=new Candidate_Model();
          $ed=$edit->editCandidate($id);
          $row=mysqli_fetch_assoc($ed);
          return $row;
      } 
      
      
      
      public function updateCandi($id)
      {
          $Newid=$id;
          
          if(isset($_POST['CandidateUpdate']))
          {
            $data=array();
  			$data['f_name']=$_POST['f_name'];
            $data['l_name']=$_POST['l_name'];
            $data['address']=$_POST['address'];
            $data['phone_No']=$_POST['phone_No'];
            $data['dob']=$_POST['dob'];
            $data['gender']=$_POST['gender'];
            $data['email']=$_POST['email'];
            $data['cnumber']=$_POST['cnumber'];
            $data['password']=$_POST['password'];
            
          
          $upd_candi=new Candidate_Model();
          $upd_candi->UpdateCandidate($data,$Newid);
              return $upd_candi;
              
//              if($upd_candi>0){
//                  echo "update sucessfully";
//              }else {
//                  echo "failed to update";
//              }
             
              
              
          }
      }
      
      
    public function GetCandidate()
      {
          $allcandi=new Candidate_Model();
          $get=$allcandi->selectCandidate();
          return $get;
        
           //print_r($get);
      }
      
      
    public function DeleteCandidate($id)
    {
        $newID=$id;
        $del=new Candidate_Model();
        $candiDelete=$del->candidateDelete($newID);
        return $candiDelete;
    }
      
      
    public function getcandiUP()
      {
          $all=new Candidate_Model();
          $allcandid=$all->editCandi();
          return $allcandid;
          
         // print_r($allcandid);
      }
      
  }

//      $a=new Candidate_Controller();
//      $a->DeleteCandidate();

//        $b=new Candidate_Controller();
//        $b->getcandiUP();


?>