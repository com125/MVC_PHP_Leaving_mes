<?php 

function test($n){
	if($n==0){
		return 1;
	}else{
		return $n*test($n-1);
	}
}

echo test(5);

?>