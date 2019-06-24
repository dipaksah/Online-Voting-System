<?php
include'../Model/Voting_DBConnection.php';
include'../Model/Model_AddCandi.php';

$ad=new candi_Controller();
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

         if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
           {
               echo " ";
           }
        
        $add=new Model_candi();
        $candiadd=$add->AddCandi($data);
        
        if($candiadd>0){
            echo "sucess insert";
        }else{
             echo "failed to insert";
        }  
        }
            
    }
    
    
    
    public function getallcandidates()
    {
        $all=new Model_candi();
        $allcands=$all->getcandidate();
        return $allcands; 
        //print_r($allcands);
    }
    
}

//$allcan=new candi_Controller();
//$allcands->getallcandidates();

?>