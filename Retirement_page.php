<?php
	session_start();
	
	if(isset($_POST['Submit'])) {
		
		$_SESSION["age"] = $_POST["age"];
		$_SESSION["salary"] = $_POST["salary"];
		$_SESSION["percent_s"] = $_POST["percent_s"];
		$_SESSION["emp_match"] = 1.35;
		$_SESSION["des_amt"] = $_POST["des_amt"];
		
		if(isset($_SESSION['age'])) {
			header("Location: Retirement_results.php");
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
  <title>Calculate Retirement Plan</title>

  <style>
    input {
      margin-bottom: 0.5em;
    }
  </style>
</head>

<body>
	
	<h1>Welcome to <span style="font-style:italic; font-weight:bold; color: maroon">
		Retirement Calcurator</span>!</h1>

	<p style="color: red">
		<!--Placeholder for error messages-->
	</p>

	<form method="post" action="Retirement_page.php">
		<label>Please fill in the following information: </label><br>
		Age: <input type="text" name="age" <?php echo $age;?>><br>
		
		Salary: <input type="text" name="salary" <?php echo $salary;?>><br>
		
		Percent Saved (whole number): <input type="text" name="percent_s" <?php echo $percent_s;?>><br>
		
		Desired Amount: <input type="text" name="des_amt" <?php echo $des_amt;?>><br>
		
		
		<input type="submit" name="Submit" value="Submit"><br>
		<?php echo "<p styple = 'color: red'>" . $error . "</p>";?>
	</form>


	<h2><a href="exit_page.php">Reset</a></h2>
	
</body>

</html>
