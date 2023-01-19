<?php
		include_once './includes/header.php'
?>
	<div class="pageContent">
		<!--  ********** Main Carousel ************ -->
		<?php
			if(isset($_SESSION["useruid"])){
				echo "<p>Bine ai revenit, " . $_SESSION["useruid"] . "</p>";
			}
		?>
		<div class="slider">
			<div class="slides">
				<input type="radio" name="radio-btn" id="radio1">
				<input type="radio" name="radio-btn" id="radio2">
				<input type="radio" name="radio-btn" id="radio3">
				<div class="slide first">
  					<img src="./media/homecover.jpg" alt="image1">
  				</div>
  				<div class="slide">
 					<img src="./media/homecover2.jpg" alt="image2">
 				</div>
 				<div class="slide">
  					<img src="./media/homecover3.jpg" alt="image3">
  				</div>
  			</div>
		</div>
		
		<div class="navigation-manual">
  			<label for="radio1" class="manual-btn"></label>
  			<label for="radio2" class="manual-btn"></label>
  			<label for="radio3" class="manual-btn"></label>
  		</div>
		<!--*************************************** -->

		<!--  ********** Featured Items ************ -->
		<div class="featuredItems">
			<p class="featuredTitle">Featured Items</p>
			<div class="productSlider">
				<div class="product">
					<img src="./media/22907c" class="productImage">
					<p class="productName">Shirt</p>
					<p class="productPrice">100 Lei</p>
				</div>
				<div class="product">
					<img src="./media/21800c.jpg" class="productImage">
					<p class="productName">Camasa Style LS</p>
					<p class="productPrice">120 Lei</p>
				</div>
				<div class="product">
					<img src="./media/22005c.jpg" class="productImage">
					<p class="productName">Urban</p>
					<p class="productPrice">50 Lei</p>
				</div>
				<div class="product">
					<img src="./media/13404c.jpg" class="productImage">
					<p class="productName">Basic</p>
					<p class="productPrice">30 Lei</p>
				</div>
			</div>
		</div>
		<!--**************************************** -->
	</div>

<!-------------------------------- Newsletter -------------------------------->
	<form class="Newsletter">
		<p class="NewsletterText">Abonează-te acum la newsletter-ul nostru și nu pierde nicio ofertă!</p>
		<br>
		<input type="email" placeholder="ex: someone@domain.ro" class="PhoneCase"
		style="margin: 0% 0 2% 0;"><br>
		<input type="submit" value="Trimite" class="SubmitButton" style="padding: 2% 3% 2% 3%;">
	</form>
<!---------------------------------------------------------------------------->

<!---------------------------------- Footer ---------------------------------->
	<?php
		include_once 'footer.php'
 	?>

</body> 
</html>