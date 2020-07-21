<html>
	<head>
		<title> Functions: Return Values </title>
	</head>
	<body>

	<?php 
	//Always having a return value for functions is a best practice
		function add($a, $b){
			$sum = $a + $b;
			return $sum;
		}
		$result1 = add(3,4);
		$result2 = add($result1, 5);
		echo $result2;
		
		//like break, return also exits the function immediately
	?>
	
	<br/>
	<?php 
		function chinese_zodiac($year){
			switch (($year - 4) % 12) {
			  case  0: return 'Rat';    
			  case  1: return 'Ox';       
			  case  2: return 'Tiger';   
			  case  3: return 'Rabbit';   
			  case  4: return 'Dragon';   
			  case  5: return 'Snake';   
			  case  6: return 'Horse';  
			  case  7: return 'Goat';    
			  case  8: return 'Monkey';  
			  case  9: return 'Rooster'; 
			  case 10: return 'Dog';    
			  case 11: return 'Pig';   	
			}	
		}
		$zodiac = chinese_zodiac(2013);
		echo "2013 is the year of the {$zodiac}. <br/>";
		
		echo "2030 is the year of the ". chinese_zodiac(2027). ".<br/>"
    ?>
	
	<?php 
		function better_hello($greeting, $target, $punct){
			return $greeting . " " . $target . $punct . "<br/>";
		}
		
		echo better_hello("Hi", "Sam", "!!!");
		
	?>
		
	</body>
</html>