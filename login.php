<?php
	$page_name = 'Login';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <meta http-equiv="Content-Security-Policy" content="default-src 'self'"> -->
	<meta name="robots" content="index,follow"><!-- All Search Engines -->
	<meta name="googlebot" content="index,follow"><!-- Google Specific -->
	<meta name="description" content="Klinik am Klausenpass - Ihr Kurhaus in der Innerschweiz">

	<title><?php echo($page_name); ?> - Klinik am Klausenpass</title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/framework.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>

	<div class="hero">
        <div class="container hero-content shadow-3">
            <h1><?php echo($page_name); ?></h1>      
        </div>
    </div>

	<div class="top-banner shadow-2">
		<?php include('includes/navigation.php'); ?>
	</div>

	<div class="main-wrapper" id="main">
		<section class="main container shadow-1	">
			<article>
				<h2>Login</h2>

				<form name="input" action="" method="post">
				    <label for="password">Password:</label><input type="password" value="" id="password" name="password" />
				    <input type="submit" value="Home" name="sub" />
				  </form>

				<?php 
					session_start();

					$errorMsg = "";
					$validUser = $_SESSION["login"] === true;
					if(isset($_POST["sub"])) {
					  $validUser = $_POST["password"] == "ufbau";
					  if(!$validUser) $errorMsg = "Invalid username or password.";
					  else $_SESSION["login"] = true;
					}
					if($validUser) {
					   header("Location: /login-success.php"); die();
					}
				?>
				
			</article>
		</section>
	
		<?php
			include('includes/footer.php');
			include('includes/scripts.php');
		?>


	</div>

</body>
</html>