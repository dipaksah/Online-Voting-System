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
           return $exeQry;
           
       }
       
       
       public function adminLOG($data)
       {
           global $conn;
           $sql='select * from tbl_admin 
                 where email="'.$data['email'].'" and
                 password="'.sha1($data['password']).'" 
                 ';
           
           $exeQry=mysqli_query($conn,$sql);
           return $exeQry;
       }
       
       
       
       public function forget($data)
       {
           global $conn;
           $sql='update tbl_admin
                 set 
                 password="'.sha1($data['password']).'"
                 where email="'.$data['email'].'"
                 ';
           $exeQry=mysqli_query($conn,$sql);
           return $exeQry;
       }
       
       
       
       public function getadmin()
       {
           global $conn;
           $sql='select * from tbl_admin';
           $exeQry=mysqli_query($conn,$sql);
           return $exeQry;
       }
       
       
       public function delete($id)
       {
           global $conn;
           $sql='delete from tbl_admin where admin_id="'.$id.'" ';
           $exeQry=mysqli_query($conn,$sql);
           return $exeQry;
       }
       
       
   }

?>