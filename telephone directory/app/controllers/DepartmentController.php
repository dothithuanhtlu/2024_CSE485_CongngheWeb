<?php
require_once('../config/database.php');

require_once(ROOT . '/app/models/Department.php');
require_once(ROOT . '/app/config/Connection.php');
require_once(ROOT . '/app/services/DepartmentService.php');
$getAllDepartment = new DepartmentService();
$getAllDepartment1 = $getAllDepartment->getAllNamesDepartmentParent();
require_once(ROOT . '/app/views/home.blade.php');
