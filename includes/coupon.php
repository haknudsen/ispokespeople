<section class="spokesperson-specials text-center">
  <?php
  $url = 'https://www.websitetalkingheads.com/featuredactor/featuredactor.xml';
  $xml = simplexml_load_file( $url );
  $male = $xml->male;
  $female = $xml->female;
  $newdateBase = $xml->newdate;
  $newdate = "THIS OFFER EXPIRES Friday, " . $newdateBase;
  ?>
  <h2 class="text-capitalize">Website Spokesperson Specials<br>
    Featured actors</h2>
  <div class="row alert-info py-2 mb-3">
    <div class="col-lg-3 offset-1">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" type="text/html" src="ivideo/talking-heads-player.php?video=<?=$male?>&autostart=mute&controls=mouse&actor=true"></iframe>
      </div>
      <h3 class="spokesperson-name">
        <?=$male?>
      </h3>
    </div>
    <div class="col-lg-4 d-flex flex-column">
      <div class="specials">
        <h2 class="text-capitalize">
          <?=$newdate?>
        </h2>
        <h3><a href="/order.php">Buy One, Get One Free</a></h3>
      </div>
      <div class="m-auto">
        <p class="tiny">Featured Actor Videos must choose only ONE Featured Actor. Specials must be shot at same time, for same domain, using only ONE Featured Actor</p>
          <p>Fill out the form below to redeem your coupon!</p>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" type="text/html" src="ivideo/talking-heads-player.php?video=<?=$female?>&autostart=mute&controls=mouse&actor=true"></iframe>
      </div>
      <h3 class="spokesperson-name">
        <?=$female?>
      </h3>
    </div>
  </div>
</section>
