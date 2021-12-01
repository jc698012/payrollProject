<?php

class EmployeesDB {
    
    public static function getAllEmployees() {
        $db = Database::getDB();
        
        $query = 'SELECT * FROM employee
                 order by lastName';
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();
        
        $employees = array();
        foreach ($rows as $row){
            $e = new Employee($row['employeeId']
                             ,$row['firstName']
                             ,$row['lastName']
                             ,$row['position']
                             ,$row['phoneNumber']
                             ,$row['pay']
                             ,$row['hourlyWage']
                             ,$row['paymentType']);
            $e->setEmployeeId($row['employeeId']);
            $employees[] = $e;
        }
        
        return $employees;
        
    }
    
    public static function getEmployee($employeeId) {
        $db = Database::getDB();
        
        $query = 'SELECT * FROM employee where employeeId = :employeeId';
                 
        $statement = $db->prepare($query);
        $statement->bindValue('employeeId', $employeeId);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();
        
        
        
        $employee = new Employee($row['employeeId']
                             ,$row['firstName']
                             ,$row['lastName']
                             ,$row['position']
                             ,$row['phoneNumber']
                             ,$row['pay']
                             ,$row['hourlyWage']
                             ,$row['paymentType']);
        return $employee;                

        }
        
          public static function Payment($employeeId, $numberHours, $total)
    {
        $db = Database::getDB();
        $query = 'INSERT INTO payments (employeeId, numberHours, total)
                  VALUES (:employeeId
                         ,:numberHours
                         ,:total';
        $statement = $db->prepare($query);
        $statement->bindValue('employeeId', $employeeId);
        $statement->bindValue('numberHours', $numberHours);
        $statement->bindValue('total', $total);
        $statement->closeCursor();
    }
        
          public static function AddNewEmployee($firstName, $lastName, $position, $phoneNumber,  $pay, $hourlyWage, $paymentType) {

        $db = Database::getDB();
        $query = 'INSERT INTO employee (firstName, lastName, position, phoneNumber, pay, hourlyWage, paymentType)
                  VALUES (:firstName
                         ,:lastName
                         ,:position
                         ,:phoneNumber
                         ,:pay
                         ,:hourlyWage
                         ,:paymentType)';
        $statement = $db->prepare($query);
        $statement->bindValue('firstName', $firstName);
        $statement->bindValue('lastName', $lastName);
        $statement->bindValue('position', $position);
        $statement->bindValue('phoneNumber', $phoneNumber);
        $statement->bindValue('pay', $pay);
        $statement->bindValue('hourlyWage', $hourlyWage);
        $statement->bindValue('paymentType', $paymentType);
        $statement->execute();
        $statement->closeCursor();
    }
    
    public static function getPayEmployees($pay) {
       
        $db = Database::getDB();
        
        $query = 'SELECT * FROM employee
                WHERE pay = :pay';
        $statement = $db->prepare($query);
        $statement->bindValue('pay', $pay);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();
        
        $tempHold = array();
        foreach ($rows as $row){
        
        $employee = new Employee ($row['employeeId']
                             ,$row['firstName']
                             ,$row['lastName']
                             ,$row['position']
                             ,$row['phoneNumber']
                             ,$row['pay']
                             ,$row['hourlyWage']
                             ,$row['paymentType']);
                $tempHold[] = $employee;
        }
                return $tempHold;
                
    }
    
  
    
    public static function getHeader() {


        $db = Database::getDB();

        $query = "SELECT COLUMN_NAME
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE TABLE_NAME = 'employee'
        AND COLUMN_NAME in ('firstName', 'lastName', 'position','phoneNumber','pay','hourlyWage','paymentType')
        ORDER BY ORDINAL_POSITION";


        $statement = $db->prepare($query);

        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

                return $rows;

    }
}
    
    ?>
       

