<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="Who is iSpokespeople?  Founded over a decade ago we have been passionately assisting companies and individuals enhance their Internet marketing.">
<title>About iSpokespeople® Video</title>
<?php include("../includes/head.php"); ?>
</head>

<body>
<?php include("../includes/nav.php"); ?>
<section class="alert">
	<h1 class="text-center">About <em>i</em>Spokespeople<sup>&reg;</sup> <strong>Video</strong></h1>
	<div class="card-columns card-columns-no-gap">
		<?php include("../includes/ispokespeople-content.php"); ?>
	</div>
</section>
<section class="alert alert-info my-5 clearfix">
	<div class="container">
		<div class="fifty float-left">
			<?php include("../includes/spokespeople-image.php"); ?>
		</div>
		<?php
		$table = "Spokespeople_content";
		include( "../includes/content.php" );
		?>
	</div>
</section>
<?php include("../includes/footer.php"); ?>
</body>
</html>