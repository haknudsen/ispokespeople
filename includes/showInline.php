<?php
/*variables available
$video-video video
$alt- alt tag contents
#bgColor-background color
 */
require( "connect-demo.php" );
if ( !$alt ) {
	$alt = $video;
}
if ( !$bgColor ) {
	$bgColor = "#50647F";
}
if ( !$btnColor ) {
	$btnColor = "#0072FF";
}
echo PHP_EOL;
echo '<div class="embed-responsive embed-responsive-16by9">
<div itemprop="video" itemscope itemtype="http://schema.org/VideoObject">
<div itemprop="name">' . $video . '</div>
<meta itemprop="duration" content="T1M33S" />
<meta itemprop="thumbnailUrl" content="https://www.websitetalkingheads.com/ivideo/videos/' . $video . '.jpg"" />
<meta itemprop="contentURL" content="https://www.websitetalkingheads.com/ivideo/videos/' . $video . '.mp4" />
<meta itemprop="embedURL" content="http://www.example.com/videoplayer.swf?video=123" />
<meta itemprop="uploadDate" content="2018-23-11T08:00:00+08:00" />
	<video style="background-color:'. $bgColor .'" class="video-js embed-responsive-item" controls preload="auto" poster="https://www.websitetalkingheads.com/ivideo/videos/' . $video . '.jpg" data-setup="{}">
		<source src="https://www.websitetalkingheads.com/ivideo/videos/' . $video . '.mp4" type="video/mp4">
		<p class="vjs-no-js">
			To view this video please enable JavaScript, and consider upgrading to a web browser that
			<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
		</p>
	</video>
</div>
';

?>