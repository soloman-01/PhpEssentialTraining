<html>
	<head>
		<title> Functions: Return Multiple Values </title>
	</head>
	<body>

	<?php 
		function add_subt($num1, $num2){
			$sum = $num1 + $num2;
			$diff = $num1 - $num2;
			
		return array($sum, $diff);
		}
		
		$result = add_subt(4, 10);
		$add_result = $result[0];
		$sub_result = $result[1];
		echo "The addition of these numbers results: $add_result <br/>";
		echo "The difference of these numbers results: $sub_result <br/>";
		
		//another way of getting the return values is by using list()
		list($add_result, $sub_result) = add_subt(20, 7);
		echo "The addition of these numbers results: $add_result <br/>";
		echo "The difference of these numbers results: $sub_result <br/>";
	?>
		
	</body>
</html>