<?php

include('Voting_DBConnection.php');

class Model_request
{
    public $first_name;
    public $last_name;
    public $address;
    public $country;
    public $phone_no;
    public $dob;
    public $gender;
    public $email;
    public $citizenship_number;
    public $photo;
    
    
    public function insertQuery($data)
    {
        global $conn;
         
        $query='insert into tbl_request 
                set
                first_name="'.$data['f_name'].'",
                last_name="'.$data['l_name'].'",
                address="'.$data['address'].'",
                country="'.$data['country'].'",
                phone_no="'.$data['phone_no'].'",
                dob="'.$data['dob'].'",
                gender="'.$data['gender'].'",
                email="'.$data['email'].'",
                citizenship_number="'.$data['cnumber'].'",
                photo="'.$data['photo'].'"
                ';
        
        $execQuery=mysqli_query($conn, $query);
        return $execQuery;
    }
    
    
    public function getallcandidates()
    {
        global $conn;
        $sql='select * from tbl_request';
        $execQuery=mysqli_query($conn,$sql);
        return $execQuery;
    }
    
}




?>