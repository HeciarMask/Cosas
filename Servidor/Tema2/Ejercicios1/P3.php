<?php
	$fahrenhit = $_POST['grados'];
	$celsius = ($fahrenhit - 32) * 5/9;
	echo "$fahrenhit Fº => ".round($celsius, 2)." Cº";
?>