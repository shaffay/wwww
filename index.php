<?php

$con = mysqli_connect("localhost","root","","schooldb");

$fetch = $con->query("SELECT * FROM `student`");

?>

<!doctype html>
<html lang="en">
  <head>
    <title>All Students</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="background-color:#e6e6e6">
      <div class="container">
          
      
  <br>    
  <br>    
  <br>    
  <br>    
<a class="btn btn-primary" href="create.php">Add Student</a>
<br>
<br>

<?php

if(isset($_GET['msg'])){

  if($_GET['msg']=="update")
  {
    echo '<div class="alert alert-success" role="alert">
    Recorde Has Been Updated
  </div>';
  
  }elseif($_GET['msg']=="delete"){
    echo '<div class="alert alert-danger" role="alert">
    Deleted !!
  </div>';
  }elseif($_GET['msg']=="create"){
    echo '<div class="alert alert-primary" role="alert">
    Student data has been Inserted Successfully
  </div>';
  }


}


?>
<br>
<br>

    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>ADDRESS</th>
                <th>PHONE</th>
                <th>AGE</th>
                <th>ACTIONS</th>
            </tr>
            </thead>
            <tbody>

             <?php foreach($fetch as $data){ ?>

                <tr>
                <td><?php echo $data['id'] ?></td>
                <td><?php echo $data['name'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td><?php echo $data['address'] ?></td>
                <td><?php echo $data['phone'] ?></td>
                <td><?php echo $data['age'] ?></td>
                <td><a href="edit.php?id=<?php echo  $data['id']  ?>" class="btn btn-primary">Edit</a> 
                |
                 <a class="btn btn-danger" href="delete.php?id=<?php echo  $data['id']  ?>">Delete</a></td>
                </tr>


              <?php  } ?>

        
        
        
            </tbody>
    </table>

<br>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>