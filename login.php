<?php
		include_once './includes/header.php'
?>
	<section class="signup-form" style="padding-bottom: 5%;">
		<h2 style="text-align: center; margin-bottom: 10%;">Login</h2>
		<form action="./includes/login.inc.php" method="post">

		  <div class="mb-3">
		    <label for="exampleInputNamw" class="form-label">Email address / Username </label>
		    <input type="email" name="uid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
		  </div>

		  <div class="mb-3">
		    <label for="exampleInputPassword1" class="form-label">Password</label>
		    <input type="password" name="pwd" class="form-control" id="exampleInputPassword1">
		  </div>

		  <button type="submit" name="submit" class="btn btn-primary">Login</button>
		</form>

		<?php
		if(isset($_GET["error"])){
			if($_GET["error"] == "emptyinput"){
				echo "<p>Toate campurile sunt obligatorii!</p>";
			}
			else if($_GET["error"] == "wronglogin"){
				echo "<p>Username sau parola invalide!</p>";
			}
		}
		?>
	</section>

	
	<?php
 		include_once 'footer.php'
	?>

</body> 
</html> 