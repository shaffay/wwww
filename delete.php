<?php

      $con = mysqli_connect("localhost","root","","schooldb");

if(isset($_GET['id'])){
    
    $id = $_GET['id'];

    $ds = $con->query("DELETE FROM `student` WHERE `id`='$id'");


    if($ds){
        header("location:index.php?msg=delete");
    }
   
    


}




?>