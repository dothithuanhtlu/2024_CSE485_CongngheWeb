<?php include './products.php' ?>
<?php
    $itemsPerPage = 4;
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    $totalPages = ceil(count($products) / $itemsPerPage);
    $currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Ecomercial Shop</h1>
        <div class="row">
            <?php foreach ($currentPageItems as $product) { ?>
                <div class="col-3">
                    <?php echo $product['img']; ?>
                    <div class="card-body row-3">
                        <h5 class="card-title"><?php echo $product['name'] ?></h5>
                        <p class="card-text"><?php echo $product['description'] ?></p>
                        <p class="card-text"><?php echo $product['price'] ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="pagination">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php if ($currentPage > 1): ?>
                        <li class="page-item"><a class="page-link" href="?page=<?php echo $currentPage - 1; ?>">Previous</a></li>
                    <?php endif; ?>
                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <li class="page-item"><a class="page-link" href="?page=<?php echo $i?>"><?php echo $i ?></a></li>
                    <?php endfor ?>
                    <?php if ($currentPage < $totalPages): ?>
                        <li class="page-item"><a  class="page-link" href="?page=<?php echo $currentPage + 1; ?>">Next</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
</body>

</html>