<?php 
   include('Voting_DBConnection.php');

   class model_voter_register
   {
     public $f_name;
     public $l_name;
     public $address;
     public $dob;
     public $gender;
     public $cnumber;
     public $email;
     public $password;
     public $cpassword;


    public function Insert_Voters($data)
    {
            global $conn;
            // Check whether user data already exists in the database
           if (!empty($data)) 
           {
               $emailCheck='select * from tbl_voter_register where email="'.$data['email'].'" ';
               $citizenshipCheck='select * from tbl_voter_register where citizenship_number="'.sha1($data['cnumber']).'" ';

               $qry=mysqli_query($conn, $emailCheck);
               $qry2=mysqli_query($conn, $citizenshipCheck);
               //$count=mysqli_num_rows($qry2);

               if ($qry->num_rows>0) 
                 {
                     echo "email already taken";
                     die();
                 }else if($qry2->num_rows>0){
                     echo "citizenship_number already taken";
                 }
               
               else {
                 $sql = 'insert into tbl_voter_register
                            set

                            first_name="'.$data['f_name'].'",
                            last_name="'.$data['l_name'].'",
                            address="'.$data['addr'].'",
                            dob="'.$data['dob'].'",
                            gender="'.$data['gender'].'",
                            citizenship_number="'.sha1($data['cnumber']).'",
                            email="'.$data['email'].'",
                            password="'.sha1($data['psw']).'"
                            ';

                    $query=mysqli_query($conn,$sql); 
                    return $query;
               }
           }
  }


    public function login_check($data)
     {
        global $conn;
        $SelectVoter='select * from tbl_voter_register 
                      where email="'.$data['email'].'"
                      and password="'.sha1($data['password']).'" ';


        $query=mysqli_query($conn, $SelectVoter);
        //$count=mysqli_num_rows($query);
        return $query; 
     }
       
       
       
    
    public function editProfile($id)
       {
           global $conn;
           
           $sql=' select * from tbl_voter_register
                       where voter_id="'.$id.'" ';

           $query=mysqli_query($conn,$sql);
           //$row = mysqli_fetch_assoc($query);
            return $query;
       }
       
       
       
       
    public function updVoterQuery($data, $id)
    {
        global $conn;
        
        $updQry='update tbl_voter_register 
                 set
                 first_name="'.$data['f_name'].'",
                 last_name="'.$data['l_name'].'",
                 address="'.$data['addr'].'",
                 dob="'.$data['dob'].'",
                 gender="'.$data['gender'].'",
                 citizenship_number="'.sha1($data['cnumber']).'",
                 email="'.$data['email'].'",
                 password="'.sha1($data['psw']).'"
        
                 where voter_id="'.$id.'"
                 ';
        
        $execQry=mysqli_query($conn, $updQry);
        return $execQry;
    }
       
     
       
       public function forget($data)
       {
           global $conn;
           $qry='update tbl_voter_register 
                 set
                 password="'.sha1($data['psw']).'"
                 where email="'.$data['email'].'"
                 ';
           
           $exec=mysqli_query($conn,$qry);
           return $exec;
           
       }
       
       
       
        
    public function delVoterQuery($id)
    {
        global $conn;
        $delQry= 'delete from tbl_voter_register  
                  where voter_id="'.$id.'"
                 ';
        $execQry=mysqli_query($conn, $delQry);
        return $execQry;
    }
       
       
       
         
    public function SelectVoter(){
        global $conn;
        $sql="Select * from tbl_voter_register";
        $data=mysqli_query($conn,$sql);
        return $data;
    }
       
       
       public function selectVoterByid($id)
       {
            global $conn;
            $sql='Select * from tbl_voter_register where voter_id="'.$id.'" ';
            $execQry=mysqli_query($conn,$sql);
            return $execQry;
       }
       
       
       
       public function profile($image,$id)
       {
           global $conn;
           $sql='update tbl_voterProfile
                 set
                 profile_image="'.$image.'" where id="'.$id.'" ';
           $execQry=mysqli_query($conn,$sql);
           return $execQry;
       }
       
       public function imgselect($id)
       {
           global $conn;
           $sql='select * from tbl_voterProfile where id="'.$id.'"';
           $execQry=mysqli_query($conn,$sql);
           return $execQry;
       }
       
       
}
   


?>
