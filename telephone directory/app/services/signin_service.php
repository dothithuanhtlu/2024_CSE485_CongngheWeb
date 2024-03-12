<?php
require('UserService.php');
class signin
{
    public function dangNhap()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { //kiem tra phuong thuc co phai la post hay khong
            $name = $_POST['username'];
            $pass = $_POST['password'];
            if (empty($name) || empty($pass)) {
                echo '<script>alert("Hay dien day du thong tin!"); window.history.back();</script>';
            } else {
                $users = new UserService();
                $userArr = $users->isDangNhap($name, $pass);
                if (count($userArr) > 0) {
                    foreach ($userArr as $user) {
                        if ($user->getRole() == 'Admin users') {
                            header('Location: ../views/users/indexAd.blade.php');
                        } else {
                            header('Location:../views/users/index.blade.php');
                        }
                    }
                } else {
                    echo '<script>alert("Tài khoản hoặc mật khẩu không đúng!"); window.history.back();</script>';
                }
            }
        }
    }
}
