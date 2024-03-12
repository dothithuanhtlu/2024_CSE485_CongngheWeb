<?php 
class Department {
    private $DepartmentID;
    private $DepartmentName;
    private $Address;
    private $Email;
    private $Phone;
    private $Logo;
    private $Website;

    private $ParentDepartmentID;

    public function __construct($id, $name, $add, $email, $phone, $logo, $web, $parentID) {
        $this->DepartmentID = $id;
        $this->DepartmentName = $name;
        $this->Address = $add;
        $this->Email = $email;
        $this->Phone = $phone;
        $this->Logo = $logo;
        $this->Website = $web;
        $this->ParentDepartmentID = $parentID;
    }
    public function getID() {
        return $this->DepartmentID;
    }
    public function getName() {
        return $this->DepartmentName;
    }
    public function getAdd() {
        return $this->Address;
    }

    public function getEmail() {
        return $this->Email;
    }
    public function getPhone() {
        return $this->Phone;
    }
    public function getLogo() {
        return $this->Logo;
    }
    public function getWeb() {
        return $this->Website;
    }

    public function getParentID() {
        return $this->ParentDepartmentID;
    }
}