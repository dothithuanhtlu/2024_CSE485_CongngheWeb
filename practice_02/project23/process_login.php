<?php require_once 'users_data.php'; ?>

<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        session_start();

        if (isset($_POST['user']) && isset($_POST['pass'])) {
            $username = $_POST['user'];
            $password = $_POST['pass'];

            // Kiểm tra người dùng
            $user = null;
            foreach ($users as $u) {
                if ($u['username'] == $username) {
                    $user = $u;
                    break;
                }
            }

            // Kiểm tra mật khẩu đã nhập
            if ($user && password_verify($password, $user['password'])) {
                // Đăng nhập thành công
                $_SESSION['user_id'] = $user['username'];

                // Đặt cookie 'login_in'
                setcookie('login_in', true, time() + 60 * 60 * 24 * 30, "/");

                header('Location: profile.php');
            } else {
                echo "Invalid username or password!";
            }
        }
    }
?>