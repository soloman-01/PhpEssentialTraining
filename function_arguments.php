<html>
	<head>
		<title> Function Arguments </title>
	</head>
	<body>

	<?php 
		function sayHelloTo($name){
			echo "Hello, {$name}";
		}
		
		$word = "everyone.";
		sayHelloTo($word); echo"<br/>";
		
	?>
		
	<br/>
	<?php 
		function better_hello($greeting, $target, $punct){
			echo $greeting . " " . $target . $punct . "<br/>";
		}
		
		better_hello("Hi", "Sam", "!!!");
		better_hello("Greetings", "Sam", ".");
		better_hello("Hoya", "Sam", ""); //null can also be sent as an argument in this case
	?>
	</body>
</html>