<html>
	<head>
		<title> </title>
	</head>
	<body> 

	<?php 
	$var1 = 2;
	$var2 = 10;
	
	
	?>
	Basic Math: <?php echo (( 1 + 2 + $var1) * $var2) / 5 - 2; ?>
	
	<br/>
	+=: <?php 
	$var1 += 4; //Subtracion, Multiplication and Division can also be done this way.
	echo $var1;
	?>
	<br/>
	Increment: <?php $var2++; echo $var2; ?> <br/>
	Decrement: <?php $var2--; echo $var2; ?> <br/>
	</body>
</html>