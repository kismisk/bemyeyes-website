<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>

	<!-- Google Analytics Content Experiment code -->
	<script>function utmx_section(){}function utmx(){}(function(){var
	k='63910717-0',d=document,l=d.location,c=d.cookie;
	if(l.search.indexOf('utm_expid='+k)>0)return;
	function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
	indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
	length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
	'<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
	'://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
	'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
	valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
	'" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
	</script><script>utmx('url','A/B');</script>
	<!-- End of Google Analytics Content Experiment code -->

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
	
	<a id="signup-ribbon" class="fancybox fancybox.iframe" href="/assets/sign-up-form.html?utm_source=signup&utm_medium=website&utm_campaign=ribbon_signup"><img src="<?php echo url('assets/images/signup.png') ?>" alt="sign up for the private beta" /></a>
	
	<div class="signup-wrapper">
		<div class="row">
			<a class="fancybox fancybox.iframe" href="/assets/sign-up-form.html?utm_source=signup&utm_medium=website&utm_campaign=menu_signup">Sign up for the private beta</a> 
		</div>
	</div>
	
	
	<div id="top" class="wrapping">
		<div class="row">
		  <div class="nine mobile-three columns">		  
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
		          	<a id="signup-ribbon" class="fancybox fancybox.iframe" href="/assets/sign-up-form.html?utm_source=signup&utm_medium=website&utm_campaign=menu_signup" title="sign up for the private beta">Sign Up</a>
		          </li>		      
		          <li>
		            <a id="fb" onClick="trackOutboundLink(this, 'Outbound Links', 'Facebook icon'); return false;"  href="http://www.facebook.com/bemyeyes.org" target="_blank"><img src="<?php echo url('assets/images/facebook.png') ?>" alt="facebook page" /></a>
		          </li>
		          <li>
		            <a id="twitter" onClick="trackOutboundLink(this, 'Outbound Links', 'Twitter icon'); return false;" href="http://www.twitter.com/bemyeyes"><img src="<?php echo url('assets/images/twitter.png') ?>" alt="twitter page" /></a>		          	
		          </li>
		        </ul>
		      </section>
		    </nav>
		  </div>
		  <div class="three mobile-one columns">
			<a href="/"><img id="bme-logo" src="<?php echo url('assets/images/bemyeyes-logo.png') ?>" alt="bemyeyes logo" /></a>
		  </div>
		</div>
