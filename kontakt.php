<?php
	$page_name = 'Kontakt';
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
            <h1>Klinik am Klausenpass</h1>      
        </div>
    </div>

	<div class="top-banner shadow-2">
		<?php include('includes/navigation.php'); ?>
	</div>

	<div class="main-wrapper" id="main">
		<section class="main container shadow-1	">
			<article>
				<h2>Kontakt</h2>

				<form action="">
					
					<div class="row">
						<div class="col">
							<label for="Name">Name</label>
							<input type="text" name="Name">
						</div>
						<div class="col">
							<label for="Pfadiname">Pfadiname</label>
							<input type="text" name="Pfadiname">
						</div>
					</div>
					<div class="row">
						<div class="col">
							<label for="E-Mail">E-Mail</label>
							<input type="email" name="E-Mail">
						</div>
						<div class="col">
							<label for="Tel">Telefon</label>
							<input type="tel" name="Tel">
						</div>
					</div>
					<div class="row">
						<div class="col">
							<label for="Nachricht">Nachricht</label>
							<textarea name="Nachricht" id="Nachricht" cols="" rows="130"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col">
							&nbsp;
						</div>
						<div class="col">
							<input type="submit" value="Absenden">
						</div>
					</div>

				</form>

			</article>
		</section>
	
		<?php include('includes/footer.php'); ?>

	</div>

</body>
</html>