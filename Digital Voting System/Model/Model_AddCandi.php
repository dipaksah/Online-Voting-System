<?php

  include'Voting_DBConnection.php';

  class Model_AddCandidateBYAdmin
  {
      public $candidate_name;
      public $party_symbol;
      public $image;
      
      
      public function AddCandi($data)
      {
          global $conn;
          $sql='insert into tbl_addcandidate (candidate_name,party_name,party_sign,photo) 
                values
                "'.$data['name'].'",
                "'.$data['pname'].'",
                "'.$data['candidateimage'].'",
                "'.$data['img'].'"
                ';
          
          print_r($data);
          
          $execQry=mysqli_query($conn,$sql);
          return $execQry;
      }
      
      
      public function getcandidate()
      {
          global $conn;
          $sql='select * from tbl_addcandidate';
          $execQry=mysqli_query($conn,$sql);
          return $execQry;
      }
      
      
      
      public function delcandi($id)
      {
          global $conn;
          $sql='delete from tbl_addcandidate where id="'.$id.'" ';
          $execQry=mysqli_query($conn,$sql);
          return $execQry;
      }
      
      
    public function CandidateBYId($id)
      {
          global $conn;
          $sql='select * from tbl_addcandidate where id="'.$id.'" ';
          $execQry=mysqli_query($conn,$sql);
          return $execQry;
      }
      
      
  }

?>