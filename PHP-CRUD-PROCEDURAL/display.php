<?php
require"./database.php";

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
    <body>
        <div class="container my-5">
            <div class="container my-5">
            <button class="btn btn-primary"><a href="./main.php" class="text-light text-decoration-none">Add User</a></button>
        </div>
         <table class="table">
             <thead>
                 <tr>
                     <th>Id</th>
                     <th>Name</th>
                     <th>Last Name</th>
                     <th>E-mail</th>
                     <th>Address</th>
                     <th>Delete</th>
                     <th>Update</th>
                 </tr>
             </thead>

             <?php
               
             $sql = "SELECT * FROM student";
             $result = mysqli_query($connection, $sql);
             if($result){
                 while($data = mysqli_fetch_assoc($result)){
                     $id = $data["id"];
                     $name = $data["name"];
                     $lastName = $data["lastName"];
                     $email = $data["email"];
                     $address = $data["address"];
                     echo '<tbody>
                     <tr>
                     <td>'.$id.'</td>
                     <td>'.$name.'</td>
                     <td>'.$lastName.'</td>
                     <td>'.$email.'</td>
                     <td>'.$address.'</td>                 
                     <td><button class="btn btn-danger"><a href="delete.php?delete='.$id.'" class="text-light text-decoration-none">Delete</a></button></td>
                     <td> <button class="btn btn-primary"><a href="update.php?updateId='.$id.'" class="text-light text-decoration-none">Update</a></button></td>
                     </tr>
                 </tbody>';
                 }
            }
             ?>
           
         </table>  
        </div>
    </body>
</html>