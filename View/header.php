<?php
$basedir= dirname(__DIR__);
$basedir = explode("\\", $basedir);
$basedir = array_pop($basedir);

//array_pop(explode("\\", dirname(__DIR__))) 
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Payroll Project</title>
    <div id="logo">
    </div>
    <link rel="stylesheet" type="text/css"  href="main.css">
			<!--- THIS PATH WILL BREAK ON LINUX/OSX 
		replace "\\" with "//"
		-->
		
       
		  </head>

<!-- the body section -->
<body>
<header>

    <h1>Payroll Project</h1>
</header>
    
    <nav>
        <ul>
            <li><a href="/<?php echo htmlspecialchars($basedir) ?>">Home</a></li>
        </ul>
    </nav>

