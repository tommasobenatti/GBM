<?php

	$names = array("Dio", "Cristo", "Madonna");
	$name = $names[rand(0, 2)];
	if ($name == "Madonna") {
		$name_gend = "f";
	} else {
		$name_gend = "m";
	}
	$attr_file_path = "/var/www/tommasobenatti/gbm/attributes_".$name_gend.".txt";
	//Open file with reading attributes
	$attr_file = fopen($attr_file_path, "r");
	//Check if file is set
	//Define number of lines and set to 0
	$c = 0;
	//Calculate numer of lines
	while (!feof($attr_file)) {
		$attr = fgets($attr_file);
		$c = $c + 1;
	}
	$c = $c - 2;
	//Now we've got c = number of lines
	//If file is not empty, set number of attr_line_number
	if ($c > 0) {
		$attr_line_number = rand(0, $c);
	}
	//Close the file
	fclose($attr_file);
	//Open the file again
	$attr_file = fopen($attr_file_path, "r");
	//Read attr_line
	$c = 0;
	while ($c < $attr_line_number) {
		$attr = fgets($attr_file);
		$c = $c + 1;
	}
	$attr = fgets($attr_file);
	$blasphemy = $name." ".$attr;

?>

<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="gbm.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet"> 
        <title>Google Bestemmiator</title>
    </head>
    <body>
        <div class="maindiv">
            <div class="title">
                <h1 class="h1-title">Google Bestemmiator&#174</h1>
            </div>
			<div class="blasphemy-div">
				<div class="creator">
					<form class="creationform" method="POST">
						<input class="creationbutton" type="submit" value="CREA">
					</form>
				</div>
				<div>
					<?php
						echo "<h1 class='blasphemy'>$blasphemy</h1>";
					?>
				</div>
				<p>Made with 💚🤍💖 by Tommaso Benatti</p>
			</div>
        </div>
    </body>
</html>