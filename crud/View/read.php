<!doctype html>
<html lang="en">
    <head>
        <title>Car collection</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container my-5">
            <div class="d-flex justify-content-center">
                <h1>Car collection</h1>
            </div>
            <button class="btn btn-primary mb-4"><a href="View/create.php?action=create" class="text-light text-decoration-none">Add new Car</a></button>
            <table class="table table-secondary">
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                </thead>
                <?php
                foreach($card as $element){
                    $id = $element["id"];
                    $brand = $element["brand"];
                    $model = $element["model"];
                    print'<tbody>
                    <tr>
                    <td>'.$id.'</td>
                    <td>'.$brand.'</td>
                    <td>'.$model.'</td>               
                    <td><button class="btn btn-danger"><a href="./index.php?action=delete&id='.$id.'" class="text-light text-decoration-none">Delete</a></button></td>
                    <td><button class="btn btn-primary"><a href="./index.php?action=update&id='.$id.'" class="text-light text-decoration-none">Update</a></button></td>
                    </tr>
                    </tbody>';
                }
                ?>
            </table>  
        </div>
    </body>
</html>