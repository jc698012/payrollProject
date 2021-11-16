

<main>
    <body>
        <h1>Add a new employee</h1>
        <form action="." method="post" id="aligned" >
            <input type="hidden" name="action" value="add_employee">
            
            
            <label>First Name:</label>
            <input type="text" name="firstName" required ><br><br>
            
            <label>Last Name:</label>
            <input type="text" name="lastName" required ><br><br>
            
            <label>Position:</label>
            <input type="text" name="position" required ><br><br>
            
            <label>Phone Number:</label>
            <input type="tel" name="phoneNumber"  
                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"  
                    placeholder="999-999-9999" ><br><br>
            
            <label>Pay</label>
            <select name="pay" id="pay">
                <option value="weekly">Weekly</option>
                <option value="Biweekly ">Biweekly</option>
            </select><br><br>
            
            <label>Hourly Wage:</label>
            <input type="number" name="hourlyWage" required> <br><br>
            
            <label>Payment Type:</label>
            <select name="paymentType" id="paymentType">
                <option value="check">Check</option>
                <option value="directDeposit">Direct Deposit</option>
                <option value="Cash">Cash</option>
            </select><br><br>
            
            <input type="submit" value="Add a new employee"><br><br>
            

        
        
        </form>
        
        
        
    </body>
       
</main>

