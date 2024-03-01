<?php require_once 'users_data.php'; ?>

<?php
    if($_SERVER['REQUEST_METHOD']=='POST') {
        session_start();
        if(isset($_POST['user']) && isset($_POST['pass'])) {
            $username = $_POST['user'];
            $password = $_POST['pass'];

            $user_found = false;
            foreach($users as $u) {
                if($u['username']==$username &&  password_verify($password,
                $u['password'])) {
                    $user_found=true;
                    $_SESSION['user_id'] = $u['username'];
                    $_SESSION['user_role'] = $u['role'];
                    break;
                }
            }
            if($user_found) {
                setcookie('log_in', true, time()+60*60*24*30);
                header('Location: profile.php');
            }
            else {
                echo 'Invalid username or password';
            }
        }
    }
    

?>