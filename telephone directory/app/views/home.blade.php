<!-- <?php
        // require_once '../services/DepartmentService.php';
        // require_once '../models/Department.php';
        // require_once '../config/Connection.php';
        // $getAllDepartment = new DepartmentService();
        // $getAllDepartment1 = $getAllDepartment->getAllNamesDepartmentParent();
        ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
                    <li class="nav-item ">
                        <a href="ROOT.'app/views/home.blade.php'" class="nav-link">
                            <b> Home</b>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="" class="nav-link">
                            <b> New</b>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <b>
                                Contact Us
                            </b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="https://www.facebook.com/daihocthuyloi1959/?fref=ts" target="_self" class="dropdown-item">
                                    <i class="fa-brands fa-facebook"></i>
                                    Facebook
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/user/daihocthuyloi" class="dropdown-item" target="_self">
                                    <i class="fa-brands fa-youtube"></i>
                                    Youtube
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/Daihocthuyloihn" class="dropdown-item" target="_self">
                                    <i class="fa-brands fa-twitter"></i>
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
                <!-- SIGUP LOGIN -->
                <ul class="navbar-nav">
                    <!-- NAV - ITEM -->
                    <li class="nav-item">
                        <button class="btn btn-dark signIn-btn" type="button">
                            <a href="/app/views/form/signin.php"> Sign In</a>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-dark LogIn-btn" type="button">
                            <a href="/app/views/form/signUp.php"> Sign Up</a>
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
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="?id=<?php echo $abc->getID(); ?>">
                            <?php echo $abc->getName(); ?>
                        </a>
                        <ul>
                            <?php $getAllChildDepart = $getAllDepartment->getAllChildDepart($abc->getID()); ?>
                            <?php foreach ($getAllChildDepart as $abc1) : ?>
                                <li>
                                    <a href="?id=<?php echo $abc1->getID(); ?>" class="dropdown-item" id="marketing">
                                        <?php echo $abc1->getName(); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php
        // Kiểm tra xem tham số "id" có tồn tại trong URL hay không
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            // Tiếp tục xử lý với biến $id
            $a = $getAllDepartment->getDepart($id);
        ?>

            <div class="container">
                <div class="row">
                    <?php foreach ($a as $dp) : ?>
                        <div class="col-md-4">
                            <div class="card Manager">
                                <img class="card-img-top" src="/app/views/img/avtnam1.png" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <?php echo $dp->getName(); ?>
                                    </h4>
                                    <p class="card-text">
                                        <i class="fa-solid fa-location-dot" style="color: #11207a;"></i>
                                        <?php echo $dp->getAdd(); ?>
                                    </p>
                                    <p class="card-text">
                                        <i class="fa-solid fa-envelope" style="color: #11207a;"></i>
                                        <?php echo $dp->getEmail(); ?>
                                    </p>
                                    <p class="card-text">
                                        <i class="fa-solid fa-phone" style="color: #11207a;"></i>
                                        <?php echo $dp->getPhone(); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        <?php
        } else {
            // Xử lý khi không có tham số "id" trong URL
            echo '<div class="article">
            <div class="hotNew1">';
            $hotNew = [
                [
                    "id" => "1",
                    "img" => "<img src='/app/views/img/cay1.jpg'>",
                    "link" => "<a href='https://www.tlu.edu.vn/tin-tuc/truong-dai-hoc-thuy-loi-to-chuc-tet-26148' style='color:black; text-decor'</a>",
                    "title" => "Trường Đại học Thủy Lợi tổ chức Tết trồng cây 'Đời đời nhớ ơn Bác Hồ'",
                    "time" => "09/03/2024 20:16"
                ],
                [
                    "id" => "2",
                    "link" => "<a href='https://www.tlu.edu.vn/tin-tuc/truong-dai-hoc-thuy-loi-to-chuc-ky-niem-26146'</a>",
                    "img" => "<img src='/app/views/img/pnVN.jpg'>",
                    "title" => "Trường Đại học Thủy lợi tổ chức kỷ niệm 114 năm Ngày Quốc tế Phụ nữ 8/3 và 1984 năm Khởi nghĩa Hai Bà Trưng",
                    "time" => "08/03/2024 16:40"
                ],
                [
                    "id" => "3",
                    "link" => "<a href='https://www.tlu.edu.vn/tin-tuc/le-trao-quyet-dinh-thanh-lap-vien-26144' </a>",
                    "img" => "<img src='/app/views/img/kiNiem.jpg'>",
                    "title" => "Lễ trao quyết định thành lập Viện Nghiên cứu ứng dụng công nghệ và hợp tác Doanh nghiệp",
                    "time" => "07/03/2024 15:27"
                ],
                [
                    "id" => "4",
                    "link" => "<a href='https://www.tlu.edu.vn/tin-tuc/loi-khang-dinh-dang-cap-cua-duong-kim-a-26140'</a>",
                    "img" => "<img src='/app/views/img/thang.webp'>",
                    "title" => "Lời khẳng định đẳng cấp của đương kim á quân Trường ĐH Thủy lợi",
                    "time" => "04/03/2024 22:38"
                ],
                [
                    "id" => "5",
                    "link" => "<a href='https://www.tlu.edu.vn/tin-tuc/chien-thang-qua-man-nhan-cua-truong-dh-26139'</a>",
                    "img" => "<img src='/app/views/img/mannhan.webp'>",
                    "title" => "Chiến thắng quá mãn nhãn của Trường ĐH Thủy lợi",
                    "time" => "02/03/2024 10:50"
                ]
            ];

            foreach ($hotNew as $key => $value) {
                echo '<div class="hotNew">';
                echo '<p class="imgHotNew">' . $value['img'] . '</p>';
                echo '<h5>' . $value['title'] . '</h5>';
                echo '<p class="time">' . $value['time'] . '</p>';
                echo '<p>' . $value['link'] . '</p>';
                echo '</div>';
            }

            echo '</div>
        </div>';
        }
        ?>
    </content>
    <!-- FOOTER -->
    <footer>
        <div class="footerTop container-fluid">
            <p class="copyright">
                <i class="fa-solid fa-copyright"></i>
                DAI HOC THUY LOI
            </p>

            <ul class="contact">
                <li>
                    <a href="https://www.facebook.com/daihocthuyloi1959/?fref=ts">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/Daihocthuyloihn">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/user/daihocthuyloi">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </li>
            </ul>

        </div>
        <!-- footerBottom -->
        <div class="footerBottom container-fluid">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6327987232817!2d105.82215547393335!3d21.007351588516087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac8109765ba5%3A0xd84740ece05680ee!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBUaOG7p3kgbOG7o2k!5e0!3m2!1svi!2s!4v1709988792377!5m2!1svi!2s" width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="description">
                <p>TRUONG DAI HOC THUY LOI</p>
                Dia chi: 175 Tay Son, Dong Da, Ha Noi <br>
                Dien thoai:(024) 385222201 - Fax:(024) 35633351 <br>
                Email: phonghcth@tlu.edu.vn
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>