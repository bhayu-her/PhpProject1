<?php
	echo "1. <br/>";
	#$data = array('bhayu' => 'herwahyudi', 'test' => 'print');
	$data['bhayu'] = 'herwahyudi';
	$data['test'] = 'print';
	
	foreach($data as $key => $value) {
		echo 'Key : ' . $key . ', Value : ' . $value . '<br>';
	}

	echo '<br />';
	echo "2. <br/>";
	$datax['bhayu']['0a'] = 'herwahyudi';
	$datax['test']['1x'] = 'print';
	
	foreach($datax as $keyx => $valuex) {
		echo 'Key : ' . $keyx . ', Value : ' . $valuex . '<br>';
		print_r($valuex);
	}		
	
	echo '<br />';
	echo "3. <br/>";
	$dataz['bhayu']['0a'] = 'herwahyudi';
	$dataz['test']['1x'] = 'print';
	
	foreach($dataz as $a => $b) {
		#echo 'Key : ' . $a . ', Value : ' . $b . '<br>';
		#print_r($b);
		foreach($b as $c => $d) {
			echo 'Key : ' . $c . ', Value : ' . $d . '<br>';
		}
	}

?>


1. 
Key : bhayu, Value : herwahyudi
Key : test, Value : print

2. 

Notice: Array to string conversion in C:\xampp\htdocs\array\array_key_value.php on line 17
Key : bhayu, Value : Array
Array ( [0a] => herwahyudi ) 
Notice: Array to string conversion in C:\xampp\htdocs\array\array_key_value.php on line 17
Key : test, Value : Array
Array ( [1x] => print ) 
3. 
Key : 0a, Value : herwahyudi
Key : 1x, Value : print