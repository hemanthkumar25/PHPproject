<?php
if (isset($_FILES['fileToUpload']['tmp_name'])){
	$filepath=$_FILES['fileToUpload']['tmp_name'];
	$target_dir = "publicuploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
	$data=array('myimage' =>'@'.realpath( $target_file));
	$ch=curl_init();
$url1="http://veerappanraja.com/curlupload.php";
	curl_setopt($ch, CURLOPT_URL, $url1);
	curl_setopt($ch, CURLOPT_POST,true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	
	$response=curl_exec($ch);

	
	if($response==true){
		
		$subject="Socket Snipers";
		$to="4086441113@tmomail.net";
		$from="www.hemanth-kumar.com";
		$message="File has been uploaded to your server from $from";
		if (!mail($to, $subject,"From: ".$from, $message)){
			echo "Failed to send SMS"."<br>";
		}else{
			echo "SMS success"."<br>";
		}
	}else{
		echo "Error!!".curl_error($ch);
	}
	
$url2="http://suganyakanagavel.com/curlupload.php";
curl_setopt($ch, CURLOPT_URL,$url2 );
	curl_setopt($ch, CURLOPT_POST,true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	
	$response=curl_exec($ch);

	
	if($response==true){
		
		$subject="Socket Snipers";
		$to="4086440409@tmomail.net";
		$from="www.hemanth-kumar.com";
		$message="File has been uploaded to your server from $from";
		if (!mail($to, $subject,"From: ".$from, $message)){
			echo "Failed to send SMS"."<br>";
		}else{
			echo "SMS success"."<br>";
		}
	}else{
		echo "Error!!".curl_error($ch);
	}
$url3="http://rahul207.com/curlupload.php";
	curl_setopt($ch, CURLOPT_URL, $url3);
	curl_setopt($ch, CURLOPT_POST,true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	
	$response=curl_exec($ch);

	if($response==true){
		echo "File Uploaded!! SUCCESSFULLY to ".$url1."<br>";
		$subject="Socket Snipers";
		$to="5105567311@tmomail.net";
		$from="www.hemanth-kumar.com";
		$message="File has been uploaded to your server from $from";
		if (!mail($to, $subject,"From: ".$from, $message)){
			echo "Failed to send SMS"."<br>";
		}else{
			echo "SMS success"."<br>";
		}
	}else{
		echo "Error!!".curl_error($ch);
	}
$url4="http://archana24.com/curlupload.php";
	curl_setopt($ch, CURLOPT_URL, $url4);
	curl_setopt($ch, CURLOPT_POST,true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	
	$response=curl_exec($ch);

}
echo "<script>window.location.href='uploadsuccess.php'</script>";

?>