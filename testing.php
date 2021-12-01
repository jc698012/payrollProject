  <?php 
        $info= $_COOKIE['pretty'];
  
        $newInfo = json_decode($info,TRUE);
        
       
                
                for ($i = 0; $i < count($newInfo); $i++)
                {
                    echo $newInfo[$i]['id']; echo "<br>";
                    $employeeId = $newInfo[$i]['id'];
                    echo $newInfo[$i]['hours']; echo "<br>";
                    $numberHours = $newInfo[$i]['hours'];
                    echo $newInfo[$i]['total']; echo "<br>";
                    $total = $newInfo[$i]['total'];
                    EmployeesDB::insertPayment($employeeId, $numberHours, $total);
                }
                
        ?>