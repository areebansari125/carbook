<?php 
include 'header.php';
include 'config.php';

if(isset($_POST['add'])){
    $car_name = $_POST['car_name'];
    $type = $_POST['type'];

    $img1 = $_FILES['file1'];
    $image = $img1['name'];

    $insert = "INSERT INTO `cars` (`car_name`, `type`, `status`,`image`) VALUES ('{$car_name}', '{$type}', 'Available','{$image}')";
    $query = mysqli_query($conn,$insert);
    if($query){
        echo "success";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-4 d-none d-lg-block bg-register-image"><img class="p-5" src="./img/fc2.png" alt=""></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Add New Car</h1>
                            </div>
                            <form method="post" enctype="multipart/form-data" class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="car_name" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Car Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="type" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Type">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="file" name="file1" class="form-control form-control-user" id="file1"
                                        >
                                    </div>
                                </div>
                                
                                <button class="btn btn-primary btn-user btn-block" type="submit" name="add" id="add">Add Car

                                </button>
                                <hr>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>