<?php
if(!$xml=simplexml_load_file('https://www.websitetalkingheads.com/spokespeople/femaleactors.xml')){
    trigger_error('Error reading XML file',E_USER_ERROR);
}
$alt = array( "iSpokesperson", "Video Spokesperson", "Website Spokesperson", "Web Spokesperson", "Spokesmodel", "Walk On Actor", "Virtual Actor", "Person on Website", "Online Spokesperson", "Virtual Spokesperson" );
foreach($xml as $item){
	$actor = $item['caption'];
	$random_keys = array_rand( $alt, 1 );
	$title = $actor . '-' . $alt[ $random_keys ];
     echo '<div class="actor" title="'.$title.'" alt="'.$title.'" data-actor="'.$actor.'">';
    echo PHP_EOL;
    echo '<div class="thumb-wrapper"></div>';
    echo PHP_EOL;
    echo '<img src="http://websitetalkingheads.com/carimages/'.$actor.'.png" class="img-responsive img-circle" alt="'.$actor.' - Video Spokesperson"/></a>';
    echo PHP_EOL;
    echo '<div class="text-center" title="'.$actor.' - Video Spokesperson">'.$actor.'</div>';
    echo PHP_EOL;
    echo '</div>';
    echo PHP_EOL;
}
if(!$xml=simplexml_load_file('https://www.websitetalkingheads.com/spokespeople/femaleactors2.xml')){
    trigger_error('Error reading XML file',E_USER_ERROR);
}
foreach($xml as $item){
	$actor = $item['caption'];
     echo '<div class="actor" title="'.$title.'" alt="'.$title.'" data-actor="'.$actor.'">';
    echo PHP_EOL;
    echo '<div class="thumb-wrapper"></div>';
    echo PHP_EOL;
    echo '<img src="http://websitetalkingheads.com/carimages/'.$actor.'.png" class="img-responsive img-circle" alt="'.$actor.' - Video Spokesperson"/></a>';
    echo PHP_EOL;
    echo '<div class="text-center" title="'.$actor.' - Video Spokesperson">'.$actor.'</div>';
    echo PHP_EOL;
    echo '</div>';
    echo PHP_EOL;
}
?>