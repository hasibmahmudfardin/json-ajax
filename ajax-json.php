<!DOCTYPE html>
<html>
<head>
	<title>modarator form</title>
</head>
<body>

	<h1>modarator form</h1>

    <label for="customer name">customer Name</label>
		<input type="text" name="cusname" id="cusname">
        <br>

    <label for="pass">Password</label>
		<input type="password" name="passw" id="pass"> 
        <br>

    <label for="product name">product Name</label>
		<input type="text" name="proname" id="proname">
        <br>

    <label for="product no">product no</label>
		<input type="integer" name="pro no" id="pro no">
        <br>

	<?php 

		$arr1 = array('cusname' => 'fardin', 'password' => '123', 'proname' => 'rice','pro no' => '20',);
        $json_encoded_fardin =  json_encode($arr1);
        
        $arr2 = array('cusname' => 'hasib', 'password' => '321', 'proname' => 'potato','pro no' => '21',);
        $json_encoded_hasib =  json_encode($arr2);

		$file1 = fopen("data.txt", "w");
		fwrite($file1, $json_encoded_fardin);
        fwrite($file1, $json_encoded_hasib);
		fclose($file1);

		$file2 = fopen("data.txt", "r");
		$data = fread($file2, filesize("data.txt"));
		fclose($file2);

		$json_decoded_text = json_decode($read, true);
                $data_explode_by_newline = explode("\n", $data);
        
        echo $json_decoded_text['cusname'];
		echo "<br>";
		echo $json_decoded_text['password'];
		echo "<br>";
        echo $json_decoded_text['proname'];
        echo "<br>";
		echo $json_decoded_text['pro no'];
	?>

</body>
</html>