<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học</title>
    <style>
        /* Thêm các định kiểu CSS của bạn ở đây */
        * {
            padding: 0;
            margin: 0;

        }

        .nav {
            display: flex;
            flex-wrap: wrap;
        }

        .course {
            background-color: gray;
            padding: 10px;
            border-right: 2px solid rebeccapurple;
            margin-bottom: 20px;
            flex: 1 0 33.33%;
            box-sizing: border-box;
            color: black;
        }

        .course img {
            height: 250px;
            width: 100%;
        }

        .course:hover {
            background-color: green;
            color: yellow;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php
    // Dữ liệu khóa học lưu động trong mảng
    $courses = [
        [
            'img' => '<img src = "img/img1.jpg"',
            'title' => 'Lập trình viên quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm',
        ],
        [
            'img' => '<img src = "img/img2.png"',
            'title' => 'Lập trình web fullstack',
            'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
            'fee' => '15% học phí',
            'start_date' => '2/2024',
            'duration' => '6 tháng',
        ],
        [
            'img' => '<img src = "img/img3.png"',
            'title' => 'Lập trình Java fullstack',
            'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, các ứng dụng doanh nghiệp sử dụngJ2EE, Servlet, JSP, Spring Framework, EJB,...',
            'fee' => '15% học phí',
            'start_date' => '2/2024',
            'duration' => '236 giờ',
        ],
        [
            'img' => '<img src = "img/img4.webp"',
            'title' => 'Lập trình PHP & Javavel',
            'description' => 'PHP là một trong các ngôn ngữ thiết kế web mạnh nhất. Khóa học trang bị kỹ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp Laravel Framework.',
            'start_date' => '2/2024',
            'fee' => '9.600.000 VND',
            'duration' => '36 giờ',
        ],
        [
            'img' => '<img src = "img/img5.png"',
            'title' => 'Khóa học lập trình .NET',
            'description' => 'Phát triển ứng dụng web sử dụng nền tảng ASP.NET Core MVC. Để học tốt khóa học yêu cầu học viên đã có kiến thức C# và Frontend.',
            'start_date' => '2/2024',
            'duration' => '40 giờ',
            'fee' => '9.600.000 VND',

        ],
        [
            'img' => '<img src = "img/img6.jpg"',
            'title' => 'Lập trình SQL Server',
            'description' => 'Trang bị những kiến thức nền tảng vững chắc về SQL Server như các kỹ thuật: lọc dữ liệu, phân tích, thiết kế và quản trị cơ sở dữ liệu....',
            'start_date' => '2/2024',
            'fee' => '4.500.000 VND',
            'duration' => '30 giờ',
        ],

    ];
    // Hiển thị danh sách khóa học
    echo '<div class = "nav">';
    foreach ($courses as $course) {

        echo '<div class="course">';
        echo '<h2>' . $course['title'] . '</h2>';
        echo '<p>' . $course['img'] . '</p>';
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