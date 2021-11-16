

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
        <?php var_dump($employees) ?>
        <form action="." method="post">
            <input type="hidden" name="generatePaymentReport" value="generatePaymentReport">
            
        
        <?php foreach ($employees as $employee) : ?>
        <tr>
            <td><?php echo $employee->getFirstName(); ?> </td>
            <td><?php echo $employee->getLastName(); ?> </td>
            <td><?php echo $employee->getPosition(); ?> </td>
            <td>$<?php echo $employee->getHourlyWage(); ?> </td>
            <td><?php echo $employee->getPaymentType(); ?> </td>
            <td><input type="text" id="numberHours"></td>
            <td><input type="text" id="overtime"></td     
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
            