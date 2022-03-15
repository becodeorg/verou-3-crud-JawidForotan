
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
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="my-5">
                <h1 class="mx-5" >Add new car to the collection</h1>
                <hr class="mx-5 mb-5">
                <div class="form-group mx-5 my-3">
                    <label class="form-label">Brand:</label>
                    <input type="text" class="form-control" name="brand" placeholder="brand">
                </div>
                <div class="form-group  mx-5 my-3">
                    <label class="form-label">Model:</label>
                    <input type="text" class="form-control" name="model" placeholder="model">
                </div>
                <div class="form-group  mx-5 my-3">
                    <label class="form-label">Color:</label>
                    <input class="form-control" name="color" placeholder="color">
                </div>
                <div class="form-group  mx-5 my-3">
                    <label class="form-label">Price:</label>
                    <input type="number" class="form-control" name="price" placeholder="price">
                </div>
                <div class="form-group my-3  mx-5 my-3">
                    <button name="submit" class="btn btn-primary">Add new car</button>
                </div>      
        </form>
      </div>
   </body>
</html>