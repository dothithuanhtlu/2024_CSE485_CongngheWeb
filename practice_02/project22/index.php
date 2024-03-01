<?php
$user = [
    "id" => 1,
    "name" => "John Doe",
    "email" => "johndoe@example.com",
    "avatar" => "C:/Users/ASUS/OneDrive/Pictures/a.jpg" // Initial avatar URL
];
?>
<form action="index.php" method="post" enctype="multipart/form-data">
    <h2>Profile Information</h2>
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo $user['name']; ?>"
    required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo $user['email']; ?>"
    disabled>
    <br>
    <label for="avatar">Avatar:</label>
    <input type="file" name="avatar" accept="image/*">
    <br>
    <button type="submit">Update Profile</button>
</form>

<?php
    //check if form is submitted
    if($_SERVER['REQUEST_METHOD']=='POST') {
        
        $errors = [];
        //FILTER_SANITIZE_STRING được sử dụng để loại bỏ các ký tự đặc biệt không an toàn từ giá trị đó.
        $user['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);        //Handle avatar upload 
        $allowedExtensions = ['jpg', 'jpeg', 'png'];
        $maxSize = 1048576;
        $targetDir = "C:/Users/ASUS/OneDrive/Pictures"; //chứa đường dẫn đến thư mục nơi tệp sẽ được lưu trữ

        //nếu avatar được tải lên thì sẽ được lưu vào tệp tmp_name tạm thời
        if(!empty($_FILES['avatar']['tmp_name'])) {
            $fileInfo = pathinfo($_FILES['avatar']['name']);            //thông tin của tệp phần mở rộng không thỏa mãn $allowedExtensions
            if(!in_array($fileInfo['extension'], $allowedExtensions)) {
                $error[] = "Only JPG, JPED and PNG files are allowed.";
            }
            else if($_FILES['avatar']['size']>$maxSize) {
                $error[] = "File size must be less than 1MB.";
            }
            else {
                //hàm uniqid() tạo ra 1 ID duy nhất
                //tạo ra 1 tệp duy nhất bằng cách kết hợp chuỗi duy nhất(được tạo bởi uniqid) và phần mở rộng của tệp
                $fileName = uniqid() . "." . $fileInfo['extension'];
                //$targetFile chứa đường dẫn đầy đủ dếnd tệp sẽ được lưu trữ
                $targetFile = $targetDir . $fileName;
                //di chuyển tệp tạm thời vào đường dẫn $targetFile
                if(move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile)) {
                    $user['avatar'] = $targetFile;
                }
                else {
                    $error[] = "Failed to upload file.";
                }
            }

        }

        //handle errors or update profile
        if(empty($errors)) {
            //Update user profile in database or persistent storage(replace with your logic)
            echo "Profile updated successfully!";
        }
        else {
            echo "Errors: ";
            foreach($errors as $error) {
                echo "<br> $error";
            }
        }

    }
?>