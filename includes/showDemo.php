<?php
/*variables available
 $rand- Randomize list
 $columns- number of columns
 $type-  type of videos
 $keyword = alt tag for images
 $show-number to show
 Video types
 Whiteboard
 Animation
 Presentation
 Typography
 Demo
 */

require( "connect-demo.php" );
$keyword = array();
if ( !$show ) {
	$show = 99;
}
$sql = "SELECT * FROM videos";
switch ( $type ) {
	case "Whiteboard":
		$sql .= " 	WHERE whiteboard=true";
		array_push( $keyword, "Whiteboard", "Whiteboard Animation", "Whiteboard Explainer", "Explainer", "Drawing", "Sketch" );
		break;
	case "Animation":
		$sql .= " 	WHERE animation=true";
		array_push( $keyword, "Animation", "Animated Video", "Animated Explainer" );
		break;
	case "Presentation":
		$sql .= " 	WHERE presentation=true";
		array_push( $keyword, "Custom Video","Video Presentation","Web Marketing Video","Web Video Production","Spokesperson Video" );
		break;
	case "Demo":
		$sql .= " 	WHERE demo=true";
		array_push( $keyword, "Custom Video","Video Presentation","Example Video","Demo Video" );
		break;
	default:
		array_push( $keyword, "Web Video", "Online Video", "Website Video" );

}

if ( $rand === true ) {
	$sql .= " ORDER BY RAND()";
}else{
	$sql .= " ORDER BY rank";
}
if ( $show > 0 ) {
	$sql .= " LIMIT " . $show;
}
//echo($sql);
$result = $conn->query( $sql );
switch ( $columns ) {
	case 1:
		$span = 12;
		break;
	case 2:
		$span = 6;
		break;
	case 3:
		$span = 4;
		break;
	case 4:
		$span = 3;
		break;
	default:
		$span = 4;
}
if ( $result->num_rows > 0 ) {
	echo PHP_EOL;
	echo '<div class="row poster-row">';
	echo PHP_EOL;
	while ( $row = $result->fetch_assoc() ) {
		$altNum = array_rand( $keyword, 1 );
		$alt = $altNum[ $keyword ];
		$name = $row[ "Name" ];
		$description = $row[ "description" ];
		echo '<div itemprop="video" itemscope itemtype="http://schema.org/VideoObject" class="col-lg-' . $span . '">';
		echo PHP_EOL;
		echo '	<div class="poster" alt="' . $keyword[ $altNum ] . " Example" . '" data-toggle="modal" data-target=".bd-example-modal-lg" data-video="' . $name . '">';
		echo PHP_EOL;
		echo '		<img itemprop="thumbnail" src="https://www.websitetalkingheads.com/ivideo/videos/' . $name . '.jpg" class="img-fluid video" alt="' . $keyword[ $altNum ] . " Example" . '">';
		echo PHP_EOL;
		echo '		<meta itemprop="contentURL" content="https://www.websitetalkingheads.com/ivideo/videos/' . $name . '.mp4" />';
		echo PHP_EOL;
		echo '		<meta itemprop="description" content="' . $description . '" />';
		echo PHP_EOL;
		echo '		<meta itemprop="thumbnailUrl" content="https://www.websitetalkingheads.com/ivideo/videos/' . $name . '.jpg" />';
		echo PHP_EOL;
		echo '		<meta itemprop="uploadDate" content="2019-01-19" />';
		echo PHP_EOL;
		echo '		<div class="btn-play"></div>';
		echo PHP_EOL;
		echo '		<div itemprop="name" class="poster-title text-center">' . $name . '</div>';
		echo PHP_EOL;
		echo '	</div>';
		echo PHP_EOL;
		echo '</div>';
		echo PHP_EOL;
	}
} else {
	echo "0 results";
}
echo PHP_EOL;
echo '</div>';
echo PHP_EOL;
echo'<div itemscope itemtype="http://schema.org/VideoObject">
    <h2 itemprop="name">Quote Zoom</h2><br>
    <link itemprop="contentUrl" href="https://www.websitetalkingheads.com/ivideo/videos/Quote Zoom.mp4">
    <time itemprop="duration" content="PT00H01M53S">00:01:53</time><br>
    <img itemprop="thumbnailUrl" src="https://www.websitetalkingheads.com/ivideo/videos/Quote Zoom.jpg" alt="Quote Zoom"><br>
    <span itemprop="uploadDate">2019-01-14</span><br>
    <span itemprop="description">Our individualized method is exactly what sets us apart from the competitors. You will get your very own Project Manager and all technical assistance is done internal by the individuals that create our items. A Video Spokesperson provides your site the included edge of modern-day strategies that capture your website visitors eyes and ears.</span>
</div>';
?>