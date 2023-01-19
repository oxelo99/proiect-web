<?php
		include_once './includes/header.php'
?>
	<section class="signup-form">
		<h2 style="text-align: center; margin-bottom: 10%;">Sign Up</h2>
		<form action="includes/signup.inc.php" method="post">

		  <div class="mb-3">
		    <label for="exampleInputName" class="form-label">Full Name</label>
		    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		  </div>

		  <div class="mb-3">
		    <label for="exampleInputNamw" class="form-label">Email address</label>
		    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
		  </div>

		  <div class="mb-3">
		    <label for="exampleInputNamw" class="form-label">Phone Number</label>
		    <input type="Number" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		  </div>
		  
		  <div class="mb-3">
		    <label for="exampleInputName" class="form-label">Username</label>
		    <input type="text" name="uid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		  </div>


		  <div class="mb-3">
		    <label for="exampleInputPassword1" class="form-label">Password</label>
		    <input type="password" name="pwd" class="form-control" id="exampleInputPassword1">
		  </div>

		  <div class="mb-3">
		    <label for="exampleInputPassword1" class="form-label">Repeat Password</label>
		    <input type="password" name="pwdrepeat" class="form-control" id="exampleInputPassword1">
		  </div>

		  <div class="mb-3 form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Bifand aceasta caseta imi exprim acordul privind <a href="gdpr.php">termenii si conditiile</a> 
		    </label>
		  </div>
		  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>

		<?php
		if(isset($_GET["error"])){
			if($_GET["error"] == "emptyinput"){
				echo "<p>Toate campurile sunt obligatorii!</p>";
			}
			else if($_GET["error"] == "invaliduid"){
				echo "<p>Alege un username valid!</p>";
			}
			else if($_GET["error"] == "invalidemail"){
				echo "<p>Alege o adresa de email valida!</p>";
			}
			else if($_GET["error"] == "passwordsdontmatch"){
				echo "<p>Parolele nu se potrivesc!</p>";
			}
			else if($_GET["error"] == "stmtfailed"){
				echo "<p>Ceva nu a functionat, incearca din nou!</p>";
			}
			else if($_GET["error"] == "usernametaken"){
				echo "<p>Alege alt username!</p>";
			}
			else if($_GET["error"] == "none"){
				echo "<p>Te-ai inregistrat cu succes!</p>";
			}
		}
		?>
	</section>
	
	<?php
 		include_once 'footer.php'
	?>

</body> 
</html>