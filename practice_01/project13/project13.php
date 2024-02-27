<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học</title>
    <style>
        
        *{
            padding: 0;
            margin: 0;

        }
        .head {
            display: flex;
            flex-wrap: wrap;
        }

        .cour { 
            background-color: #f9f9f9; 
            padding: 10px;
            border-right: 2px solid white; 
            margin-bottom: 20px; 
            flex: 1 0 33.33%;
            box-sizing: border-box;
            background-color: black;
            color: white;
        } 
        .cour img {
            height: 250px;
            width: 100%;
        }
        .cour:hover {
           background-color:gray;
           color: black;
           cursor: pointer;
        }

    </style>
</head>
<body>
    <?php
        $cours = [
            [
                'img' => '<img src="img/img1.jpg">',
                'title' => 'Học viện quốc tế',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ 
                    Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên 
                    quốc tế.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24', 
                'duration' => '2 - 2.5 năm' 
            ],
            [
                'img' => '<img src="img/img2.png">',
                'title' => 'Lập trình web fullstack',
                'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. Trang bị từ 
                font-end đến back-end, xây dựng website hoàn chỉnh sau khóa học.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24', 
                'duration' => '6 tháng'
            ],
            [
                'img' => '<img src="img/img3.png">',
                'title' => 'Lập trình java fullstack',
                'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, các ứng dụng doanh nghiệp sử dụng J2EE, Serlet, JSP, Spring Framework, EJB, ...',
                'fee' => 'giảm 15% học phí',
                'start_date' => '2/2/24', 
                'duration' => '236 giờ'
            ],
            [
                'img' => '<img src="img/img4.webp">',
                'title' => 'Học viện quốc tế',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ 
                    Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên 
                    quốc tế.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24', 
                'duration' => '2 - 2.5 năm' 
            ],
            [
                'img' => '<img src="img/img5.png">',
                'title' => 'Lập trình web fullstack',
                'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. Trang bị từ 
                font-end đến back-end, xây dựng website hoàn chỉnh sau khóa học.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24', 
                'duration' => '6 tháng'
            ],
            [
                'img' => '<img src="img/img6.jpg">',
                'title' => 'Lập trình java fullstack',
                'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, các ứng dụng doanh nghiệp sử dụng J2EE, Serlet, JSP, Spring Framework, EJB, ...',
                'fee' => 'giảm 15% học phí',
                'start_date' => '2/2/24', 
                'duration' => '236 giờ'
            ]
        ];

        
        echo '<div class="head">';
        for ($i = 0; $i < count($cours); $i++) {
            echo '<div class="cour">';
            echo $cours[$i]['img'];
            echo '<h2>' . $cours[$i]['title'] . '</h2>'; 
            echo '<p>' . $cours[$i]['description'] . '</p>'; 
            echo '<p>Học phí: ' . $cours[$i]['fee'] . '</p>'; 
            echo '<p>Khải giảng: ' . $cours[$i]['start_date'] . '</p>'; 
            echo '<p>Thời lượng: ' . $cours[$i]['duration'] . '</p>'; 
            echo '</div>';
            }
        echo '</div>';
    ?>
</body>
</html>
