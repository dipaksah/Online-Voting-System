<?php

include('Voting_DBConnection.php');

  class Candidate_Model
  {

  	public $first_name;
  	public $last_name;
  	public $address;
  	public $phone_No;
  	public $dob;
  	public $gender;
  	public $email;
    public $cnumber;
  	public $password;
      
      
  	
  	public function InsertCandidate($data)
  	{
  		global $conn;

       $dob=$_POST['dob'];
      // calculate age code
      $today=date("Y/m/d");
      $DOB=date($dob);
  
      $date1=strtotime($today);
      $date2=strtotime($DOB);
  
      $diff=($date1-$date2)/(60*60*24*365);
  
     if($diff<25 && $_POST['dob']!="")
     {
      echo "your age is ".FLOOR($diff)." Year, you cannot give a vote.";
      echo "</br>";
      echo "minimum 25 age is required for registering";
      die(); 
     }
         
     else
       {

          $query_candidate='insert into tbl_candidate_register
                       set
                       first_name="'.$data['f_name'].'",
                       last_name="'.$data['l_name'].'",
                       address="'.$data['address'].'",
                       phone_No="'.$data['phone_No'].'",
                       dob="'.$data['dob'].'",
                       gender="'.$data['gender'].'",
                       email="'.$data['email'].'",
                       citizenship_number="'.sha1($data['cnumber']).'",
                       password="'.sha1($data['password']).'"
                       ';
              
              $query=mysqli_query($conn, $query_candidate); 
              return $query;
      }
}
      
      
      public function editCandidate($id)
      {
          global $conn;
          $SqlQuery='select * from tbl_candidate_register
                    where id="'.$id.'" 
                    ';
          
          $query=mysqli_query($conn,$SqlQuery);
          return $query;
          
//          echo "<pre>";
//          print_r($query);
//          echo "</pre>";
//          exit;
          
      }
    
      
      
      
    public function UpdateCandidate($data,$id)
    {
        global $conn;
        
        $UpdateQuery='update tbl_candidate_register
                      set
                       first_name="'.$data['f_name'].'",
                       last_name="'.$data['l_name'].'",
                       address="'.$data['address'].'",
                       phone_No="'.$data['phone_No'].'",
                       dob="'.$data['dob'].'",
                       gender="'.$data['gender'].'",
                       email="'.$data['email'].'",
                       citizenship_number="'.sha1($data['cnumber']).'",
                       password="'.sha1($data['password']).'"
                       
                       where id="'.$id.'"
                      ';
        $execQry=mysqli_query($conn,$UpdateQuery);
        return $execQry;
    }
      
      

    public function login_query($data)
    {
      global $conn;
      $login_query='select * from tbl_candidate_register 
                    where email="'.$data['email'].'"
                    and password="'.sha1($data['password']).'"
                    ';

          $query=mysqli_query($conn,$login_query);
          //$count=mysqli_num_rows($query);
          return $query;
    }
      
      
      
      public function selectCandidate()
      {
         global $conn;
          $selectQry='select * from tbl_candidate_register';
          $execQry=mysqli_query($conn,$selectQry);
          return $execQry;
      }
      
    public function candidateDelete($id)
      {
          global $conn;

          $Delsql='delete from tbl_candidate_register where id="'.$id.'" ';
          $execQry=mysqli_query($conn,$Delsql);
          return $execQry;
      }
    
      
      public function editCandi()
      {
          global $conn;
          $sql='select * from tbl_candidate_register';
          $execQry=mysqli_query($conn,$sql);
          return $execQry;
          
//          echo "<pre>";
//          print_r($execQry);
//          echo "</pre>";
//          exit;
      }
      


  }

?>