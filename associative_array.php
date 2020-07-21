<html>
	<head>
		<title> Associative Array</title>
	</head>
	<body> 
	
	<?php $assoc = array("fname" => "Sam", "lname" => "Floyd"); ?>
	<?php echo $assoc["lname"]; ?> <br/>
	<?php echo $assoc["fname"] . " " . $assoc["lname"]; ?> <br/>
	
	<?php $assoc["lname"] = "Styles"; //Assignment Operation ?>
	<?php echo $assoc["fname"] . " " . $assoc["lname"]; ?> <br/>
	</body>
</html>