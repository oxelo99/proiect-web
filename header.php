<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>FashonBoutique</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="./style/signup.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet"> 
	<meta charset="utf-8">
</head>
<body>
	<!-------------------Popup--------------->
	<div id="Popup">
		<div id="closePopup">x</div>
		<p class="PopupText">Doriți să cereți o ofertă B2B? Lăsați-ne numărul de telefon și vă vom contacta noi!</p>
		<form class="PopupForm">
					<input type="tel" placeholder="ex: 0712 345 678" class="PhoneCa">
			<input type="submit" value="Trimite" class="SubmitButton">
		</form>
	</div>
	<!--------------------------------------->
<body>
	<nav class="Menu" id="MyMenu">
		<a href="index.php"><img src="./media/Fashion Boutique.png" class="sigla"></a>
		<a href="index.php" class="MenuItem">Home</a>
		<a href="produse.php" class="MenuItem">Produse</a>
		<a href="contact.php" class="MenuItem">Contact</a>
		<a href="gdpr.php" class="MenuItem">Termeni și Condiții</a>
		<?php
			if(isset($_SESSION["useruid"])){
				echo "<a href='profile.php' class='MenuItem'>Profil</a>";
				echo "<a href='./includes/logout.inc.php' class='MenuItem'>Log out</a>";
			}
			else{
				echo "<a href='signup.php' class='MenuItem'>Sign Up</a>";
				echo "<a href='login.php' class='MenuItem'>Log In</a>";
			}
		?>
	</nav>
	<div class="SmallMenu">
		<a href="index.html"><img src="./media/Fashion Boutique.png" class="sigla" style="margin: 0 auto 0 175%; display: block;"></a>
		<div class="MobileMenu">
			<p style="color: white; max-width: 480px;
 margin: auto;">Meniu</p>
		</div>
	</div>
	<div class="ContactBar">
		<a href="https://goo.gl/maps/ERksYtX9gHqZJuZa9" class="Adress">
			<i style='font-size:20px' class='fas' id="HomeIcon">&#xf015;</i>Brasov, Str. Cocorului, Nr. 15, Bl. 219, Sc. C, Ap. 13
		</a>
		<a href="tel:0722358635" class="Phone">
			<i style='font-size:20px' class='fas' id="TelIcon">&#xf3cd;</i>0722 358 635
		</a>
		<a href="mailto:office.aivan@gmail.com" class="Email">
			<i style='font-size:20px' class='far' id="EmailIcon">&#xf0e0;</i>office.aivan@gmail.com
		</a>
	</div>