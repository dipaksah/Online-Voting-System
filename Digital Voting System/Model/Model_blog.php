<?php
include('Voting_DBConnection.php');

class Model_blog
{
	public $title;
	public $image;
	public $content;
	public $date;

	public function add_blog($data) 
	{
		global $conn;

		$insert_query='insert into tbl_blog
		               set 
                       title="'.$data['title'].'",
                       image="'.$data['image'].'",
                       content="'.$data['content'].'",
                       date="'.$data['date'].'"
		               ';
		$qry=mysqli_query($conn, $insert_query);
	}
    
    
    
    public function blogDis()
    {
        global $conn;
        $sql='select * from tbl_blog';
        $execQry=mysqli_query($conn,$sql);
        return $execQry;
    }
    
    
    public function delete($id)
    {
        global $conn;
        $sql='delete from tbl_blog where id="'.$id.'" ';
        $execQry=mysqli_query($conn,$sql);
        return $execQry;
    }
    
    
}


?>