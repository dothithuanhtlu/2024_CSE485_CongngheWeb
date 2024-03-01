<?php
    session_start();//DICH VU BAO VE
    if(!$_SESSION['isLogin']){
        header("Location:../login.php");
    }
?>
<!--Noi dung duoc bao ve-->
<h1>Homepage of Dashboard</h1>
<a href="../logout.php">Logout</a>