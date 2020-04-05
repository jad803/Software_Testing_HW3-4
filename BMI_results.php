<?php
	session_start();
	
	if(isset($_SESSION["weight"])) {
		$total_height_inches = $_SESSION["height_feet"]*12 + $_SESSION["inches_rem"];
		$sqrd_height = $total_height_inches * $total_height_inches;
	
		$BMI = ($_SESSION["weight"] / $sqrd_height) * 703;
		
		if($BMI <= 18.5) {
			$results = "Underweight";
		}
		else if($BMI <= 24.9) {
			$results = "Normal";
		}
		else if($BMI <= 29.9) {
			$results = "Overweight";
		}
		else if($BMI >= 30.0) {
			$results = "Obese";
		}
	}
	else {
		header("Location: main_page.php");
		exit();
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
		BMI Results</span>!</h1>

	<p style="color: red">
		<!--Placeholder for error messages-->
	</p>

	<label>Here is the information you entered: </label><br>
	<p>
	Height in Feet: <?php echo $_SESSION["height_feet"];?><br>
		
	Remaining inches: <?php echo $_SESSION["inches_rem"];?><br>
		
	Weight in pounds: <?php echo $_SESSION["weight"];?><br>
	
	<br>
	Calculated BMI: 
	<?php 
	echo $BMI;
	echo "<br>", "Results: ";
	echo $results;
	?>
	</p>
	
	<h2><a href="exit_page.php">Reset</a></h2>
</body>

</html>
