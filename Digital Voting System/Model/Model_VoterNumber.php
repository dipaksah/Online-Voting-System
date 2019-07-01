<?php

 include ('Voting_DBConnection.php');

class Model_voterNumber
{
    
   public $voter_card_number;
    
    public function Number($number,$id)
    {
        global $conn;
        
        $query='insert into tbl_voter_id
                set
                voter_card_number="'.$number.'", 
                voter_id="'.$id.'"
                ';
        
        $exec=mysqli_query($conn, $query);
        return $exec;
    }

    
    
    public function dispVoterID($id)
    {
        global $conn;
        $sql='select voter_card_number from tbl_voter_id where voter_id="'.$id.'" ';
        $execQry=mysqli_query($conn,$sql);
        return $execQry;
    }
    
    
    
    public function checkId($Vnumber)
    {
        global $conn;
        $sql='select * from tbl_voter_id 
              where 
              voter_card_number="'.$Vnumber.'"
              ';
        $execQry=mysqli_query($conn,$sql);
        return $execQry;
    }
    
    
}

?>