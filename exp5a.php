	<?php
	if(isset($_POST["arms"])) {
		$num1 = $_POST['n1'];
		$a = $num1;
		$rev = 0;
		while($a > 0) {
			$m = $a % 10;
			$rev = $rev + $m*$m*$m;
			$a = $a / 10;
		}
		if($num1 == $rev) {
			echo "$num1 is an Armstrong Number";
		} else {
			echo "$num1 is not an Armstrong Number";
		}
	}
?>