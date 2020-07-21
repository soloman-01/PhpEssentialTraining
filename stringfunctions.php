<html>
	<head>
		<title>String Functions</title>
	</head>
	<body> 
	<?php 
 
	$first = "The quick brown fox";
	$second = " jumped over the lazy dog.";
	
	$third = $first;	//assigned the value of first 
	$third .= $second; //concatenates the value of second
	echo $third;
	?>
	<br/>
	Lowercase: <?php echo strtolower($third);?> <br/>
	Uppercase: <?php echo strtoupper($third);?> <br/>
	Uppercase First: <?php echo ucfirst($third);?> <br/>
	Uppercase Word: <?php echo ucwords($third);?> <br/>
	<br/>
	Length: <?php echo strlen($third);?> <br/>
	Trim: <?php echo "A" . trim("B C D") . "E";?> <br/>
	Find: <?php echo strstr($third, "brown");?> <br/>
	Replace by String: <?php echo str_replace("quick","swift",$third);?> <br/>
	<br/>
	Repeat: <?php echo str_repeat($third, 2); ?> <br/>
	Make substring: <?php echo substr($third, 2, 10); ?> <br/>
	Find Position: <?php echo strpos($third, "fox"); ?> <br/>
	Find Character: <?php echo strchr($third, "o"); ?> <br/>
	</body>
</html>