<?php require_once 'users_data.php'; ?>
<?php
    session_start();

    if(!isset($_SESSION['user_id']) || !isset($_COOKIE['login_in'])) {
        header("Location: login.php");
    }

    $username = $_SESSION['user_id'];
    $user = null;
    foreach ($users as $u) {
        if ($u['username'] === $username) {
            $user = $u;
            break;
        }
    }

    if ($user) {
        // Display user information
        echo "Welcome, " . $user['name'] . "!";
        echo "<br>Email: " . $user['email'];
    } 
    else {
        echo "Error: User not found.";
    }

?>
<br>
<a href="logout.php">Logout</a>