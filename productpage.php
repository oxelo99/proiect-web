<!DOCTYPE html>
<html>
<head>
	<title>Produsele noastre</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
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
	<nav class="Menu" id="MyMenu">
		<a href="index.html"><img src="./media/Fashion Boutique.png" class="sigla"></a>
		<a href="index.html" class="MenuItem">Home</a>
		<a href="produse.html" class="CurrentItem">Produse</a>
		<a href="contact.html" class="MenuItem">Contact</a>
		<a href="gdpr.html" class="MenuItem">Termeni și Condiții</a>
		<a href="sign_login.html" class="MenuItem">Sign In / Login</a>
	</nav>
	<div class="ContactBar">
		<a href="https://goo.gl/maps/ERksYtX9gHqZJuZa9" class="Adress">
			<i style='font-size:20px' class='fas' id="HomeIcon">&#xf015;</i>Brașov, Str. Cocorului, Nr. 15, Bl. 219, Sc. C, Ap. 13
		</a>
		<a href="tel:0724 081 120" class="Phone">
			<i style='font-size:20px' class='fas' id="TelIcon">&#xf3cd;</i>0722 358 635
		</a>
		<a href="mailto:office@broderiebrasov.ro" class="Email">
			<i style='font-size:20px' class='far' id="EmailIcon">&#xf0e0;</i>office.aivan@gmail.com
		</a>
	</div>
		<!---------------------------------- Content ------------------------------>
		<div class="container">
			<div id="carouselExample" class="carousel slide">
  				<div class="carousel-inner">
    				<div class="carousel-item active">
      					<img src="./media/26382c.jpg" class="d-block w-100" alt="...">
   					</div>
    				<div class="carousel-item">
      					<img src="./media/22907c.jpg" class="d-block w-100" alt="...">
    				</div>
    				<div class="carousel-item">
      					<img src="./media/26100c.jpg" class="d-block w-100" alt="...">
    				</div>
  				</div>
  				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    				<span class="visually-hidden">Previous</span>
  				</button>
  				<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    				<span class="carousel-control-next-icon" aria-hidden="true"></span>
    				<span class="visually-hidden">Next</span>
  				</button>
			</div>
		</div>



		<!---------------------------------- Footer ------------------------------->
	<div class="Footer">
		<div class="Navigare">
			<p class="NavTitle">Navigare</p>
			<a href="index.html" class="NavbarItem">Home</a><br>
			<a href="portofoliu.html" class="NavbarItem">Lucrările Noastre</a><br>
			<a href="produse.html" class="NavbarItem">Produse</a><br>
			<a href="contact.html" class="NavbarItem">Contact</a><br>
			<a href="gdpr.html" class="NavbarItem">Termeni și Condiții</a><br>
		</div>
		<div class="FooterContact">
			<p class="NavTitle">Contact</p>
			<a href="mailto:office.aivan@gmail.com" class="Email" id="FooterContactItem">
				<i style='font-size:20px' class='far'>&#xf0e0;</i> office.aivan@gmail.com
			</a>
			<br>
			<a href="tel:0722 358 635" class="Phone" id="FooterContactItem">
				<i style='font-size:20px' class='fas' >&#xf3cd;</i> 0722 358 635
			</a>
		</div>
		<div class="FooterAdress">
			<p class="NavTitle">Adress</p>
			<a href="https://goo.gl/maps/ERksYtX9gHqZJuZa9" class="Adress" id="FooterContactItem">
				<i class="fas fa-map-marker-alt" id="FooterLocationIcon"></i>  Brașov, Str. Cocorului, Nr. 15, Bl. 219, Sc. C, Ap. 13
			</a>
			<p class="NavTitle" style="margin-top: 5%;">Program</p>
			<div class="Adress" id="FooterContactItem" style="cursor: pointer;">
				<i class="far fa-clock"></i>  Luni - Vineri: 09:00 - 17:00
			</div>
		</div>
		<p class="Copyright">Copyright © 2020 | 45154271 J8/1433/2023</p>
	</div>
	<!---------------------------------- Cookie ---------------------------------->
	<div id="cookieConsent">
	<div id="closeCookieConsent">x</div>
		Acest site foloseste cookie-uri. Prin continuarea navigării pe acest site vă
		exprimați acordul pentru politica noastră <a href="gdpr.html">GDPR</a>.
		<a class="cookieConsentOK">Sunt de acord!</a>
	</div>
<!---------------------------------------------------------------------------->
	<script type="text/javascript" src="script.js"></script>
</body>
</html>