<?php $i = 0?>

<h1>Employees</h1>
  
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Position</th>
            <th>Hourly Wage</th>
            <th>Payment type</th>
            <th>Number of Hours</th>
            <th>Overtime</th>
            
            <th></th>
            
        </tr>
        <form action="." method="post">
        <input type="hidden" name="generatePaymentReport" value="generatPDF_report">
        <?php foreach ($employees as $employee) : ?>
        <tr>
            <td><?php echo $employee->getFirstName(); ?> </td>
            <td><?php echo $employee->getLastName(); ?> </td>
            <td><?php echo $employee->getPosition(); ?> </td>
            <td>$<?php echo $employee->getHourlyWage(); ?> </td>
            <td><?php echo $employee->getPaymentType(); ?> </td>
         
             
          
           
           <td><input type="text" name="numberHours"  ></td>
           <td><input type="text" name="overtime"></td    
           
            
        
        
        </tr>
       <?php endforeach; ?>
        
    </table>
<input type="submit" value="Generate Payment">
        </form>
</main>


<!--                <form action="." method="post">
            <input type="hidden" name="employeeId"
                       value="<?php echo $employee->getEmployeeId(); ?>">
                       <input type="hidden" name="action"
                       value="edit_employee_form">
                    <input type="submit" value="Edit">
                </form>-->
            </td>
            