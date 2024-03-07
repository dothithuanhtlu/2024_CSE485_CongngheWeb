<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="upload.css">
    <title>Upload Avatar</title>
</head>

<body>
    <?php
    $user =
        [
            "id" => 1,
            "name" => "Jonh Doe",
            "email" => "Johndoe@example.com",
            "avatar" => '<img src="./img/shinHeartSign.jpg">'
        ];

    ?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <h2>Profile Information</h2>
        <!-- name -->
        <label for="name">Full Name </label>
        <input type="text" name="name" value="<?php echo $user['name']; ?>"> <br>
        <!-- email -->
        <label for="email">Email </label>
        <input type="text" name="emai" value="<?php echo $user['email']; ?>">
        <br>
        <!-- avatar -->
        <label for="avatar">Avatar</label>
        <input type="file" name="avatar" accept="image/*">
        <br>
        <button type="submit">Update Profile</button>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $errors = [];
            $user['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $allowedExtensions = ['jpg', 'jpeg', 'png'];
            $maxSize = 1048576;
            $targetDir = "./img/shinHearSign";

            if (!empty($_FILES['avatar']['tmp_name'])) {
                $fileInfo = pathinfo($_FILES['avatar']['name']);
                if (!in_array($fileInfo['extension'], $allowedExtensions)) {
                    $errors[] = "Only JPG, JPEG, and PNG files are allowed.";
                } else {
                    $fileName = uniqid() . "." . $fileInfo['extension'];
                    $targetFile = $targetDir . $fileName;
                    if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile)) {
                    }
                }
            }
        }
        ?>

    </form>
</body>

</html>