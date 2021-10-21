

<h1>Employees</h1>
 
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Position</th>
            <th>Phone Number</th>
            <th>Pay</th>
            <th>Hourly Wage</th>
            <th>Payment type</th>
            
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
           
                
                </form>
        </tr>
        <?php endforeach; ?>
    </table>
</main>

