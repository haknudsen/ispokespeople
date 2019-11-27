<?php
require( "connect-demo.php" );
$sql = "SELECT * FROM ispokespeople_content ORDER BY RAND()";
$result = $conn->query( $sql );
while ( $row = $result->fetch_assoc() ) {
    $title = $row[ "title" ];
    $content = $row[ "content" ];
    echo '
    <div class="card border-info">
      <div class="card-header bg-info">' . $title . '</div>
      <div class="card-body">
            ' . $content . '
          </div>
        </div>';
}
$sql = "SELECT * FROM spokesperson_content ORDER BY RAND()";
$result = $conn->query( $sql );
while ( $row = $result->fetch_assoc() ) {
    $title = $row[ "title" ];
    $content = $row[ "content" ];
    echo '
    <div class="card border-info">
      <div class="card-header bg-info">' . $title . '</div>
      <div class="card-body">
            ' . $content . '
          </div>
        </div>';
}
?>