<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page.css">
    <title>Phan trang</title>
</head>

<body>
    <?php
    $products = [
        [
            "id" => 1,
            'img' => '<img src="./img/tshirt.jfif">',
            "name" => "T-Shirt",
            "price" => 15.99,
            "description" => "A comfortable and stylish T-Shirt."
        ],
        [
            "id" => 2,
            'img' => '<img src="./img/shampoo.jfif">',
            "name" => "Shampoo",
            "price" => 23,
            "description" => "A comfortable and stylish Jean."
        ],
        [
            "id" => 3,
            'img' => '<img src="./img/balo.jfif">',
            "name" => "Balo",
            "price" => 24,
            "description" => "A comfortable and stylish Jean."
        ],
        [
            "id" => 4,
            'img' => '<img src="./img/woodenchair.jfif">',
            "name" => "Wooden chair",
            "price" => 53,
            "description" => "A comfortable and stylish Jean."
        ],
    ];
    $itemsPerPage = 3; // Số lượng sản phẩm muốn hiển thị
    if (isset($_GET['page'])) { // Trang hiện tại
        $currentPage = $_GET['page'];
    } else {
        $currentPage = 1;
    }
    // Tính tổng số trang
    $totalPages = ceil(count($products) / $itemsPerPage);
    // Lấy các sản phẩm cho trang hiện tại
    $currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
    // In các sản phẩm
    echo '<div class="product_list">';
    foreach ($currentPageItems as $product) {
        echo '<div class="product">';
        echo '<p>' . $product['img'] . '</p>';
        echo '<p>' . $product['id'] . '</p>';
        echo '<h3>' . $product['name'] . '</h3>';
        echo '<p class="price">' . '$' . $product['price'] . '</p>';
        echo '<p class="description">' . $product['description'] . '</p>';
        echo '</div>';
    }
    echo '</div>';

    // In phân trang
    echo '<div class="pagination">';
    if ($currentPage > 1) {
        echo '<a href="?page=' . ($currentPage - 1) . '" class="abc">Previous</a>';
    }

    for ($i = 1; $i <= $totalPages; $i++) {
        if ($i == $currentPage) {
            echo '<span class="active">' . $i . '</span>';
        } else {
            echo '<a href="?page=' . $i . '" class="abc">' . $i . '</a>';
        }
    }

    if ($currentPage < $totalPages) {
        echo '<a href="?page=' . ($currentPage + 1) . '" class="abc">Next</a>';
    }
    echo '</div>';
    ?>

</body>

</html>