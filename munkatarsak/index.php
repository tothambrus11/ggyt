<?php
	require_once("../load.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Munkatársak</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style type="text/css">
		.nev{
			font-weight: bolder;
			font-family: 'Roboto Slab', sans-serif;
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<?php
		include("../menu.php");
	?>

	<div class="page-container">
		<h1>Munkatársak</h1>
		<center>
			<table>
				<tr>
					<td><img src="img/Dr._Farkas_Gabriella.jpg"></td>
					<td>
						<p>
							<a href="adatlap/Dr._Farkas_Gabriella/" class="nev">Dr. Farkas Gabriella</a><br>
							okl. gépészmérnök, adjunktus, Tanszékvezető<br>
							szobaszám: 142<br>
							telefon: 666-5391<br>
							email: <a href="mailto:farkas.gabriella@bgk.uni-obuda.hu">farkas.gabriella@bgk.uni-obuda.hu</a>
						</p>
					</td>
				</tr>
			</table>
		</center>

		<h2>Forgácsolástechnológia csoport</h2>
	</div>
	<?php
		include("../footer.php");
	?>
</body>