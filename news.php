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
		<header>
			<h1>
				News Posts Moc page
			</h1>
		</header>
		<nav>
		</nav>

		<?php 

		$currentDate = date("Y/m/d");
		$querystring = "SELECT * FROM `NewsPosts` where DateStart <= '".$currentDate."' and DateExpired > '".$currentDate."';";
		
		$db = new PDO("mysql:dbname=cswebsite; host=localhost", "root");
		$rows = $db->query($querystring);
		
		foreach ($rows as $row) 
		{?>
			<div class = 'content'>
				<h2><?= $row["Title"]?></h2>
				<P>
					<?= $row["Body"]?>
				</p>
				<span class = 'small'><?= $row["Author"]?></span>
			</div>
		<?php
		}?>
			
		
	</main>
	<footer>
		
	</footer>

</body>
