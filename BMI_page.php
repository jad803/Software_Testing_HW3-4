<?php
	session_start();
	
	if(isset($_POST['Submit'])) {
		
		$_SESSION["height_feet"] = $_POST["height_feet"];
		$_SESSION["inches_rem"] = $_POST["inches_rem"];
		$_SESSION["weight"] = $_POST["weight"];
		
		if(isset($_SESSION['weight'])) {
			header("Location: BMI_results.php");
			exit();
		}
		else {
			// error
		}	
	}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Calculate BMI</title>

  <style>
    input {
      margin-bottom: 0.5em;
    }
  </style>
</head>

<body>
	
	<h1>Welcome to <span style="font-style:italic; font-weight:bold; color: maroon">
		BMI Calcurator</span>!</h1>

	<p style="color: red">
		<!--Placeholder for error messages-->
	</p>

	<form method="post" action="BMI_page.php">
		<label>Please fill in the following information: </label><br>
		Height in Feet: <input type="text" name="height_feet" <?php echo $height_feet;?>><br>
		
		Remaining inches: <input type="text" name="inches_rem" <?php echo $inches_rem;?>><br>
		
		Weight in pounds : <input type="text" name="weight" <?php echo $weight;?>><br>
		
		<input type="submit" name="Submit" value="Submit"><br>
		<?php echo "<p styple = 'color: red'>" . $error . "</p>";?>
	</form>


	<h2><a href="exit_page.php">Reset</a></h2>
</body>

</html>
