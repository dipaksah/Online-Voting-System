<?php

include('../Model/Model_idGenerate.php');

$gener=new Generate_controller();
$gener->id_generate();


class Number_controller
{
    public function id_generate()
        {
                
               $gene=new Model_generateID();
               $idGen=$gene->Number($data);
               $count=mysqli_num_rows();
        }
}

?>