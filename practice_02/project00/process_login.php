<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //Lay ra du lieu tu FORM
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    //Kiem tra CSDL (chua hoc)
    if($user == 'dungkt' && $pass == 'abc'){ //THU Can cuoc cong dan
        session_start();
        $_SESSION['isLogin'] = $user; //CAPTHE
        header("Location:admin/index.php");//CHUYEN HUONG MAC DINH
    }else{
        header("Location:login.php?error=haserror");
    }
}