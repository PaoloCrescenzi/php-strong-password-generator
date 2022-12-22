<?php
include_once dirname(__FILE__). "/function.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <title>Password Generator</title>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <h1 class="text-center mt-3">Strong Password Generator</h1>
        <div class="alert alert-info text-center" role="alert">
          <?php
            if(isset($_GET["numeropass"])){
              echo getrandomNumber($_GET["numeropass"]);
            }
          ?>
        </div>
      </div>
    </div>
  </div>

  <div class="container bg-white rounded">
    <div class="d-fel justify-content-around">
      
      <div class="my-3">
        <div>lunghezza password</div>
      </div>

      <form method="GET">
        <div class="me-3 my-3">
          <input type="text" class="form-control" name="numeropass">
        </div>

        <div class="d-flex justify-content-center">
          <button class="btn btn-success my-3 mx-2" type="submit">invio</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>