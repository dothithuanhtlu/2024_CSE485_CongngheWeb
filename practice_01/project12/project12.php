<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .head {
            height: 60px;
            background-color: darkblue;
        }

        .head .line li {
            color: white;
            display: inline-block;
            border-right: 1px solid white;
            line-height: 30px;
            margin-top: 15px;
            padding: 0 30px;
            font-size: 17px;
        }

        .head .line li a {
            text-decoration: none;
            color: white;
        }

        .head .line li:last-child {
            border-right: none;
        }

        .head .line li:hover {
            background-color: yellow;
            cursor: pointer;
        }

        .head .line li:hover a {
            color: black;
            text-decoration: underline;
        }
    </style>

</head>

<body>
    <?php
    $navItems = [
        "Giới thiệu",
        "Tin tức & Thông báo",
        "Tuyển sinh",
        "Đào tạo",
        "Nghiên cứu",
        "Đối ngoại",
        "Văn bản",
        "Sinh viên",
        "Liên hệ"
    ];

    echo '<nav class="head"><ul class="line">';
    foreach ($navItems as $item) {
        echo '<li><a href="#">' . htmlspecialchars($item) . ' </a></li>';
    }
    echo '</ul></nav>';
    ?>
</body>

</html>
