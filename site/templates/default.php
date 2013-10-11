<?php snippet('header') ?>
<?php //snippet('menu') ?>
<?php //snippet('submenu') ?>
  
  	<div class="row">  	
  		<?php
  		if ($page->isHomePage()) {
  		?>
  		
  		<div class="six columns mockup">
  			<a href="https://vimeo.com/couchmode/drobe/videos/sort:date/63467791"><img src="<?php echo url('assets/images/app-screenshot_with-play.png') ?>" alt="Illustration of iPhone app and video link" /></a>
  		</div>
  		<div class="six columns">
  			<h1>Connecting</h1>
  			<h1>blind & sighted</h1>
  			<h3>Make a difference, join a network helping<br>
  			the blind and help change the everyday<br>
  			life of blind around the world</h3>
  			<a class="large button" href="https://vimeo.com/couchmode/drobe/videos/sort:date/63467791">See How It Works</a>
  		</div>
  		
  		<?php
  		
  		
  		}
  		
  		?>
  		<?php echo ($page->subtitle()) ?>
  	</div>
  </div> <!-- end of top wrapping -->
  
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
