<?php
		include_once './includes/header.php'
?>
	<!---------------------------------- Content --------------------------------->
	<p class="ContactTitle">Contact</p>
	<div class="ContactContent">
		<div class="Data">
			<p style="font-family: 'TimesNewRoman', cursive;  font-weight: bold;"> Informații și comenzi telefonice: </p>
			<p style="font-family: 'TimesNewRoman', cursive;  font-weight: bold;"> Luni - Vineri: 09:00 - 17:00;</p>
			<a href="tel:0722 358 635" class="PhoneContact">
				<i style='font-size:20px' class='fas' id="ContactTelIcon">&#xf3cd;</i>&nbsp;&nbsp;&nbsp;0722 358 635
				<br>
			</a>
			<a href="tel:0732 827 775" class="PhoneContact">
				<i style='font-size:20px' class='fas' id="ContactTelIcon">&#xf3cd;</i>&nbsp;&nbsp;&nbsp;0732 827 775
				<br>
			</a>
			<a href="mailto:office.aivan@gmail.com" class="PhoneContact">
				<i style='font-size:20px' class='far' id="ContactTelIcon">&#xf0e0;</i>&nbsp;&nbsp;&nbsp;office.aivan@gmail.com
				<br>
			</a>
			<p style="font-family: 'TimesNewRoman', cursive;  font-weight: bold;"> Adresa: </p>
			<a href="https://goo.gl/maps/ERksYtX9gHqZJuZa9" class="PhoneContact">
				<i style='font-size:20px' class='fas' id="ContactTelIcon">&#xf015;</i>&nbsp;&nbsp;&nbsp;Brașov, Str. Cocorului, Nr. 15, Bl. 219, Sc. C, Ap. 13
			</a>
		</div>
		<section style="margin-left: 10%;">
		<p style="font-family: 'TimesNewRoman', cursive;">Lasă-ne un mesaj iar noi vă vom răspunde în cel mai scurt timp posibil!</p>
		<form action="form.php" method="post">

		  <div class="mb-3">
		    <label for="exampleInputName" class="form-label">Nume</label>
		    <input type="text" name="Nume" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		  </div>

		  <div class="mb-3">
		    <label for="exampleInputNamw" class="form-label">Prenume</label>
		    <input type="text" name="Prenume" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		  </div>

		  <div class="mb-3">
		    <label for="exampleInputNamw" class="form-label">Numar de telefon</label>
		    <input type="Number" name="Telefon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		  </div>
		  
		  <div class="mb-3">
		    <label for="exampleInputName" class="form-label">Email</label>
		    <input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		  </div>


		  <div class="mb-3">
		    <label for="exampleInputPassword1" class="form-label">Mesajul tau</label>
		    <input type="text" name="Mesaj" class="form-control" id="exampleInputPassword1">
		  </div>

		  <button type="submit" name="submit" value="Trimite" class="btn btn-primary">Submit</button>
		</form>
		
	</div>
	</div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1671.7197159739928!2d25.631571904160456!3d45.63456518437408!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa57c507425cca40f!2sFashion%20Boutique%20S.RL.!5e0!3m2!1sro!2sro!4v1674154971324!5m2!1sro!2sro" width="70%" height="450" class="Map" style="border:0; border-radius: 5%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		<!---------------------------------------------------------------------------->

	<!---------------------------------- Footer ---------------------------------->
	<?php
 			include_once 'footer.php'
 		?>
</body>
</html> 