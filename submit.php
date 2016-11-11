<!Doctype html>
<html lang = 'en'>
<head>
<title>
cswebsite
</title>
<meta charset = 'utf-8'>
<link rel='stylesheet' href='styles.css'>
<script src='java.js' type='text/javascript'></script>
</head>
<body>
	<main>
		<div>
			<header>
				<h1>
					cswebsite
				</h1>
			</header>
		</div>
	
		<nav>
		</nav>
			<h3>
				Thank you, <?=$_POST["firstname"];?>, your news post will be added!
			</h3>
			<?php
			$author = $_POST['firstname']." ".$_POST['lastname'];
			$title = $_POST["title"];
			$body = $_POST["body"];
			$start = $_POST["start"];
			$expire = $_POST["expire"];
			$currentdate = date("m/d/Y");
			
			
			$querystring = "INSERT INTO `newsposts`(`Title`, `Body`, `DateStart`, `DateExpired`, `DateCreated`, `Author`, `OtherInformation`) 
			VALUES ('".$title."','".$body."','".$start."','".$expire."','".$currentdate."','".$author."','NOT SURE WHAT TO PUT HERE')";
			
			
			$db = new PDO("mysql:dbname=cswebsite;host=localhost", "root");
			$rows = $db->query($querystring);
			
			?>
			
		</div>
	</main>
	<footer>
	</footer>
</body>
