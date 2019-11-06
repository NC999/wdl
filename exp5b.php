<?php
	if(isset($_POST['prime'])) {
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$prime = array();
		for($i = $num1; $i <= $num2; $i++) {
			if($i == 1 || $i == 0) {
				continue;
			}
			$flag = 1;
			for($j = 2; $j <= $i/2; $j++) {
				if($i % $j == 0) {
					$flag = 0;
					break;
				}
			}
			if($flag == 1) {
				array_push($prime, $i);
			}
		}
		echo "Prime Numbers between $num1 and $num2 are:<br>";
		foreach ($prime as $val) {
			echo "$val <br>";
		}
	}
?>