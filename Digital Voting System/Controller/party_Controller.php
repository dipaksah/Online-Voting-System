<?php

include'../Model/Voting_DBConnection.php';
include'../Model/Model_party.php';

$party=new party_controller();
$party->party();

   class party_controller
   {
       public function party()
       {
           if(isset($_POST['addparty']))
           {
               $data=array();
               $data['pname']=$_POST['pname'];
               $target="../View/party_symbol/".basename($_FILES['image']['name']);
               $data['img']=$_FILES['image']['name'];
               
               if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
               {
                   echo " ";
               }
               
               $part=new Model_party();
               $res=$part->parties($data);
               
//               echo"<pre>";
//               print_r($res);
//               echo"</pre>";
               
               if($res>0)
               {
                   echo "successfully inserted";
               }else{
                   echo "failed to insert";
               }
           }
       }
       
       
       
       public function getparties()
       {
           $part=new Model_party();
           $par=$part->getparty();
           return $par;
       }
       
       
       
       public function partyOnly()
       {
           $nam=new Model_party();
           $name=$nam->getpartyName();
           return $name;
       }
       
       
       
       public function delparty($id)
       {
           $partyID=$id;
           $partyde=new Model_party();
           $delete=$partyde->delpart($partyID);
           return $delete;
       }
       
   }

//$parts=new party_controller();
//$pa=$parts->getparties();

//$nam=new party_controller();
//$nam->partyOnly();

//$del=new party_controller();
//$delete-party=$del->delparty();


?>