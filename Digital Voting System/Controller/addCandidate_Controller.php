<?php
include'../Model/Voting_DBConnection.php';
include_once'../Model/Model_AddCandi.php';

$ad=new Candi_Controller();
$ad->addCandi();

class Candi_Controller
{
    public function addCandi()
    {
        if(isset($_POST['candidateadd']))
        {
            $data=array();
            $data['name']=$_POST['cname'];
            $data['pname']=$_POST['party'];
            $target="../View/candidate-photo/".basename($_FILES['image']['name']);
            $data['img']=$_FILES['image']['name'];
            $location="../View/party_symbol/".basename($_FILES['cimage']['name']);
            $data['candidateimage']=$_FILES['cimage']['name'];
            
            move_uploaded_file($_FILES['cimage']['tmp_name'],$location);

         if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
           {
               echo " ";
           }
        
        $add=new Model_AddCandidateBYAdmin();
        $candiadd=$add->AddCandi($data);
        
        if($candiadd>0){
            $_SESSION['success']="Candidate Sucessfullly Added";
            header('location:../View/AddCandidate.php');
//            echo "sucess insert";
        }else{
            $_SESSION['warning']="failed to insert";
              header('location:../View/AddCandidate.php');
        }  
        }
            
    }
    
    
    
    public function getallcandidates()
    {
        $all=new Model_AddCandidateBYAdmin();
        $allcands=$all->getcandidate();
        return $allcands; 
        //print_r($allcands);
    }
    
    
    
    public function deleteCandi($id)
    {
        $newID=$id;
        $del=new Model_AddCandidateBYAdmin();
        $candi=$del->delcandi($newID);
        return $candi;
    }
    
    
      
    public function getCandiBYId($id)
      {
          $IDNEW=$id;
          $candiID=new Model_AddCandidateBYAdmin();
          $res=$candiID->CandidateBYId($IDNEW);
          return $res;
      }
    
    
    
}

//        $CID=new Candi_Controller();
//        $CID->getCandiBYId();

//$delCandi=new Candi_Controller();
//$res=$delCandi->deleteCandi();

//$allcan=new candi_Controller();
//$allcands->getallcandidates();

?>