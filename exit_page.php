<?php
	session_start();
	
	if(session_destroy()) {
		header("Location: main_page.php");
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Logged Out</title>
</head>

<body>
  <!-- php to handle logging out -->
  <?php
  
  ?>

  <h1>Logged Out</h1>

  <p>
    You are now exited.
  </p>

  <p>
    <a href="login_page.php">Log in</a> again.
  </p>
</body>

</html>
