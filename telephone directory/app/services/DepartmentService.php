<?php
class DepartmentService
{
    public function getAllNamesDepartment()
    {
        try {
            $con = new Connection();
            $conn = $con->connect();
            if ($conn == null) {
                die("Khong the ket noi SQL");
            } else {
                $sql = "SELECT * FROM departments";
                $statement = mysqli_query($conn, $sql);
                $khoa = [];
                while ($row = mysqli_fetch_array($statement)) {
                    $khoa1 = new Department($row["DepartmentID"], $row['DepartmentName'], $row['Address'], $row['Email'], $row['Phone'], $row['Logo'], $row['Website'], $row['ParentDepartmentID']);
                    $khoa[] = $khoa1;
                }
                return $khoa;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function getAllNamesDepartmentParent(){
        try {
            $con = new Connection();
            $conn = $con->connect();
            if ($conn == null) {
                die("Khong the ket noi SQL");
            } else {
                $sql = "SELECT * FROM departments WHERE ParentDepartmentID IS NULL;";
                $statement = mysqli_query($conn, $sql);
                $khoa = [];
                while ($row = mysqli_fetch_array($statement)) {
                    $khoa1 = new Department($row["DepartmentID"], $row['DepartmentName'], $row['Address'], $row['Email'], $row['Phone'], $row['Logo'], $row['Website'], $row['ParentDepartmentID']);
                    $khoa[] = $khoa1;
                }
                return $khoa;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function getDepart($id) {
        try {
            $con = new Connection();
            $conn = $con->connect();
            if ($conn == null) {
                die("Khong the ket noi SQL");
            } else {
                $sql = "SELECT * FROM departments WHERE DepartmentID = '$id'";
                $statement = mysqli_query($conn, $sql);
                $khoa = [];
                while ($row = mysqli_fetch_array($statement)) {
                    $khoa1 = new Department($row["DepartmentID"], $row['DepartmentName'], $row['Address'], $row['Email'], $row['Phone'], $row['Logo'], $row['Website'], $row['ParentDepartmentID']);
                    $khoa[] = $khoa1;
                }
                return $khoa;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    } 

    public function getAllChildDepart($idParent) {
        try {
            $con = new Connection();
            $conn = $con->connect();
            if ($conn == null) {
                die("Khong the ket noi SQL");
            } else {
                $sql = "SELECT * FROM departments WHERE ParentDepartmentID = '$idParent'";
                $statement = mysqli_query($conn, $sql);
                $khoa = [];
                while ($row = mysqli_fetch_array($statement)) {
                    $khoa1 = new Department($row["DepartmentID"], $row['DepartmentName'], $row['Address'], $row['Email'], $row['Phone'], $row['Logo'], $row['Website'], $row['ParentDepartmentID']);
                    $khoa[] = $khoa1;
                }
                return $khoa;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    } 
}
