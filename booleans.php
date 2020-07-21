<html>
	<head>
		<title> Booleans </title>
	</head>
	<body>

	<?php 
		$result1 = true;
		$result2 = false;
	?>
	
	Result 1: <?php echo $result1; ?> <br/>
	Result 2: <?php echo $result2; ?> <br/>
	
	Is result2 boolean?: <?php echo is_bool($result2); ?>
	</body>
</html>