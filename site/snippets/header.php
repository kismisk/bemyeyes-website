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
<body>
	
	<a id="signup-ribbon" href="http://bemyeyes.us6.list-manage1.com/subscribe?u=e7bc4d93c409f117307da5764&id=58cbf3aea9" onClick="trackOutboundLink(this, 'Outbound Links', 'Mailchimp signup ribbon'); return false;"><img src="<?php echo url('assets/images/signup.png') ?>" alt="sign up for the private beta" /></a>
	
	<div class="signup-wrapper">
		<div class="row">
			<a href="http://bemyeyes.us6.list-manage1.com/subscribe?u=e7bc4d93c409f117307da5764&id=58cbf3aea9" onClick="trackOutboundLink(this, 'Outbound Links', 'Mailchimp signup mobile'); return false;">Sign up for the private beta</a> 
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
		          <li>
		          	<a href="http://bemyeyes.us6.list-manage1.com/subscribe?u=e7bc4d93c409f117307da5764&id=58cbf3aea9" onClick="trackOutboundLink(this, 'Outbound Links', 'Mailchimp signup menu'); return false;" title="sign up for the private beta">Sign Up</a>
		          </li>		      
		          <li>
		            <a id="fb" onClick="trackOutboundLink(this, 'Outbound Links', 'Facebook icon'); return false;" href="http://www.facebook.com/bemyeyes.org"><img src="<?php echo url('assets/images/facebook-logo.png') ?>" alt="facebook page" /></a>
		          </li>
		        </ul>
		      </section>
		    </nav>
		  </div>
		  <div class="four mobile-one columns">
			<img id="bme-logo" src="<?php echo url('assets/images/bemyeyes-logo.png') ?>" alt="bemyeyes logo" />
		  </div>
		</div>
