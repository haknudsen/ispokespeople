<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P322G9X"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a href="http://www.ispokespeople.com"><img src="/img/head.png" alt="iSpokespeople Logo" class="img-fluid" style="max-height: 98px" title="iSpokespeople Home"/></a>
	<a href="http://www.ispokespeople.com/" class="navbar-brand"><em>i</em>Spokespeople</a>
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
	<div class="collapse navbar-collapse justify-content-center" id="navbarToggler">
		<ul class="nav justify-content-center">
			<li class="nav-item"><a href="http://www.ispokespeople.com" class="nav-link">Home</a>
			</li>
			<li class="nav-item"><a href="../spokespeople/" title="Our Spokespeople" class="nav-link">Spokespeople</a>
			</li>
			<li class="nav-item"><a href="../Video-Presentations/" title="Video Presentations" class="nav-link">Video Presentations</a>
			</li>
			<li class="nav-item"><a href="../Why-Video/" title="Why Video" class="nav-link">Why Video</a>
			</li>
			<li class="nav-item"><a href="../about/" title="About iSpokespeople" class="nav-link">About</a>
			</li>
			<li class="nav-item"><a href="../order/" title="Order a iSpokesperson" class="nav-link">Order</a>
			</li>
			<li class="nav-item nav-link cursor" data-toggle="modal" data-target="#contactModal"><i class="fal fa-file-alt"></i> Contact
			</li>
		</ul>
	</div>
	<a href="tel://801-748-2281" title="Give us a call." class="navbar-brand"><i class="far fa-phone"></i>801-748-2281</a>
</nav>
<div class="modal fade" id="contactModal">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header bg-primary justify-content-center">
				<h4 class="modal-title  justify-content-center text-light">Contact Us</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<?php
                $form= "forms/contact.php";
				if ( $_SERVER[ 'REQUEST_URI' ] != "/" ) {
					include( "../" . $form );
				} else {
					include( $form );
				}
				?>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer bg-primary">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>
