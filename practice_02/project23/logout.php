<?php
    session_start();

    if (isset($_SESSION['user_id'])) {
        unset($_SESSION['user_id']);
        setcookie('login_in', true, time() - 60 * 60 * 24 * 30, "/");
        header('Location: login.php');
    }
?>