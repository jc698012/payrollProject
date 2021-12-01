<?php include 'view/header.php'; ?>

<h1>Employees</h1>
  <br>
    <a href="?action=add_employee_form">Add a new employee</a>
        <br><br>
        
       
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Position</th>
            <th>Phone Number</th>
            <th>Pay</th>
            <th>Hourly Wage</th>
            <th>Payment type</th>
            <th>Edit</th>
            
            <th></th>
        </tr>
            
      

        <?php foreach ($employees as $employee) : ?>
        <tr>
            <td><?php echo $employee->getFirstName(); ?> </td>
            <td><?php echo $employee->getLastName(); ?> </td>
            <td><?php echo $employee->getPosition(); ?> </td>
            <td><?php echo $employee->getPhoneNumber(); ?> </td>
            <td><?php echo $employee->getPay(); ?> </td>
            <td>$<?php echo $employee->getHourlyWage(); ?> </td>
            <td><?php echo $employee->getPaymentType(); ?> </td>
            <td>
                <form action="." method="post">
            <input type="hidden" name="employeeId"
                       value="<?php echo $employee->getEmployeeId(); ?>">
                       <input type="hidden" name="action"
                       value="edit_employee_form">
                    <input type="submit" value="Edit">
                </form>
            </td>
                
                
        </tr>
        <?php endforeach; ?>
        <form action="." method="post" id="aligned" >
            <input type="hidden" name="action" value="generate_pdf_report">
      
        <label>Select Option</label>
            <select name="pay" id="pay">
                <option value="weekly">Weekly</option>
                <option value="Biweekly">Biweekly</option>
            </select><br><br>
        
        <input type="submit" value="Report">
        </form>
        
         <form action="." method="post" id="aligned" >
            <input type="hidden" name="action" value="generate_payment_form">
            <br>
        <label>Select Option</label>
            <select name="pay" id="pay">
                <option value="weekly">Weekly</option>
                <option value="Biweekly">Biweekly</option>
            </select><br><br>
        
        <input type="submit" value="Payment Form">
         </form>
    </table>
</main>

