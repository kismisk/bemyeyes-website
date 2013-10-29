<?php snippet('header') ?>
<?php //snippet('menu') ?>
<?php //snippet('submenu') ?>
  
  <div class="row">   
      <?php
      if ($page->isHomePage()) :
      ?>
      <div class="six columns mockup">
        <a href="https://vimeo.com/couchmode/drobe/videos/sort:date/63467791" class="fancybox"><img class="mockup" src="http://www.bemyeyes.org/assets/images/howitworks.png" alt="Two pictures showing how bemyeyes works: blind user requests assistance with an iPhone and sighted user receives a video streaming and help the blind user"></a>
      </div>
      <div class="six columns">
        <h1>Connecting</h1>
        <h1>blind &amp; sighted</h1>
        <h3>Make a difference, join a network helping<br>
        the blind and help change the everyday<br>
        life of blind around the world</h3>
        <a class="large button fancybox" href="https://vimeo.com/couchmode/drobe/videos/sort:date/63467791">See How It Works</a>
      </div>

       <?php endif; ?>
	</div>
</div>             
  
  <div id="middle" class="wrapping">
   <div class="row">
	  <div class="six columns">
	  	
	  	<?php if ($page->isHomePage()) echo '<h2>About Us</h2><h2>-who are we</h2>';	  	
	  		else echo '<h2>' . html($page->title()) . '</h2>';	  	
	  	?>
	  </div>
	  <div class="six columns">
		<?php echo kirbytext($page->text()) ?>  
	  </div>	  		
  </div>
</div>

<?php snippet('footer') ?>
