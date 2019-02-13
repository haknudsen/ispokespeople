<?php
require( "connect.php" );
$sql = "SELECT * FROM explainer_content ORDER BY RAND() LIMIT 1";
$result = $conn->query( $sql );
if ( $result->num_rows > 0 ) {
    $spintax = new Spintax();
    $embedCode = $spintax->process( '<div class="box" style="position: relative; padding-bottom: 56.25%;  height: 0; overflow: hidden;"><iframe type="text/html" style="position: absolute; top:0; left: 0; width: 100%; height: 100%" src="https://www.youtube.com/embed/{n6yoYO6vB1g|h26ag1Qpvrs|aMKQK40hWIg|jZEI_x0akE4|d2RYhD03gPE|Gms8EOgx8DY|mL9-SrRAjoA|81mI5KraWn0|QJzS_f8gVDo|7Xqs3pke4YE|FdOqULUaPtI|Wp4o0tuaAdY|gQXv3MY9bK4|WYemYjvKcpY|mN9cMEnBG6k|nSREKC1HYlw|GvMJ6aNT3c4|563WIYb1DCk|FJ3oXE-O2Y0|7RiADvaE-us|jrKeb2W--EM|GMgLaJqkZpE|EEQplZuYclU|xxcG9zvzkX8|ib0nZe2S9mI|LP1eD7uiGqw|fA7DibExzHE|mCwZ2AeUwts|w-bc_4SFOAI|DR2C1mcpHIk|vuJC0fvb6h0|e29XUdsOP1Q|01AECkTT41g|3Zbb3_ocR_g|fA2YJ2Q126A|d6AxjWSLSqk|gNFrWtPMjUc|sabNW-2vdD8}?autoplay=1&loop=1&rel=0" frameborder="0"></iframe></div>' );
    while ( $row = $result->fetch_assoc() ) {
        $title = $row[ "title" ];
        $content = $row[ "content" ];
        $spintax = new Spintax();
        $spun = $spintax->process( $content );
        echo( '<div class="container">' );
        echo PHP_EOL;
        echo( '<h3 class="text-center">' . $title . '</h3>' );
        echo PHP_EOL;
        echo PHP_EOL;
        echo( '<div class="embed">' );
        echo PHP_EOL;
        echo( $embedCode );
        echo PHP_EOL;
        echo( '   </div>' );
        echo PHP_EOL;
        echo PHP_EOL;
        echo( '<div class="text">' );
        echo PHP_EOL;
        echo( $spun );
        echo PHP_EOL;
    echo( '</div>' );
    }
    echo PHP_EOL;
    echo( '</div>' );
} else {
    echo "0 results";
}
echo PHP_EOL;
class Spintax {
    public

    function process( $text ) {
        return preg_replace_callback( '/\{(((?>[^\{\}]+)|(?R))*)\}/x', array(
            $this,
            'replace'
        ), $text );
    }
    public

    function replace( $text ) {
        $text = $this->process( $text[ 1 ] );
        $parts = explode( '|', $text );
        return $parts[ array_rand( $parts ) ];
    }
}
?>