<?php
include ('../header.php/header.php');
require_once ('../../services/DepartmentService.php');
$dpS = new DepartmentService();
$dpSer = $dpS->getAllNamesDepartment();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <style>
        .col-md-4 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <?php foreach ($dpSer as $dp): ?>
        <div class="col-md-4">
            <div class="card Manager">
                <img class="card-img-top" src="/app/views/img/avtnam1.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">
                        <?php echo $dp->getName();?>
                    </h4>
                    <p class="card-text">
                        <i class="fa-solid fa-location-dot" style="color: #11207a;"></i>
                        <?php echo $dp->getAdd();?>
                    </p>
                    <p class="card-text">
                        <i class="fa-solid fa-envelope" style="color: #11207a;"></i>
                        <?php echo $dp->getEmail();?>
                    </p>
                    <p class="card-text">
                        <i class="fa-solid fa-phone" style="color: #11207a;"></i>
                        <?php echo $dp->getPhone();?>
                    </p>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>
</body>
</html>