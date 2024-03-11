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
                        <a href="#" class="nav-link">
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
                        <button class="btn btn-dark signIn-btn" type="button">Sign Up</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-dark LogIn-btn" type="button">Login</button>
                    </li>
                </ul>
            </div>

        </nav>
    </header>

    <content>

        <div class="navColum">
            <ul class="nav flex-column">
                <li class="nav-item dropdwon dropdown1">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                        <b>Sales</b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#" class="dropdown-item" id="marketing">
                                Marketing
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item" id="hr">
                                HR
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item" id="it">
                                IT
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdwon dropdown1">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                        <b>Finance</b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#" class="dropdown-item" id="operations">
                                Operations
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item" id="reaseachDevelopment">
                                Reseach & Development
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdwon dropdown1">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                        <b>Customer Support</b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#" class="dropdown-item" id="qualityAssurance">
                                Quality Assurance
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item" id="administration">
                                Administration
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>

        <div class="article">
            <div class="hotNew1">
                <?php
                $hotNew = [
                    [
                        "id" => "1",
                        "img" => "<img src = '/app/views/img/cay1.jpg'>",
                        "title" => "Trường Đại học Thủy Lợi tổ chức Tết trồng cây 'Đời đời nhớ ơn Bác Hồ'",
                        "time" => "09/03/2024 20:16"
                    ],
                    [
                        "id" => "2",
                        "img" => "<img src = '/app/views/img/pnVN.jpg'>",
                        "title" => "Trường Đại học Thủy lợi tổ chức kỷ niệm 114 năm Ngày Quốc tế Phụ nữ 8/3 và 1984 năm Khởi nghĩa Hai Bà Trưng",
                        "time" => "08/03/2024 16:40"
                    ],
                    [
                        "id" => "3",
                        "img" => "<img src = '/app/views/img/kiNiem.jpg'>",
                        "title" => "Lễ trao quyết định thành lập Viện Nghiên cứu ứng dụng công nghệ và hợp tác Doanh nghiệp",
                        "time" => "07/03/2024 15:27"
                    ],
                    [
                        "id" => "4",
                        "img" => "<img src = '/app/views/img/thang.webp'>",
                        "title" => "Lời khẳng định đẳng cấp của đương kim á quân Trường ĐH Thủy lợi",
                        "time" => "04/03/2024 22:38"
                    ],
                    [
                        "id" => "5",
                        "img" => "<img src = '/app/views/img/mannhan.webp'>",
                        "title" => "Chiến thắng quá mãn nhãn của Trường ĐH Thủy lợi",
                        "time" => "02/03/2024 10:50"
                    ]

                ];
                foreach ($hotNew as $key => $value) {
                    echo '<div class="hotNew" >';
                    echo '<p class = "imgHotNew">' . $value['img'] . '</p>';
                    echo '<h5>' . $value['title'] . '</h5>';
                    echo '<p class="time">' . $value['time'] . '</p>';
                    echo '</div>';
                }
                ?>
            </div>
            <!--profile card -->
            <div class="profileEmployee">
                <!-- MANAGER -->
                <div class="card Manager">
                    <img class="card-img-top" src="/app/views/img/avtnam1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">
                            John Doe
                        </h4>
                        <p class="card-text">
                            <i class="fa-solid fa-location-dot" style="color: #11207a;"></i>
                            123 Main St
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-envelope" style="color: #11207a;"></i>
                            john.doe@example.com
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-phone" style="color: #11207a;"></i>
                            123-456-7890
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-user" style="color: #11207a;"></i>
                            Manager
                        </p>
                    </div>
                </div>
                <!-- MARKETING -->
                <div class="card Marketing">
                    <img class="card-img-top" src="/app/views/img/avtnam2.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">
                            Jane Smith
                        </h4>
                        <p class="card-text">
                            <i class="fa-solid fa-location-dot" style="color: #11207a;"></i>
                            456 Elm St
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-envelope" style="color: #11207a;"></i>
                            jane.smith@example.com
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-phone" style="color: #11207a;"></i>
                            987-654-3210
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-user" style="color: #11207a;"></i>
                            Marketing Specialist
                        </p>
                    </div>
                </div>
                <!-- HR -->
                <div class="card HR">
                    <img class="card-img-top" src="/app/views/img/avtnam3.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">
                            Mike Johnson
                        </h4>
                        <p class="card-text">
                            <i class="fa-solid fa-location-dot" style="color: #11207a;"></i>
                            789 Oak St
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-envelope" style="color: #11207a;"></i>
                            mike.johnson@example.com
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-phone" style="color: #11207a;"></i>
                            555-123-4567
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-user" style="color: #11207a;"></i>
                            HR Coordinator
                        </p>
                    </div>
                </div>
                <!-- IT -->
                <div class="card IT">
                    <img class="card-img-top" src="/app/views/img/avtnu4.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">
                            Sarah Williams
                        </h4>
                        <p class="card-text">
                            <i class="fa-solid fa-location-dot" style="color: #11207a;"></i>
                            321 Pine St
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-envelope" style="color: #11207a;"></i>
                            sarah.williams@example.com
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-phone" style="color: #11207a;"></i>
                            999-888-7777
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-user" style="color: #11207a;"></i>
                            IT Technician
                        </p>
                    </div>
                </div>
                <!-- Financial Analyst -->
                <div class="card Financial">
                    <img class="card-img-top" src="/app/views/img/avtnam1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">
                            David Brown
                        </h4>
                        <p class="card-text">
                            <i class="fa-solid fa-location-dot" style="color: #11207a;"></i>
                            555 Walnut St
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-envelope" style="color: #11207a;"></i>
                            david.brown@example.com
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-phone" style="color: #11207a;"></i>
                            111-222-3333
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-user" style="color: #11207a;"></i>
                            Financial Analyst
                        </p>
                    </div>
                </div>
                <!-- Operations Manager -->
                <div class="card Operations">
                    <img class="card-img-top" src="/app/views/img/avtnu2.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">
                            Emily Davis
                        </h4>
                        <p class="card-text">
                            <i class="fa-solid fa-location-dot" style="color: #11207a;"></i>
                            777 Maple St
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-envelope" style="color: #11207a;"></i>
                            emily.davis@example.com
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-phone" style="color: #11207a;"></i>
                            444-555-6666
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-user" style="color: #11207a;"></i>
                            Operations Manager
                        </p>
                    </div>
                </div>
                <!-- Research Scientist -->
                <div class="card Research">
                    <img class="card-img-top" src="/app/views/img/avtnu1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">
                            Michael Smith
                        </h4>
                        <p class="card-text">
                            <i class="fa-solid fa-location-dot" style="color: #11207a;"></i>
                            999 Cedar St
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-envelope" style="color: #11207a;"></i>
                            michael.smith@example.com
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-phone" style="color: #11207a;"></i>
                            777-888-9999
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-user" style="color: #11207a;"></i>
                            Research Scientist
                        </p>
                    </div>
                </div>
                <!-- Customer Support Representative -->
                <div class="card Customer">
                    <img class="card-img-top" src="/app/views/img/avtnu3.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">
                            Jessica Lee
                        </h4>
                        <p class="card-text">
                            <i class="fa-solid fa-location-dot" style="color: #11207a;"></i>
                            222 Birch St
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-envelope" style="color: #11207a;"></i>
                            jessica.lee@example.com
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-phone" style="color: #11207a;"></i>
                            222-333-4444
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-user" style="color: #11207a;"></i>
                            Customer Support Representative
                        </p>
                    </div>
                </div>
                <!-- QA Engineer -->
                <div class="card QA">
                    <img class="card-img-top" src="/app/views/img/avtnam4.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">
                            Matthew Johnson
                        </h4>
                        <p class="card-text">
                            <i class="fa-solid fa-location-dot" style="color: #11207a;"></i>
                            444 Oak St
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-envelope" style="color: #11207a;"></i>
                            matthew.johnson@example.com
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-phone" style="color: #11207a;"></i>
                            888-999-0000
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-user" style="color: #11207a;"></i>
                            QA Engineer
                        </p>
                    </div>
                </div>
                <!-- Administrator -->
                <div class="card Ad">
                    <img class="card-img-top" src="/app/views/img/avtnu5.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">
                            Sophia Wilson
                        </h4>
                        <p class="card-text">
                            <i class="fa-solid fa-location-dot" style="color: #11207a;"></i>
                            666 Pine St
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-envelope" style="color: #11207a;"></i>
                            sophia.wilson@example.com
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-phone" style="color: #11207a;"></i>
                            666-777-8888
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-user" style="color: #11207a;"></i>
                            Administrator
                        </p>
                    </div>
                </div>
            </div>
        </div>
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