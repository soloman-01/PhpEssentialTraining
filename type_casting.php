<html>
	<head>
		<title> Type Juggling and casting</title>
	</head>
	<body> 
	
	Type Juggling <br/>
	<?php $count = "2"; ?>
	Type: <?php echo gettype($count); ?> <br/>
	
	<?php $count += 3; ?>
	<br/>Type: <?php echo gettype($count); echo $count; ?> <br/>
	<br/>
	
	Type Casting <br/>
	<?php settype($count, "string"); ?>
	Type: <?php echo gettype($count); ?> <br/>
	
	<?php $count2 = (integer) $count; ?> <br/>
	count2 = <?php echo gettype($count2); ?><br/>
	count = <?php echo gettype($count); ?>
	
	</body>
</html>