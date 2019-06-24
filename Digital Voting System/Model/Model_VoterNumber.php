<?php

 include ('Voting_DBConnection.php');

class Model_generateID
{
    
   public $voter_card_number;
    
    public function Number($id)
    {
        global $conn;
        
        $query='insert into tbl_voter_register(voter_card_number) values VoterCardNo=
                where id="'.$id.'" ';
        
        $exec=mysqli_query($conn, $query);
        return $exec;
    }
}

?>