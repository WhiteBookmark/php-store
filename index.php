<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'static/bootstrap-css.php'; ?>
    <title>Online Store</title>
  </head>
  <body>
    
  <?php include_once 'global/header.php'; ?>
  <?php include_once 'homepage/index.php'; ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-2">
      <?php include_once 'global/categories.php'; ?>
      </div>
      <div class="col">
      <?php include_once 'global/products.php'; ?>
      </div>
    </div>
  </div>
 
   

  
  <?php include 'static/bootstrap-js.php'; ?>
  </body>
</html>