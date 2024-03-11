<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 10px;
        }

        .item {
            background-color: #ccc;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="item">Khối 1</div>
        <div class="item">Khối 2</div>
        <div class="item">Khối 3</div>
        <div class="item">Khối 4</div>
    </div>
</body>

</html>