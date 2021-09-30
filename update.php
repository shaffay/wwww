<?php

if(isset($_POST['update'])){
    $con = mysqli_connect("localhost","root","","schooldb");
    $id = $_POST['id'];
    $name= $_POST['name'];
    $email= $_POST['email'];
    $address= $_POST['address'];
    $phone= $_POST['phone'];
    $age= $_POST['age'];

    if($name == ""){
      header("location:edit.php?error=name");
    }else{

      $insert = $con->query("UPDATE `student` SET `name`='$name',`email`='$email',`address`='$address',`phone`='$phone',`age`='$age' WHERE `id`='$id' ");
  
      if($insert){
          header("location:index.php?msg=update");
      }

    }

}

?>