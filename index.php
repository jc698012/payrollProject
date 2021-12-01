<?php

require('model/database.php');
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
        break;
    case 'edit_employee_form':
        $employeeId = filter_input(INPUT_POST, 'employeeId');
        $employee = EmployeesDB::getEmployee($employeeId);
        include('view/show_edit_employee_form.php');
        break;
    case 'generate_pdf_report':
        $pay = filter_input(INPUT_POST, 'pay');
        $employees = EmployeesDB::getPayEmployees($pay);
        $header = EmployeesDB::getHeader();
        include('view/generatePDFReport.php');
        break;
    case 'generate_payment_form':
        $pay = filter_input(INPUT_POST, 'pay');
        $employees = EmployeesDB::getPayEmployees($pay);
        include('view/generatePayForm.php');
        break;
    case 'insert_payment':
        $pay = filter_input(INPUT_POST, 'pay');
         if (isset( $_COOKIE['pretty']))
{
    $info = $_COOKIE['pretty'];
    $newInfo = json_decode($info,TRUE);
                for ($i = 0; $i < count($newInfo); $i++)
                {
                    
                    $employeeId = $newInfo[$i]['id'];
                    
                    
                    
                    $numberHours = $newInfo[$i]['hours'];
                    
                    
                    
                    $total = $newInfo[$i]['total'];
                    
                    EmployeesDB::Payment($employeeId, $numberHours, $total);


                }
                
             
}
$employees = EmployeesDB::getEmployeePayment($pay);

        include('view/generatePDFReport.php');
        break;

       

    
}
?>