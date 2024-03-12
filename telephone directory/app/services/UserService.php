<?php
require '../models/User.php';
require_once('../config/Connection.php');
class UserService
{
    public function isDangNhap($name, $pass)
    {
        try {
            $con = new Connection();
            $conn = $con->connect();
            if ($conn == null) {
                die("khong the ket noi!");
            } else {
                $sql = "SELECT * FROM users WHERE username = '$name' AND password = '$pass'";
                $statement = mysqli_query($conn, $sql);
                $users = [];
                while ($row = mysqli_fetch_array($statement)) {
                    $user = new User($row['Username'], $row['Password'], $row['Role'], $row['EmployeeID']);
                    $users[] = $user;
                }
                return $users;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
