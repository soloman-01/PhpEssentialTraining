<html>
	<head>
		<title> Comparision and Logical Operators </title>
	</head>
	<body> 
	
	<?php 
		$a = 10;
		$b = 5;
		$c = 8;
		$d = 1;
		
		if (($a < $b) || ($c > $d)){
			echo "a is smaller than b OR <br/> c is greater than d!"; 
		}
	?>
	
	<br/>
	<?php 
		$e = 100;
		if (!isset($e)){
			$e = 200;
		}
		echo $e;
	?>
	
	<br/>
	<?php 
		//don't reject 0 or 0.0 a numeric values while rejecting them as strings
		$quantity = "";
		if (empty($quantity) && !is_numeric($quantity)){
			echo "You must enter a number.";
		}
	?>
	
	</body>
</html>