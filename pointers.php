<html>
	<head>
		<title> Pointers </title>
	</head>
	<body>

	<?php 
		$ages = [4, 8, 15, 16, 23, 42];
		
		//current pointer value
		echo "1:" . current($ages) . "<br/>";
		
		//next: move the pointer forward
		//similar to using continue in loops
		next($ages);
		echo "2:" . current($ages) . "<br/>";
		
		next($ages);
		next($ages);
		prev($ages);
		echo "3:" . current($ages) . "<br/>";
		
		reset($ages);
		echo "1:" . current($ages) . "<br/>";
		
		end($ages);
		echo "end:" . current($ages) . "<br/>";
		
		next($ages);
		echo "after:" . current($ages) . "<br/>";
	?>
	
	<br/>
	<?php 
		reset($ages); //last value for the array pointer is null
	//while loop that moves the array pointer
	// similar to foreach
		while ($age = current($ages)){
			echo $age . ", ";
			next($ages);
		}
	?>
		
	</body>
</html>