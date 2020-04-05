<?php
	session_start();
	
	if(isset($_SESSION["age"])) {
		$num_years_to_save = 100 - $_SESSION["age"];
		$amt_saved_per_year = $_SESSION["salary"] * ($_SESSION["percent_saved"]/100) * $_SESSION["emp_match"];
		$total_saved = 0;
		
		for ($x = 1; $x <= $num_years_to_save; $x++) {
				$total_saved += $amt_saved_per_year;

				if ($total_saved >= $_SESSION['des_amt']) {
					$results = "Desired amount met at age " . ($x + $_SESSION['age']);
					break;
				}
			}
		if ($total_saved < $_SESSION["des_amt"]) {
			$results = "Savings will not be met in time";
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
  <title>Calculate Retirement</title>

  <style>
    input {
      margin-bottom: 0.5em;
    }
  </style>
</head>

<body>
	
	<h1>Welcome to <span style="font-style:italic; font-weight:bold; color: maroon">
		Retirement Results</span>!</h1>

	<p style="color: red">
		<!--Placeholder for error messages-->
	</p>

	<label>Here is the information you entered: </label><br>
	<p>
	Age: <?php echo $_SESSION["age"];?><br>
		
	Salary: <?php echo $_SESSION["salary"];?><br>
		
	Percent Saved: <?php echo $_SESSION["percent_s"];?><br>
	
	Employer Match: <?php echo $_SESSION["emp_match"];?><br>
	
	Desired Amount: <?php echo $_SESSION["des_amt"];?><br>
	
	<br>
	Results: 
	<br>
	<?php echo $results; ?>
	</p>
	
	<h2><a href="exit_page.php">Reset</a></h2>
</body>

</html>
