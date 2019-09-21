
<html>
<body>
	<?php

	$path = 'C:\Bitnami\wampstack-7.3.9-0\apache2\htdocs\data.txt';

	if ( isset($_POST['jobDesc']) && isset($_POST['compName']) && isset($_POST['payVal']) && isset($_POST['payType']))
	{
		$fh = fopen($path,"a+");
		$string = $_POST['compName'].' - '.$_POST['jobDesc'].' - '.$_POST['payVal'].' - '.$_POST['payType'];
		fwrite($fh,$string);
		fclose($fh);
	}
	header("Location: http://localhost/index.html")
	?>

</body>
</html>
