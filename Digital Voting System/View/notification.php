<?php

if(isset($_SESSION['success']) && $_SESSION['success']!=""){
    
    ?>
    <div class="alert alert-success">
            <?php echo $_SESSION['success'];

            ?>
    </div>
    
<?php    
}

$_SESSION['success']="";
if(isset($_SESSION['failed']) && $_SESSION['failed']!="" ){

?>
    
    <div class="alert alert-danger">
        <?php echo $_SESSION['failed'];
        ?>

    </div>



<?php
}
$_SESSION['failed']="";
if(isset($_SESSION['warning']) && $_SESSION['warning']!="" ){

?>


    <div class="alert alert-warning">
        <?php echo $_SESSION['warning'];
        ?>

    </div>


<?php
}
$_SESSION['warning']="";

?>






