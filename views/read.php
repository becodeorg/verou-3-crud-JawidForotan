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
            <button class="btn btn-primary"><a href="views/create.php?createElement" class="text-light text-decoration-none">Add new car</a></button>
        </div>
         <table class="table">
             <thead>
                 <tr>
                     <th>Id</th>
                     <th>Brand</th>
                     <th>Model</th>
                     <th>Color</th>
                     <th>Price</th>
                     <th>Delete</th>
                     <th>Update</th>
                 </tr>
             </thead>

             <?php

            foreach($cardRepository->get() as $key => $value){
                        $id = $value["id"];
                        $brand = $value["brand"];
                        $model = $value["model"];
                        $color = $value["color"];
                        $price = $value["price"];
                        print '<tbody>
                        <tr>
                        <td>'.$id.'</td>
                        <td>'.$brand.'</td>
                        <td>'.$model.'</td>
                        <td>'.$color.'</td>
                        <td>'.$price.'</td>                 
                        <td><button class="btn btn-danger"><a href="delete.php?delete='.$id.'" class="text-light text-decoration-none">Delete</a></button></td>
                        <td> <button class="btn btn-primary"><a href="update.php?updateId='.$id.'" class="text-light text-decoration-none">Update</a></button></td>
                        </tr>
                    </tbody>';
            }
            
            ?>
           
            </table>  
        </div>
    </body>
</html>

