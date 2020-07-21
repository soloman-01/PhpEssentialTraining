<html>
	<head>
		<title> </title>
	</head>
	<body> 
	<?php 
	
	echo "Hello, World <br/>";
	
	$greeting = "Hello";
	$target = "world!";
	$phrase = $greeting . " " . $target;
	echo $phrase;
	?>
	<br/>
	<?php 
	//For variable replacement
	echo "Again! $phrase <br/>";	//Doing this is possible while using double quotes only. So always try using the double quotes over the single.
	echo "{$phrase}Again <br/>";	//The curly braces separates the variable from the non-varible texts.
	?>
	</body>
</html>