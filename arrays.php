<html>
	<head>
		<title> Arrays </title>
	</head>
	<body> 
	<?php 
	
	$array = [5,4,1,2,3]; //shorter way to define array ; Added for Php 5.4 and later
	echo $array[4];
	
	$numbers = array(4,15,16,32,6,9); 
	//echo $numbers;
	echo $numbers[1];
	
	echo "<br/> <br/>";
	$mixed = array("ox",777,array(4,"hey",35.89));
	echo print_r($mixed);	//print_r is the function that prints the array in an readable format
	?>
	<!--pre tag offered by html can be used for even better display of array contents.-->
	<pre>
	<?php echo print_r($mixed);	?>	
	</pre>
	<br/>
	<?php echo $mixed[2][1]; //returns the element inside the array ?>	
	<?php $mixed[2] = "cat"; ?>
	<?php $mixed[4] = "mouse"; ?>
	<?php $mixed[] = 1; ?>
	<br/><?php echo print_r($mixed); ?>
	</body>
</html>