<!doctype html>
<html lang="en">
<head> 
    <title>php crud</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
    <body>
        <div class="container mt-5">
            <button class="btn btn-primary"><a href="../index.php" class="text-light text-decoration-none">Home</a></button>
        </div>
        <form action="../index.php?action=create" method="POST" class="container mt-5 p-3 bg-secondary">
            <div class="form-group my-3">
                <label class="form-label fw-bold">Brand:</label>
                <input type="text" class="form-control" name="brand" placeholder="brand">
            </div>
            <div class="form-group my-3">
                <label class="form-label fw-bold">Model:</label>
                <input type="text" class="form-control" name="model" placeholder="model">
            </div>
            <div class="form-group my-3 ">
                <button  name="submit" class="btn btn-primary">Add new Car</button>
            </div>      
        </form> 
    </body>
</html>