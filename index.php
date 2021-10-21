<?php

require('database.php');
require('model/employee.php');
require('model/employees_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'employee_page';
    }
}


switch($action) {
    case 'employee_page':
        $employees = EmployeesDB::getAllEmployees();
        include('view/employee_page.php');
        break;
    case 'add_employee_form':
        include('view/show_add_employee_form.php');
        break;
    
}