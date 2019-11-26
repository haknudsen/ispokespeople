<?php
require( "connect-demo.php" );
$table = $style . "_content";
$sql = "SELECT * FROM " . $table . " ORDER BY RAND() LIMIT 3";
$contentResult = $conn->query( $sql );
if ( $contentResult->connect_error ) {
  die( "Connection failed: " . $conn->connect_error );
}
$z = 0;
while ( $row = $contentResult->fetch_assoc() ) {
  $mediaHeading[ $z ] = $row[ "title" ];
  $mediaContent[ $z ] = $row[ "content" ];
  $z++;
}
$sql = "SELECT * FROM videos WHERE " . $style . " =true ORDER BY RAND() LIMIT 3";
$result = $conn->query( $sql );
if ( $result->num_rows > 0 ) {
  echo '<div class="card-deck">';
  $x = 0;
  while ( $row = $result->fetch_assoc() ) {
    switch ( $x ) {
      case 0:
        $bounce = "bounceInLeft";

        break;
      case 1:
        $bounce = "bounceInUp";
        break;
      case 2:
        $bounce = "bounceInRight";
        break;
      default:
        $bounce = "bounceInUp";

    }
    $description = $row[ "description" ];
    $video = $row[ "Name" ];
    echo '
    <div class="card wow ' . $bounce . '">
      <div class="card-header bg-gradient-mine">' . $mediaHeading[ $x ] . '</div>
          <div class="card-img-top">';
    echo '<div itemprop="video" itemscope itemtype="http://schema.org/VideoObject" >';
    echo PHP_EOL;
    echo '	<div class="poster poster-card" alt="' . $keyword[ $altNum ] . " Example" . '" data-toggle="modal" data-target=".bd-example-modal-lg" data-video="' . $video . '">';
    echo PHP_EOL;
    echo '		<img itemprop="thumbnail" src="https://www.websitetalkingheads.com/ivideo/videos/' . $video . '.jpg" class="img-fluid video" alt="' . $keyword[ $altNum ] . " Example" . '">';
    echo PHP_EOL;
    echo '		<meta itemprop="contentURL" content="https://www.websitetalkingheads.com/ivideo/videos/' . $video . '.mp4" />';
    echo PHP_EOL;
    echo '		<meta itemprop="description" content="' . $description . '" />';
    echo PHP_EOL;
    echo '		<meta itemprop="thumbnailUrl" content="https://www.websitetalkingheads.com/ivideo/videos/' . $video . '.jpg" />';
    echo PHP_EOL;
    echo '		<meta itemprop="uploadDate" content="2019-01-19" />';
    echo PHP_EOL;
    echo '		<div class="btn-play"></div>';
    echo PHP_EOL;
    echo '	</div>';
    echo PHP_EOL;
    echo '</div>';
    echo PHP_EOL;
    echo '
          </div>
          <div class="card-body">
            <h5 class="card-title" itemprop="name">' . $video . '</h5>
            <div class="card-text">' . $mediaContent[ $x ] . '</div>
          </div>
        </div>';
    echo PHP_EOL;
    if ( $x == 2 ) {
      break;
    } else {
      $x = $x + 1;
    }
  }
} else {
  echo "0 results";
}
echo PHP_EOL;
echo '</div>';
echo '<div class="c"></div>';

?>