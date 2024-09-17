<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    
<section class="h-100">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0">Shopping Cart</h3>
        </div>

        <div class="card rounded-3 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">

            <?php 

             include 'config.php';
             $id = $_GET['id'];

            $query = "UPDATE `cars` SET `status`='booked' WHERE `id` = $id";
            $res = mysqli_query($conn,$query);
              if($res){
              $fetch = "SELECT * FROM `cars` WHERE `id` = $id";
              $query = mysqli_query($conn,$fetch);
              if($row =mysqli_fetch_array($query)){
            ?>
              <div class="col-md-2 col-lg-2 col-xl-2">
                <img
                  src="assets/images/new-cars-model/<?php echo $row['image']?>" alt="cars"
                  class="img-fluid rounded-3" alt="Cotton T-shirt">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2"><?php echo $row['car_name']?></p>
                <p><span class="text-muted"><?php echo $row['type']?></span></p>
              </div>
              
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <h5 class="mb-0"><?php echo $row['status']?></h5>
              </div>
              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
              </div>
            <?php
              }
            }
            
           ?>
            </div>
            
          </div>
        </div>

       
      </div>
    </div>
  </div>
</section>

</body>
</html>