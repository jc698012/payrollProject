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
}
