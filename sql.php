		
	<?php
		include 'connection.php';
		$email="vsvraja@gmail.com";
		$pic=array();
		$query=mysql_query("SELECT ImgName FROM  `images` WHERE  `username` = '$email'") or die(mysql_error());
		while($row = mysql_fetch_assoc($query)){
		$pic[] = $row['ImgName'];
	}
	foreach($pic as $a){
	echo $a;
	}

	?>