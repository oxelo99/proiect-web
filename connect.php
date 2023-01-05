<?php
	$Nume = $_POST['Nume'];
	$Prenume = $_POST['Prenume'];
	$Email = $_POST['Email'];
	$Parola = $_POST['Parola'];
	$Number = $_POST['Numar'];

	// Database connection
	$conn = new mysqli('localhost','root','','registration');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Nume, Prenume, Email, Parola, Numar) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssi", $Nume, $Prenume, $Email, $Parola, $Numar);
		$execval = $stmt->execute();
		echo $execval;
		echo "Te-ai inregistrat cu succes!";
		$stmt->close();
		$conn->close();
	}
?>