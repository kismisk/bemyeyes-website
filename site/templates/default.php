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
      
<?php elseif($page->uid == "sign-up") : ?>


<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif;font-weight: 100px; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
	   
	.mc-field-group {
    padding-bottom: 0%!important;
}
	form select {
    margin-top: 2px!important;
}
 	.mc-field-group label {
    margin-bottom: 10px!important;
}
</style>
<div id="mc_embed_signup" style="border-radius: 8px;box-shadow: 0 0 5px rgba(0,0,0,0.5); margin-bottom: 400px; max-width:788px; width:90%; margin-left:20px; margin-right:auto;">
<form action="http://bemyeyes.us6.list-manage1.com/subscribe/post?u=e7bc4d93c409f117307da5764&amp;id=58cbf3aea9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	<h2 style="font-size: 48px;line-height: 0.8em;font-family: "Open Sans",sans-serif; font-weight:normal;">Subscribe & stay updated!</h2>
	<p style="padding: 8px 0px 0px 0px;">We'll be launching the BeMyEyes App soon, signup now and stay updated.</br><span style="color: rgb(47, 167, 208);">All fields are required.</span></p>
<div class="mc-field-group" style="width: auto; padding-bottom: none;">
	<label for="mce-EMAIL" style="color: #000; font-weight: bold;">Email Address</label>
	<input style="max-width:550px;" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group input-group">
    <label for="mce-EMAIL" style="color: #000; font-weight: bold;">Select Your User type</label>
    <ul><li><input type="radio" value="User - I'm visually impaired and would like to be a user" name="BME_ROLE" id="mce-BME_ROLE-0"><label for="mce-BME_ROLE-0" style="top: 2px; color: black; left: 15px">I'm visually impaired and would like to get assistance</label></li>
<li><input type="radio" value="Helper - I want to help and provide visual assistance" name="BME_ROLE" id="mce-BME_ROLE-1"><label for="mce-BME_ROLE-1" style="top: 2px; color: black; left: 15px">I want to provide visual assistance</label></li>
</ul>
</div>
<div class="mc-field-group" style="padding-top: 8px;">
	<label for="mce-LANGUAGE" style="color: black; font-weight: bold; padding-top: 10px;">Your language
</label>
	<select name="LANGUAGE" class="required" id="mce-LANGUAGE" style="width: auto">
	<option value="english">English</option>
<option value="dansk">Dansk</option>
<option value="deutsch">Deutsch</option>

	</select>
</div>
	<div id="mce-responses" class="clear" style="padding: 12px 0">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>	<div class="clear"><input type="submit" value="YES! Ping me when the app is out!" name="subscribe" id="mc-embedded-subscribe" class="button" style="background-color: #2FA7D0"></div>
</form>
</div>
<script type="text/javascript">
var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[4]='BME_ROLE';ftypes[4]='radio';fnames[5]='LANGUAGE';ftypes[5]='dropdown';
try {
    var jqueryLoaded=jQuery;
    jqueryLoaded=true;
} catch(err) {
    var jqueryLoaded=false;
}
var head= document.getElementsByTagName('head')[0];
if (!jqueryLoaded) {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = '//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
    head.appendChild(script);
    if (script.readyState && script.onload!==null){
        script.onreadystatechange= function () {
              if (this.readyState == 'complete') mce_preload_check();
        }    
    }
}

var err_style = '';
try{
    err_style = mc_custom_error_style;
} catch(e){
    err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}';
}
var head= document.getElementsByTagName('head')[0];
var style= document.createElement('style');
style.type= 'text/css';
if (style.styleSheet) {
  style.styleSheet.cssText = err_style;
} else {
  style.appendChild(document.createTextNode(err_style));
}
head.appendChild(style);
setTimeout('mce_preload_check();', 250);

