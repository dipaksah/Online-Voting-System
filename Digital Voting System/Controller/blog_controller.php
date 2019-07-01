<?php
include('../Model/Voting_DBConnection.php');
include('../Model/Model_blog.php');

$blog=new blog_controller();
$blog->blog_add();

class blog_controller
{
	
	public function blog_add() 
	{
		if (isset($_POST['blog-submit']))
		{
			$data=array();
		    $data['title']=$_POST['title'];
		    $target="../View/uploaded-image/".basename($_FILES['images']['name']);
		    $data['image']=$_FILES['images']['name'];
            
            if(move_uploaded_file($_FILES['images']['tmp_name'],$target))
			 {
				echo "";
			 }

		    $data['content']=$_POST['content'];
		    $data['date']=date("y-m-d"); //2019-6-6

		    $blogAdd=new Model_blog();
		    $blogAdd->add_blog($data);

		    if ($blogAdd) 
		    {
		    	echo "successfully inserted";
		    }else
		    {
		    	echo "failed to insert";
		    }
		}
	}
    
    
    public function displayBlog()
    {
        $blogs=new Model_blog();
        $disBlog=$blogs->blogDis();
        return $disBlog;
    } 
    
    
    public function blogDelete($id)
    {
        $newBlogID=$id;
        $del=new Model_blog();
        $blogdel=$del->delete($newBlogID);
        return $blogdel;
    }
    
    
}

//$delBlog=new blog_controller();
//$delBlog->blogDelete();

// $Blog=new blog_controller();
//    $Blog->displayBlog();

?>