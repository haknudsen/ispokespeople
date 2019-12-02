<?php
require( "connect-demo.php" );
$table = $style . "_content";
if($style === "spokesperson"  or $style === "ispokespeople"){
    $style = "spokespeople";
}
$z = 0;
$sql = "SELECT * FROM ispokespeople_content ORDER BY RAND() LIMIT 5";
$contentResult = $conn->query( $sql );
if ( $contentResult->connect_error ) {
  die( "Connection failed: " . $conn->connect_error );
}
while ( $row = $contentResult->fetch_assoc() ) {
  $mediaHeading[ $z ] = $row[ "title" ];
  $mediaContent[ $z ] = $row[ "content" ];
  $z++;
}
$sql = "SELECT * FROM presentation_content ORDER BY RAND() LIMIT 4";
$contentResult = $conn->query( $sql );
if ( $contentResult->connect_error ) {
  die( "Connection failed: " . $conn->connect_error );
}
while ( $row = $contentResult->fetch_assoc() ) {
  $mediaHeading[ $z ] = $row[ "title" ];
  $mediaContent[ $z ] = $row[ "content" ];
  $z++;
}
$sql = "SELECT * FROM videos WHERE spokespeople = true OR Presentation = true ORDER BY RAND()";
$result = $conn->query( $sql );
if ( $result->num_rows > 0 ) {
  $x = 0;
  while ( $row = $result->fetch_assoc() ) {
    $description = $row[ "description" ];
    $video = $row[ "Name" ];
    echo '
    <div class="card" style="min-width:340px">
      <div class="card-header bg-info">' . $mediaHeading[ $x ] . '</div>
      <div class="card-img-top">
        <div itemprop="video" itemscope itemtype="http://schema.org/VideoObject" >
            <div class="poster poster-card" alt="' . $keyword[ $altNum ] . " Example" . '" data-toggle="modal" data-target=".bd-example-modal-lg" data-video="' . $video . '">
              <img itemprop="thumbnail" src="https://www.websitetalkingheads.com/ivideo/videos/' . $video . '.jpg" class="img-fluid video" alt="' . $keyword[ $altNum ] . " Example" . '">
              <meta itemprop="contentURL" content="https://www.websitetalkingheads.com/ivideo/videos/' . $video . '.mp4" />
              <meta itemprop="description" content="' . $description . '" />
              <meta itemprop="thumbnailUrl" content="https://www.websitetalkingheads.com/ivideo/videos/' . $video . '.jpg" />
              <meta itemprop="uploadDate" content="2019-01-19" />
              <meta itemprop="name" content="' . $video . '"/>
          </div>
      </div>
          <div class="card-body">
            <p class="card-text">' . $mediaContent[ $x ] . '</p>
          </div>
      </div>
    </div>
      
      ';
    if ( $x == 8 ) {
      break;
    } else {
      $x = $x + 1;
    }
  }
} else {
  echo "0 results";
}

?>