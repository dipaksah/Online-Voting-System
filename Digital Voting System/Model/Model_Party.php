<?php

include'Voting_DBConnection.php';

class Model_party
{
    public $party_name;
    public $image;
    
    
    public function parties($data)
    {
        global $conn;
        
        $sql='insert into tbl_party set 
              party_name="'.$data['pname'].'",
              party_symbol="'.$data['img'].'"
              ';
        
        $execQry=mysqli_query($conn,$sql);
        return $execQry;
        
    }
    
    
    public function getparty()
    {
        global $conn;
        $sql='select * from tbl_party';
        $execQry=mysqli_query($conn,$sql);
        return $execQry;
    }
    
    
    public function getpartyName()
    {
        global $conn;
        $sql='select party_name from tbl_party';
        $execQry=mysqli_query($conn,$sql);
        return $execQry;
    }
    
    
    public function delpart($id)
    {
        global $conn;
        $sql='delete from tbl_party where id="'.$id.'" ';
        $execQry=mysqli_query($conn,$sql);
        return $execQry;
    }
    
}


?>