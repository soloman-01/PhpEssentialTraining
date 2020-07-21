<html>
	<head>
		<title> Functions; Defining </title>
	</head>
	<body>

	<?php 
		function sayHello(){
			echo "Hello, World! <br/>";
		}
		sayHello();
		
		function sayHelloTo($name){
			echo "Hello, {$name}";
		}
		sayHelloTo("Sam"); echo"<br/>";
		
		
		sayHelloLoudly();	//functions can be called before called before defining as of Php3 or later
		
		function sayHelloLoudly(){
			echo "HELLO WORLD.";
		}
	?>
		
	</body>
</html>