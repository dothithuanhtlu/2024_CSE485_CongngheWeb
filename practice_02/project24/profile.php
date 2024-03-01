<?php require_once 'users_data.php'; ?>

<?php
    session_start();

    if(!isset($_SESSION['user_id']) && !isset($_COOKIE['log_in'])) {
        header('Location: login.php');
    }

    $username = $_SESSION['user_id'];
    $user = null;

    foreach($users as $u) {
        if($u['username']==$username) {
            $user = $u;
            break;
        }
    }

    if($user) {
        $user_role = $_SESSION['user_role'];
        echo "Welcom, " .$user['username']. "!";
        echo "<br>Email: " .$user['email'];

        if($authorization_levels[$user_role]['edit_profile']) {
            echo "<br>Edit basic profile information<a href='edit_user.php'>Edit</a>";
        }

        if($user_role=="admin" && $authorization_levels[$user_role]['access_admin_panel']) {
            echo "<br><a href='admin_panel.php'>Admin Panel</a>";
        }
    }
    else {
        echo "Error: User not found.";
    }

?>