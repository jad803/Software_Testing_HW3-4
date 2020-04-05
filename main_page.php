<?php
	session_start();
	
	if(isset($_POST['Submit'])){
		
		if($_POST["choice"] == "BMI") {
			header("Location: BMI_page.php");
			exit();
		}
		else if($_POST["choice"] == "Retirement") {
			header("Location: Retirement_page.php");
			exit();
		}
		else {
			$error = "Something went wrong, please try again";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Choose to Calculate BMI or Retirement Plan</title>

  <style>
    input {
      margin-bottom: 0.5em;
    }
  </style>
</head>

<body>
	
	<h1>Choose bewteen<span style="font-style:italic; font-weight:bold; color: maroon">
		Calculate BMI or Retirement Plan</span>!</h1>

	<p style="color: red">
		<!--Placeholder for error messages-->
	</p>

	<form method="post" action="main_page.php">
		<label>What page would you like to go to: </label><br>
		<input type="radio" name="choice" <?php if (isset($choice) && $choice=="BMI") echo "checked";?>
		value="BMI">BMI<br>
		<input type="radio" name="choice" <?php if (isset($choice) && $choice=="Retirement") echo "checked";?>
		value="Retirement">Retirement<br>
		
		<input type="submit" name="Submit" value="Submit"><br>
		<?php echo "<p styple = 'color: red'>" . $error . "</p>";?>
	</form>


	<h2><a href="exit_page.php">Reset</a></h2>
</body>

</html>
