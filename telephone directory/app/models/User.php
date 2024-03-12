<?php
class User
{
    private $Username;
    private $Password;
    private $Role;
    private $EmployeeID;
    public function __construct($Username, $Password, $Role, $EmployeeID)
    {
        $this->Username = $Username;
        $this->Password = $Password;
        $this->Role = $Role;
        $this->EmployeeID = $EmployeeID;
    }
    public function getUsername()
    {
        return $this->Username;
    }
    public function getPassword()
    {
        return $this->Password;
    }
    public function getRole()
    {
        return $this->Role;
    }
    public function getEmployeeID()
    {
        return $this->EmployeeID;
    }
    public function setUsername($Username)
    {
        $this->Username = $Username;
    }
    public function setPassword($Password)
    {
        $this->Password = $Password;
    }
    public function setRole($Role)
    {
        $this->Role = $Role;
    }
    public function setEmployeeID($EmployeeID)
    {
        $this->EmployeeID = $EmployeeID;
    }
}
