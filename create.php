<!doctype html>
<html lang="en">
  <head>
    <title>Add Student</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <br>
          <h3>Add Student Data</h3>
          <br>
          <form action="create.php" method="post">
            <?php
            
            if(isset($_GET['error']))
            {
              echo '<div class="alert alert-danger" role="alert">
              You Have To Fill The Form Completely
            </div>';

            }


            ?>
              <div class="form-group">
                <label for="">Name</label>
                <input type="text"
                  class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Enter your name">
               
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="email"
                  class="form-control" name="email" id="" aria-describedby="helpId" placeholder="Enter your email">
               
              </div>
              <div class="form-group">
                <label for="">Address</label>
                <input type="text"
                  class="form-control" name="address" id="" aria-describedby="helpId" placeholder="Enter your address">
               
              </div>
              <div class="form-group">
                <label for="">Phone</label>
                <input type="text"
                  class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="Enter your phone">
               
              </div>
              <div class="form-group">
                <label for="">Age</label>
                <input type="number"
                  class="form-control" name="age" id="" aria-describedby="helpId" placeholder="Enter your age">
               
              </div>
              <input class="btn btn-success" type="submit" name="submit" value="Add-Student">
          </form>
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


<?php

if(isset($_POST['submit'])){

    $name= $_POST['name'];
    $email= $_POST['email'];
    $address= $_POST['address'];
    $phone= $_POST['phone'];
    $age= $_POST['age'];

    if($name == ""){
      header("location:create.php?error=name");
    }else{

      $con = mysqli_connect("localhost","root","","schooldb");

      $insert = $con->query("INSERT INTO `student`(`name`, `email`, `address`, `phone`, `age`) VALUES ('$name','$email','$address','$phone','$age')");
  
      if($insert){
          header("location:index.php?msg=create");
      }

    }

}

?>