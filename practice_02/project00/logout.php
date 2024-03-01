<?php
session_start();//DICH VU BAO VE
if ($_SESSION['isLogin']) {
    unset($_SESSION['isLogin']);//HUY PHIEN = THU HOI THE
    header("Location:login.php"); //CHUYEN HUONG
}
