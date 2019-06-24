<?php

  include'Voting_DBConnection.php';

  class Model_candi
  {
      public $candidate_name;
      public $party_symbol;
      public $image;
      
      
      public function AddCandi($data)
      {
          global $conn;
          $sql='insert into tbl_addcandidate 
                set 
                candidate_name="'.$data['name'].'",
                party_name="'.$data['pname'].'",
                photo="'.$data['img'].'"
                ';
          
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
  }

?>