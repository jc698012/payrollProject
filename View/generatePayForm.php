

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
        <input type="hidden" name="generatePaymentReport" value="employee_page">
        <?php foreach ($employees as $employee) : ?>
        <tbody>
        <tr>
            <td><?php echo $employee->getFirstName(); ?> </td>
            <td><?php echo $employee->getLastName(); ?> </td>
            <td><?php echo $employee->getPosition(); ?> </td>
            <td>$<?php echo $employee->getHourlyWage(); ?> </td>
            <td><?php echo $employee->getPaymentType(); ?> </td>  
            <td><input type="text"  wage="<?php echo $employee->getHourlyWage();?>" name="numberHours"  id="<?php echo $employee->getEmployeeId()?>" onchange="handleChange(this)" ></td>
            <td><input type="text" name="overtime"></td    
        
            
        </tr>
        </tbody>
       <?php endforeach; ?>
        
    </table>
<input type="submit" value="Generate Payment" >
        </form>
        

</main>



<script>
    let info=[]
    
   const handleChange= (e)=>{
       
//      let wage= document.getElementById("wage");
      console.log(e.getAttribute("wage"));
      // console.log(e.value)
      // let employee=
      // console.log(e.id)
      
       let item={
           id: e.id,
           hours:e.value,
           wage: e.getAttribute("wage"),
           total: myFunction(e.value, e.getAttribute("wage"))
         
           
       }
       
       let iteminArray=info.findIndex(employee=>employee.id==item.id)
       
       if(iteminArray<0){
           info.push(item)
       }else{
           info[iteminArray]=item
       }
       function myFunction(hours, wage) 
       {
         var x = parseFloat (hours) * parseFloat(wage)
           
           return x
       }
       
       
        console.log(info)
        var pretty = JSON.stringify(info)
        console.log(pretty)
        document.cookie = "pretty = " + pretty 

        
   }
   


   
    </script>


   
   
       
          
    
   

