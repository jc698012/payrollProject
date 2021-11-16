

<main>
    <body>
        <h1>Edit a client</h1>
        <form action="." method="post" id="aligned" >
            <input type="hidden" name="action" value="edit_client">
            
            
            <label>First Name:</label>
            <input type="text" name="firstName" required
                   value="<?php echo $employee->getFirstName();?>"><br>
            
            
            <label>Last Name:</label>
            <input type="text" name="lastName" required
                   value="<?php echo($employee->getLastName());?>"><br>
            
            
            <label>Position:</label>
            <input type="text" name="checkAmount" required
                   value="<?php echo($employee->getPosition());?>"><br>
            
            <label>Phone Number:</label>
             <input type="tel" name="phoneNumber"  
                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"  
                    placeholder="999-999-9999" 
                   value="<?php echo($employee->getPhoneNumber());?>"><br>
            
             <label>Pay</label>
            <select name="pay" id="pay" value="<?php echo($employee->getPay());?>">
                <option value="weekly">Weekly</option>
                <option value="Biweekly ">Biweekly</option>
            <label>Pay:</label>
            <input type="text" name="formatOnDate" 
                   value="<?php echo($employee->getPay());?>"><br>
            
            <label>Hourly Wage:</label>
            <input type="text" name="formatOnDate" 
                   value="<?php echo($employee->getHourlyWage());?>"><br>
            
            <label>Payment Type:</label>
            <input type="text" name="formatOnDate" 
                   value="<?php echo($employee->getPaymentType());?>"><br>
            
            <input type="hidden" name="clientID"
                   value="<?php echo $employeeId ?>">
            <label>&nbsp;</label>
            
            <input type="submit" value="Edit client"><br><br>
            
            
      


        </form>
        
        
        
    </body>
       
</main>

