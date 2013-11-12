<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Be My Eyes - Connecting blind + sighted</title>

	<!-- Included CSS Files -->
	<?php echo css('assets/styles/app.css') ?>
	<?php echo css('assets/styles/style.css') ?>
	<?php echo css('assets/styles/custom.css') ?>	
	
	
	<link rel="stylesheet" type="text/css" href="assets/styles/jquery.fancybox.css?v=2.1.5" media="screen" />


	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	
	<link rel="shortcut icon" href="<?= url('assets/images/favicon.ico') ?>">	

	<script src="javascripts/foundation/modernizr.foundation.js"></script>
	
	<script type="text/javascript">
	function trackOutboundLink(link, category, action) { 
	 
	try { 
	_gaq.push(['_trackEvent', category , action]); 
	} catch(err){}
	 
	setTimeout(function() {
	document.location.href = link.href;
	}, 100);
	}
	
	
	</script>

</head>
<body class="body">
	
<?php if(!empty($_GET['OkLSgV1Xo0']) AND $_GET['OkLSgV1Xo0'] == 'true') : ?>
	<a id="signup-ribbon"  href="/sign-up?utm_source=signup&utm_medium=website&utm_campaign=ribbon_signup"><img src="<?php echo url('assets/images/signup2.png') ?>" alt="sign up for the private beta" /></a>
<?php else : ?>
    <a id="signup-ribbon"  href="/sign-up?utm_source=signup&utm_medium=website&utm_campaign=ribbon_signup"><img src="<?php echo url('assets/images/signup.png') ?>" alt="sign up for the private beta" /></a>
<?php endif; ?>
	<div class="signup-wrapper"<?php if(!empty($_GET['OkLSgV1Xo0']) AND $_GET['OkLSgV1Xo0'] == 'true') echo ' style="background-color: #ff9933"'; ?>>
		<div class="row">
			<a href="/sign-up?utm_source=signup&utm_medium=website&utm_campaign=menu_signup">Sign up for the private beta</a> 
		</div>
	</div>
	
	
	<div id="top" class="wrapping">
		<div class="row">
		  <div class="eight mobile-three columns">		  
		    <nav class="top-bar">
		    <ul>
		    	<li class="toggle-topbar"><a href="#"></a></li>
		    	<li class="name">
		    	         <h1>
		    	           <a href="#">
		    	             Menu 
		    	           </a>
		    	         </h1>
		    	       </li>
		       
		     </ul>
		      <section>
		        <!-- Left Nav Section -->
		        <ul class="left">		       
		        	<?php foreach($pages->visible() AS $p): ?>
		        	<li><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
		        	<?php endforeach ?>
		          <!--<li>
		          	<a id="signup-ribbon" class="fancybox fancybox.iframe" href="/assets/sign-up-form.html?utm_source=signup&utm_medium=website&utm_campaign=menu_signup" title="sign up for the private beta">Sign Up</a>
		          </li>-->		      
		          <li>
		            <a id="fb" onClick="trackOutboundLink(this, 'Outbound Links', 'Facebook icon'); return false;"  href="http://www.facebook.com/bemyeyes.org" target="_blank"><img src="<?php echo url('assets/images/facebook-logo.png') ?>" alt="facebook page" /></a>
		          </li>
		        </ul>
		      </section>
		    </nav>
		  </div>
		  <div class="four mobile-one columns">
			<a href="/"><img id="bme-logo" src="<?php echo url('assets/images/bemyeyes-logo.png') ?>" alt="bemyeyes logo" /></a>
		  </div>
		</div>
