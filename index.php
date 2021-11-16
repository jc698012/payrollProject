<?php

require('database.php');
require('model/employee.php');
require('model/employees_db.php');
require('model/fpdf.php');
require('model/font/helveticab.php');


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
    case 'add_employee':
        $firstName = filter_input(INPUT_POST, 'firstName');
        $lastName = filter_input(INPUT_POST, 'lastName');
        $position = filter_input(INPUT_POST, 'position');
        $phoneNumber = filter_input(INPUT_POST, 'phoneNumber');
        $pay = filter_input(INPUT_POST, 'pay');
        $hourlyWage = filter_input(INPUT_POST, 'hourlyWage');
        $paymentType = filter_input(INPUT_POST, 'paymentType');
        EmployeesDB::AddNewEmployee($firstName, $lastName, $position, $phoneNumber, $pay, $hourlyWage, $paymentType);
        include('view/show_add_employee_form.php');
    case 'edit_employee_form':
        $employeeId = filter_input(INPUT_POST, 'employeeId');
        $employee = EmployeesDB::getEmployee($employeeId);
        include('view/show_edit_employee_form.php');
    case 'generate_payment_form':
        $pay = filter_input(INPUT_POST, 'pay');
        $employees = EmployeesDB::getPayEmployees($pay);
        $header = EmployeesDB::getHeader();
        include('view/generatePDFReport.php');
//        include('view/generatePayForm.php');
    
}