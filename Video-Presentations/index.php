<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="Who is iSpokespeople?  Founded over a decade ago we have been passionately assisting companies and individuals enhance their Internet marketing.">
	<?php include("../includes/head.php"); ?>
	<title>iSpokespeople&reg; Video Presentations</title>
</head>

<body>
	<?php include("../includes/nav.php"); ?>
	<section class="jumbotron">
		<h1 class="text-center">Video Presentations</h1>
		<div class="row">
			<div class="col-md-6">
				<h2>With our tailor-made Video Presentations you get: </h2>
				<ul>
					<li>Professional Spokesperson</li>
					<li>Skilled Editing and Compositing</li>
					<li>Motion Graphics</li>
					<li>Graphics</li>
					<li>Effects</li>
				</ul>
				<h3>Great for a website Demonstration, Sales Video, Product Demonstration, or Educational Video</h3>
			</div>
			<div class="col-md-6">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/SkWvS-ZOpPw?showinfo=0&controls=0&modestbranding=1&autoplay=1&loop=1&autohide=1&rel=0"></iframe>
				</div>
			</div>
		</div>
	</section>
	<section class="container-fluid bg-light p-5">
		<div class="">
			<?php 
    $type = "Presentation";
    $show = "12";
	$rand = false;
	$columns = 3;
    include("../includes/showDemo.php"); 
    ?>
		</div>
	</section>
	<section class="container-fluid bg-secondary p-5 text-light">
		<h1 class="text-center">About <em>i</em>Spokespeople<sup>&reg;</sup> <strong>Video</strong></h1>
		<div class="card-group">
			<div class="card text-white bg-info mb-3">
				<h3 class="card-header">Started in 2008</h3>
				<div class="card-body">
					<h5 class="card-title">Over a Decade of Experience</h5>
					<p class="card-text">Founded over a decade ago we have been passionately assisting companies and individuals enhance their Internet marketing. We comprehend business of Internet Video and Internet Marketing is our specialized. We pride ourselves on our <span class="thin">Spokespeople</span> Video Specialists.</p>
				</div>
			</div>
			<div class="card text-white bg-info mb-3">
				<h3 class="card-header">Collaboration</h3>
				<div class="card-body">
					<h5 class="card-title">We Work With You</h5>
					<p class="card-text">Your business provides an <em>solution</em> for your customers, however in some cases that solution requires some describing. That is where we come in. Our Creative Director will collaborate with you to create your script. Then our team of video Professionals use thier skills to put your video together.</p>
				</div>
			</div>
			<div class="card text-white bg-info mb-3">
				<h3 class="card-header">Individualized</h3>
				<div class="card-body">
					<h5 class="card-title">Online Video</h5>
					<p class="card-text">Our individualized method is exactly what sets us apart from the competitors. You will get your very own Project Manager and all technical assistance is done internal by the individuals that create our items. A Video Spokesperson provides your site the included edge of modern-day strategies that capture your website visitors' eyes and ears.</p>
				</div>
			</div>
			<div class="card text-white bg-info mb-3">
				<h3 class="card-header">Professional</h3>
				<div class="card-body">
					<h5 class="card-title">Pro Team</h5>
					<p class="card-text">Picture having staff members who are better-trained, leads who are ready to purchase, and consumers that understand your product and servicess. Isn't really that exactly what you actually desire? Call <a class="white" href="tel://801-748-2281" title="Give us a call.">801-748-2281</a>. get to understand us and see why our clients consider us to be a lot more than simply a video business.</p>
				</div>
			</div>
	</section>
	<?php include("../includes/modal.php"); ?>
	<?php include("../includes/footer.php"); ?>
	<script src="../js/jquery.matchHeight.js"></script>
	<script>
		$( document ).ready( function () {
			$( '.award' ).matchHeight( {
				byRow: false
			} );
		} );
	</script>
</body>

</html>