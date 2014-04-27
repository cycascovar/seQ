<?php
include "varset.php";
?>

	<html>
		<head>
			<title>SEQapp</title>
		</head>
		
		<body>
			<section class="main">
				<form class="form-2" method="POST" ACTION ="app.php">
					<h1>SEQapp</h1>
					<p class="float">
						<label for="login"><i class="icon-user"></i>String</label>
						<input type="text" name="string" placeholder="Enter String">
						<br>
						<label class="radio">
							<input type="radio" name="enc_dec" id="optionsRadios1" value="0" checked>
						Decode
						</label>
						<label class="radio">
							<input type="radio" name="enc_dec" id="optionsRadios2" value="1">
						Encode
					</label>					
					</p>

					<p class="clearfix"> 
						<!--<a href="#" class="log-twitter">Log in with Twitter</a>-->
												
						<input type="submit" name="submit" value="Ejecutar">
					</p>
				</form>
			</section>
		</body>
	</html>
	