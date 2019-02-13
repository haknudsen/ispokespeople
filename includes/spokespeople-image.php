<?php
$spintax = new Spintax();
$url = $spintax->process( '{Affordable Virtual Actor|Best Person On Website |Best Spokes Model|Best Video Spokesperson|Online Spokesperson |Person On Website |Professional Spokes Model|Professional Video Optimization Experts|Professional Virtual Live Actor|Professional Virtual Spokesperson|Professional Website Presenter|Professional Website Spokesperson|Top Search Engine Optimization Expert|Virtual Actor}' );
$spintax = new Spintax();
$title = $spintax->process( '{Spokespeople|Video Spokesperson|Virtual Spokesperson|Website Spokesperson|Web Spokesperson|Spokes-model|Walk On Actor|Virtual Actor|Person On Website|Online Spokesperson|Web Presenter|Spokesperson|Video Presenter|Website Presenter|Video Web Presenter|Promo Video Presenter|Live Actor|Website Video Actor|Virtual Live Actor|Spokesperson Video|Web Spokesperson Video|Online Video Spokesperson|Spokesperson Videos|Spokesperson Video Service|Video Spokesperson Website|Best Video Spokesperson|Professional Video Spokesperson}' );
echo '<img src="http://seovideoexperts.com/wp-content/uploads/wp_image_duplicator_uploads/' . $url . '.jpg" class="img-fluid" title="' . $title . '" alt="' . $title . '">';
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