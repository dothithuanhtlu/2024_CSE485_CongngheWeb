<?php
require_once '../../services/DepartmentService.php';
require_once '../../models/Department.php';
require_once '../../config/Connection.php';
$getAllDepartment = new DepartmentService();
$getAllDepartment1 = $getAllDepartment->getAllNamesDepartmentParent();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/app/public/assets/home.css">
    <title>Home</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm">
            <div class="container-fluid">
                <!-- Links -->
                <a href="#" class="navbar-brand">
                    <img class="nav-link" src='./img/logoThuyloi.png' width='px' height='50px'>
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <b> Home</b>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <b> New</b>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <b>Contact Us</b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="https://www.facebook.com/daihocthuyloi1959/?fref=ts" target="_self" class="dropdown-item">
                                    <i class="fab fa-facebook"></i>
                                    Facebook
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/user/daihocthuyloi" class="dropdown-item" target="_self">
                                    <i class="fab fa-youtube"></i>
                                    Youtube
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/Daihocthuyloihn" class="dropdown-item" target="_self">
                                    <i class="fab fa-twitter"></i>
                                    Twitter
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- SEARCH -->
                <form class="d-flex">
                    <input class="form-control searchBox me-4" type="search" placeholder="Nhập từ khóa.." aria-label="Search">
                    <button class="btn btn-dark searchButton" type="submit">Search</button>
                </form>
                <!-- SIGNUP LOGIN -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <button class="btn btn-dark signIn-btn" type="button">
                            <a href="/app/views/form/signin.php">Sign In</a>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-dark LogIn-btn" type="button">
                            <a href="/app/views/form/signUp.php">Sign Up</a>
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <content>
        <div class="navColum">
            <ul class="nav flex-column">
                <?php foreach ($getAllDepartment1 as $abc) : ?>
                    <li class="nav-item dropdwon dropdown1">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                            <?php echo $abc->getName(); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <?php $getAllChildDepart = $getAllDepartment->getAllChildDepart($abc->getID()); ?>
                            <?php foreach ($getAllChildDepart as $abc1) : ?>
                                <li>
                                    <a href="#" class="dropdown-item" id="marketing">
                                        <?php echo $abc1->getName(); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </content>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