var mce_preload_checks = 0;
function mce_preload_check(){
    if (mce_preload_checks>40) return;
    mce_preload_checks++;
    try {
        var jqueryLoaded=jQuery;
    } catch(err) {
        setTimeout('mce_preload_check();', 250);
        return;
    }
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
    head.appendChild(script);
    try {
        var validatorLoaded=jQuery("#fake-form").validate({});
    } catch(err) {
        setTimeout('mce_preload_check();', 250);
        return;
    }
    mce_init_form();
}
function mce_init_form(){
    jQuery(document).ready( function($) {
      var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
      var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
      $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
      options = { url: 'http://bemyeyes.us6.list-manage2.com/subscribe/post-json?u=e7bc4d93c409f117307da5764&id=58cbf3aea9&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
                    beforeSubmit: function(){
                        $('#mce_tmp_error_msg').remove();
                        $('.datefield','#mc_embed_signup').each(
                            function(){
                                var txt = 'filled';
                                var fields = new Array();
                                var i = 0;
                                $(':text', this).each(
                                    function(){
                                        fields[i] = this;
                                        i++;
                                    });
                                $(':hidden', this).each(
                                    function(){
                                        var bday = false;
                                        if (fields.length == 2){
                                            bday = true;
                                            fields[2] = {'value':1970};//trick birthdays into having years
                                        }
                                    	if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
                                    		this.value = '';
									    } else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
                                    		this.value = '';
									    } else {
									        if (/\[day\]/.test(fields[0].name)){
    	                                        this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;									        
									        } else {
    	                                        this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
	                                        }
	                                    }
                                    });
                            });
                        $('.phonefield-us','#mc_embed_signup').each(
                            function(){
                                var fields = new Array();
                                var i = 0;
                                $(':text', this).each(
                                    function(){
                                        fields[i] = this;
                                        i++;
                                    });
                                $(':hidden', this).each(
                                    function(){
                                        if ( fields[0].value.length != 3 || fields[1].value.length!=3 || fields[2].value.length!=4 ){
                                    		this.value = '';
									    } else {
									        this.value = 'filled';
	                                    }
                                    });
                            });
                        return mce_validator.form();
                    }, 
                    success: mce_success_cb
                };
      $('#mc-embedded-subscribe-form').ajaxForm(options);
      
      
    });
}
function mce_success_cb(resp){
    $('#mce-success-response').hide();
    $('#mce-error-response').hide();
    if (resp.result=="success"){
        $('#mce-'+resp.result+'-response').show();
        $('#mce-'+resp.result+'-response').html(resp.msg);
        $('#mc-embedded-subscribe-form').each(function(){
            this.reset();
    	});
    } else {
        var index = -1;
        var msg;
        try {
            var parts = resp.msg.split(' - ',2);
            if (parts[1]==undefined){
                msg = resp.msg;
            } else {
                i = parseInt(parts[0]);
                if (i.toString() == parts[0]){
                    index = parts[0];
                    msg = parts[1];
                } else {
                    index = -1;
                    msg = resp.msg;
                }
            }
        } catch(e){
            index = -1;
            msg = resp.msg;
        }
        try{
            if (index== -1){
                $('#mce-'+resp.result+'-response').show();
                $('#mce-'+resp.result+'-response').html(msg);            
            } else {
                err_id = 'mce_tmp_error_msg';
                html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
                
                var input_id = '#mc_embed_signup';
                var f = $(input_id);
                if (ftypes[index]=='address'){
                    input_id = '#mce-'+fnames[index]+'-addr1';
                    f = $(input_id).parent().parent().get(0);
                } else if (ftypes[index]=='date'){
                    input_id = '#mce-'+fnames[index]+'-month';
                    f = $(input_id).parent().parent().get(0);
                } else {
                    input_id = '#mce-'+fnames[index];
                    f = $().parent(input_id).get(0);
                }
                if (f){
                    $(f).append(html);
                    $(input_id).focus();
                } else {
                    $('#mce-'+resp.result+'-response').show();
                    $('#mce-'+resp.result+'-response').html(msg);
                }
            }
        } catch(e){
            $('#mce-'+resp.result+'-response').show();
            $('#mce-'+resp.result+'-response').html(msg);
        }
    }
}

</script>
<!--End mc_embed_signup-->

       <?php endif; ?>
	</div>
</div>             

<?php if ($page->uid != "sign-up") : ?>
  <div id="middle" class="wrapping">
   <div class="row">
	  <div class="six columns">
	  	
	  	<?php 
	  	if ($page->isHomePage()) echo '<h2>About Us</h2><h2>-who are we</h2>';	  

	  		else echo '<h2>' . html($page->title()) . '</h2>';	  	
	  	?>
	  </div>
	  <div class="six columns">
		<?php echo kirbytext($page->text()) ?>  
	  </div>	  		
  </div>
</div>
<?php endif; ?>

<?php snippet('footer') ?>
