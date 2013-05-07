<?php
	$a="bhayu";
	$b="bhAYu";
	
	if ($a == $b){
		echo "<br/> $a == $b <br/>"; #bhayu == bhayu
	}
	else{
		echo "<br/> $a != $b <br/>"; #bhayu != bhAYu
	}
	
	if(preg_match("/$b/i", $a)){
		echo "<br/> $a match with $b <br/>";
    }
    else{
		echo "<br/> $a didn't match with $b <br/>";;
	}
	
	$c="halo";
	if(preg_match("/$b/i", $a) || preg_match("/$c/i", $a)){
		echo "<br/> $a match with $b or $c<br/>";
    }
    else{
		echo "<br/> $a didn't match with $b or $c<br/>";;
	}
	
	
	
?>

bhayu != bhAYu 

bhayu match with bhAYu 

bhayu match with bhAYu or halo