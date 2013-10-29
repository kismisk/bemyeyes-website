
<!--<div id="bottom" class="wrapping">
	<div class="row">
		<div class="six columns">
			<h3>Private beta coming soon</h3>
			<h2>- sign up now</h2>
		</div>
		<div class="three columns">

			<div id="mc_embed_signup">
			<form action="http://bemyeyes.us6.list-manage1.com/subscribe/post?u=e7bc4d93c409f117307da5764&amp;id=58cbf3aea9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate custom" target="_blank" novalidate>			
			<div class="mc-field-group">
				<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
			</label>
				<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
			</div>
			<div class="mc-field-group input-group">
			    <label>Select Your Role  <span class="asterisk">*</span>
			</label>
			    <ul><li><input type="radio" value="User - I am visually impaired and would like to be a user" name="BME_ROLE" id="mce-BME_ROLE-0"><label for="mce-BME_ROLE-0">User - I am visually impaired and would like to be a user</label></li>
			<li><input type="radio" value="Helper - I want to help and provide visual assistance" name="BME_ROLE" id="mce-BME_ROLE-1"><label for="mce-BME_ROLE-1">Helper - I want to help and provide visual assistance</label></li>
			</ul>
			</div>
			<div class="mc-field-group">
				<label for="mce-LANGUAGE">Your language  <span class="asterisk">*</span>
			</label>
				<select name="LANGUAGE" class="required" id="mce-LANGUAGE">
				<option value=""></option>
				<option value="english">english</option>
			<option value="dansk">dansk</option>
			<option value="deutsch">deutsch</option>
			
				</select>
			</div>
				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>	<div class="clear"><input type="submit" value="Sign up now" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				<div class="indicates-required"><br><span class="asterisk">*</span> indicates required</div>
			</form>
			</div>
			
		</div>		
		<div class="three columns"></div>
	</div>
</div>-->

	<!-- Included JS Files (Uncompressed) -->
	<script src="javascripts/foundation/jquery.js"></script>
	
	<script src="javascripts/foundation/jquery.cookie.js"></script>
	
	<script src="javascripts/foundation/jquery.event.move.js"></script>
	
	<!--<script src="javascripts/foundation/jquery.event.swipe.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.accordion.js"></script>
	-->
	<script src="javascripts/foundation/jquery.foundation.alerts.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.buttons.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.clearing.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.forms.js"></script>
	
<!--	<script src="javascripts/foundation/jquery.foundation.joyride.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.magellan.js"></script>-->
	
	<script src="javascripts/foundation/jquery.foundation.mediaQueryToggle.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.navigation.js"></script>
	<!--
	<script src="javascripts/foundation/jquery.foundation.orbit.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.reveal.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.tabs.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.tooltips.js"></script>-->
	
	<script src="javascripts/foundation/jquery.foundation.topbar.js"></script>
	
	<script src="javascripts/foundation/jquery.placeholder.js"></script>
	

  <!-- Application Javascript, safe to override -->
  <script src="javascripts/foundation/app.js"></script>

  
<?php if ($page->isHomePage()) : ?>
  	<script src="javascripts/jquery.fancybox.pack.js?v=2.1.5"></script>
  	<script src="javascripts/jquery.fancybox-media.js?v=1.0.6"></script>
  	<script>

	$('.fancybox').attr('rel', 'media-gallery').fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}});

  	</script>
 <?php endif; ?>
  
  <script type="text/javascript">
  
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-34721981-1']);
    _gaq.push(['_trackPageview']);
  
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  
  </script>
</body>
</html>