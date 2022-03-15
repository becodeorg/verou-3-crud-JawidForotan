<?php
require"./database.php";

if(isset($_POST["update"])){
   $id = $_GET["updateId"];
   $name = $_POST["name"];
   $lastName = $_POST["lastName"];
   $email = $_POST["email"];
   $address = $_POST["address"];
   
   $sql = "UPDATE `student` SET id = '$id', name = '$name', lastName = '$lastName',
   email = '$email', address = '$address' WHERE id = '$id'";
   $result = mysqli_query($connection, $sql);
   if($result){
     header("location: display.php");
   }else{
       die(mysqli_error($connection));
   }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>php crud</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
      <div class="container my-5">
        <form method="POST" class="my-5">
                <div class="form-group mx-5 my-3">
                    <label class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="name">
                </div>
                <div class="form-group  mx-5 my-3">
                    <label class="form-label">Last Name:</label>
                    <input type="text" class="form-control" name="lastName" placeholder="Last name">
                </div>
                <div class="form-group  mx-5 my-3">
                    <label class="form-label">E-mail:</label>
                    <input type="email" class="form-control" name="email" placeholder="E-mail">
                </div>
                <div class="form-group  mx-5 my-3">
                    <label class="form-label">Address:</label>
                    <input type="text" class="form-control" name="address" placeholder="Address">
                </div>
                <div class="form-group my-3  mx-5 my-3">
                    <button name="update" class="btn btn-primary">Update</button>
                </div>      
        </form>
      </div>
   </body>
</html>