<?php

      $con = mysqli_connect("localhost","root","","schooldb");

if(isset($_GET['id'])){
    
    $id = $_GET['id'];

    $fetch_std = $con->query("SELECT * FROM `student` WHERE `id`='$id' ");

    $res = mysqli_fetch_array($fetch_std);
    


}




?>

<!doctype html>
<html lang="en">
  <head>
    <title>Update Student</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <br>
          <h3>Update <?php echo $res['name']; ?> Data</h3>
          <br>
          <form action="update.php" method="post">
            <?php
            
            if(isset($_GET['error']))
            {
              echo '<div class="alert alert-danger" role="alert">
              You Have To Fill The Form Completely
            </div>';

            }


            ?>

            <input type="hidden" value="<?php echo $res['id']; ?>" name="id" > 

              <div class="form-group">
                <label for="">Name</label>
                <input type="text"
                  class="form-control" value="<?php echo $res['name']; ?>" name="name" id="" aria-describedby="helpId" placeholder="Enter your name">
               
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="email"
                  class="form-control" value="<?php echo $res['email']; ?>" name="email" id="" aria-describedby="helpId" placeholder="Enter your email">
               
              </div>
              <div class="form-group">
                <label for="">Address</label>
                <input type="text"
                  class="form-control" value="<?php echo $res['address']; ?>" name="address" id="" aria-describedby="helpId" placeholder="Enter your address">
               
              </div>
              <div class="form-group">
                <label for="">Phone</label>
                <input type="text"
                  class="form-control" value="<?php echo $res['phone']; ?>" name="phone" id="" aria-describedby="helpId" placeholder="Enter your phone">
               
              </div>
              <div class="form-group">
                <label for="">Age</label>
                <input type="number"
                  class="form-control" value="<?php echo $res['age']; ?>" name="age" id="" aria-describedby="helpId" placeholder="Enter your age">
               
              </div>
              <input class="btn btn-success" type="submit" name="update" value="Update  <?php echo $res['name']; ?>">
          </form>
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


