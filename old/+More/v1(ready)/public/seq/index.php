<html>
<title>SEQapp | ADL NETWORKS</title>
<body>
<h1>SEQapp (Beta)</h1>
<form action="index.php" method="post">
String <input type="text" name="string"><br>
Encrypt?		 <input type="checkbox" name="enc_dec">Yes
 <br>
<input type="submit">
</form>



<textarea>
<?php
	if (@$_POST["enc_dec"]){
	
	echo @base64_encode($_POST["string"]);
	}
	else{
	echo @base64_decode($_POST["string"]);
	
	}
?>
</textarea>

<hr>
<a target="blank" href="http://www.adlnetworks.com"> <strong>ADL NETWORKS</strong> </a>

</body>
</html>

