<?php

include'Voting_DBConnection.php';

   class Model_admin
   {
       public $first_name;
       public $last_name;
       public $email;
       public $password;
       
       public function adminMng($data)
       {
           global $conn;
           $sql='insert into tbl_admin 
                 set  
                 first_name="'.$data['fname'].'",
                 last_name="'.$data['lname'].'",
                 email="'.$data['email'].'",
                 password="'.sha1($data['password']).'"
                 ';
           $exeQry=mysqli_query($conn,$sql);
           return $sql;
           
       }
       
       
       public function adminLOG($data)
       {
           global $conn;
           $sql='select * from tbl_admin 
                 where 
                 email="'.$data['email'].'",
                 password="'.sha1($data['password']).'" 
                 ';
           
           $exeQry=mysqli_query($conn,$sql);
           return $sql;
       }
       
       
   }

?>