<?php include './products.php' ?>
<link rel="stylesheet" type="text/css" href="./asset/index.css">
<?php
    $itemsPerPage = 4;
    $totalPages = ceil(count($products) / $itemsPerPage);
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    $currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>

<div class="product-list">
    <?php foreach($currentPageItems as $product): ?>
        <div class="product">
            <?php echo $product['img']; ?>
            <?php echo '<h3>'.$product['name'].'</h6>'; ?>
            <?php echo '<p>'.$product['price'].'</p>'; ?>
            <?php echo '<p>'.$product['description'].'</p>'; ?>
        </div>
    <?php endforeach; ?>
</div>

<div class="pagination" method="get">
    <?php
        if ($currentPage > 1) {
            echo '<a href="?page=' . ($currentPage - 1) . '">Previous</a>';
        }
        for ($i = 1; $i <= $totalPages; $i++) {
            if ($i == $currentPage) {
                echo '<span class="active">' . $i . '</span>';
            } else {
                echo '<a href="?page=' . $i . '">' . $i . '</a>';
            }
        }
        if ($currentPage < $totalPages) {
            echo '<a href="?page=' . ($currentPage + 1) . '">Next</a>';
        }
    ?>
</div>