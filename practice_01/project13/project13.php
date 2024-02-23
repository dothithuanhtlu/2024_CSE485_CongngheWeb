<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học</title>
    <style>
        /* Thêm các định kiểu CSS của bạn ở đây */ 
        *{
            padding: 0;
            margin: 0;

        }
        .nav {
            display: flex;
            flex-wrap: wrap;
        }

        .course { 
            background-color: #f9f9f9; 
            padding: 10px;
            border-right: 2px solid white; 
            margin-bottom: 20px; 
            flex: 1 0 33.33%;
            box-sizing: border-box;
            background-color: black;
            color: white;
        } 

        .course:hover {
            background-color:darkkhaki;
           color: black;
           cursor: pointer;
        }

    </style>
</head>
<body>
    <?php
        $courses = [
            [
                'title' => 'Học viện quốc tế',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ 
                    Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên 
                    quốc tế.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24', 
                'duration' => '2 - 2.5 năm' 
            ],
            [
                'title' => 'Lập trình web fullstack',
                'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. Trang bị từ 
                font-end đến back-end, xây dựng website hoàn chỉnh sau khóa học.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24', 
                'duration' => '6 tháng'
            ],
            [
                'title' => 'Lập trình java fullstack',
                'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, các ứng dụng doanh nghiệp sử dụng J2EE, Serlet, JSP, Spring Framework, EJB, ...',
                'fee' => 'giảm 15% học phí',
                'start_date' => '2/2/24', 
                'duration' => '236 giờ'
            ],
            [
                'title' => 'Học viện quốc tế',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ 
                    Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên 
                    quốc tế.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24', 
                'duration' => '2 - 2.5 năm' 
            ],
            [
                'title' => 'Lập trình web fullstack',
                'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. Trang bị từ 
                font-end đến back-end, xây dựng website hoàn chỉnh sau khóa học.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24', 
                'duration' => '6 tháng'
            ],
            [
                'title' => 'Lập trình java fullstack',
                'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, các ứng dụng doanh nghiệp sử dụng J2EE, Serlet, JSP, Spring Framework, EJB, ...',
                'fee' => 'giảm 15% học phí',
                'start_date' => '2/2/24', 
                'duration' => '236 giờ'
            ]
        ];

        //
        echo '<div class="nav">';
        foreach($courses as $course) {

            echo '<div class="course">';
            echo '<h2>' . $course['title'] . '</h2>'; 
            echo '<p>' . $course['description'] . '</p>'; 
            echo '<p>Học phí: ' . $course['fee'] . '</p>'; 
            echo '<p>Khải giảng: ' . $course['start_date'] . '</p>'; 
            echo '<p>Thời lượng: ' . $course['duration'] . '</p>'; 
            echo '</div>';

        }
        echo '</div>';
    ?>
</body>
</html>