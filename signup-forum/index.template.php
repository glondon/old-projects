<?php
// Version: 1.1.5; index

/*	This template is, perhaps, the most important template in the theme. It
	contains the main template layer that displays the header and footer of
	the forum, namely with main_above and main_below. It also contains the
	menu sub template, which appropriately displays the menu; the init sub
	template, which is there to set the theme up; (init can be missing.) and
	the linktree sub template, which sorts out the link tree.

	The init sub template should load any data and set any hardcoded options.

	The main_above sub template is what is shown above the main content, and
	should contain anything that should be shown up there.

	The main_below sub template, conversely, is shown after the main content.
	It should probably contain the copyright statement and some other things.

	The linktree sub template should display the link tree, using the data
	in the $context['linktree'] variable.

	The menu sub template should display all the relevant buttons the user
	wants and or needs.

	For more information on the templating system, please see the site at:
	http://www.simplemachines.org/
*/
define('URL', 'http://www.signupandmakemoney.com/');
// Initialize the template... mainly little settings.
function template_init()
{
	global $context, $settings, $options, $txt;

	/* Use images from default theme when using templates from the default theme?
		if this is 'always', images from the default theme will be used.
		if this is 'defaults', images from the default theme will only be used with default templates.
		if this is 'never' or isn't set at all, images from the default theme will not be used. */
	$settings['use_default_images'] = 'never';

	/* What document type definition is being used? (for font size and other issues.)
		'xhtml' for an XHTML 1.0 document type definition.
		'html' for an HTML 4.01 document type definition. */
	$settings['doctype'] = 'xhtml';

	/* The version this template/theme is for.
		This should probably be the version of SMF it was created for. */
	$settings['theme_version'] = '1.1';

	/* Set a setting that tells the theme that it can render the tabs. */
	$settings['use_tabs'] = true;

	/* Use plain buttons - as oppossed to text buttons? */
	$settings['use_buttons'] = true;

	/* Show sticky and lock status seperate from topic icons? */
	$settings['seperate_sticky_lock'] = true;
}

// The main sub template above the content.
function template_main_above()
{
	global $context, $settings, $options, $scripturl, $txt, $modSettings;

	// Show right to left and the character set for ease of translating.
	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"', $context['right_to_left'] ? ' dir="rtl"' : '', '><head>
	<meta http-equiv="Content-Type" content="text/html; charset=', $context['character_set'], '" />
	<script language="JavaScript" type="text/javascript" src="', $settings['default_theme_url'], '/script.js?fin11"></script>
	<script language="JavaScript" type="text/javascript"><!-- // --><![CDATA[
		var smf_theme_url = "', $settings['theme_url'], '";
		var smf_images_url = "', $settings['images_url'], '";
		var smf_scripturl = "', $scripturl, '";
		var smf_iso_case_folding = ', $context['server']['iso_case_folding'] ? 'true' : 'false', ';
		var smf_charset = "', $context['character_set'], '";
	// ]]></script>';
	
	//Search Engine stuff
   if ($context['page_title'] == 'Sign Up and Make Money Online Forum - Index')
   {echo '
    <title>Sign Up and Make Money Online Forum - sign up bonus sites, business opportunities, free ways to make money, and more.</title>
	<meta name="description" content="Talk about making money online and various free ways to do so. Things like sign up bonuses, secret shopping, paid to click, paid to read, surveys, seo, traffic sites, and more." />
	<meta name="keywords" content="paid to read, paid to shop, secret shopping, sign up bonus, sign up bonuses, seo, traffic sites, sign up and make money, signupandmakemoney, business opportunities, free, ways to make money" />
	<link rel="canonical" href="http://www.signupandmakemoney.com/forum/" />';}
	else
   {echo '
    <title>', $context['page_title'], '</title>
    <meta name="description" content="', $context['page_title'], '" />', empty($context['robot_no_index']) ? '' : '
	<meta name="robots" content="noindex" />', '
	<meta name="keywords" content="sign up and make money, signupandmakemoney, php, mysql, make money, business opportunities, free money, secret shopping, bulletin, board, free, open, source, smf, simple, machines, forum" />';}

	// The ?fin11 part of this link is just here to make sure browsers don't cache it wrongly.
	echo '
	<link rel="stylesheet" type="text/css" href="', $settings['theme_url'], '/style.css?fin11" />
	<link rel="stylesheet" type="text/css" href="', $settings['default_theme_url'], '/print.css?fin11" media="print" />';

	/* Internet Explorer 4/5 and Opera 6 just don't do font sizes properly. (they are big...)
		Thus, in Internet Explorer 4, 5, and Opera 6 this will show fonts one size smaller than usual.
		Note that this is affected by whether IE 6 is in standards compliance mode.. if not, it will also be big.
		Standards compliance mode happens when you use xhtml... */
	if ($context['browser']['needs_size_fix'])
		echo '
	<link rel="stylesheet" type="text/css" href="', $settings['default_theme_url'], '/fonts-compat.css" />';

	// Show all the relative links, such as help, search, contents, and the like.
	echo '
	<link rel="help" href="', $scripturl, '?action=help" target="_blank" />
	<link rel="search" href="' . $scripturl . '?action=search" />
	<link rel="contents" href="http://www.signupandmakemoney.com/forum/" />
	<link rel="shortcut icon" href="http://www.signupandmakemoney.com/Assets/transparent.ico" />';

	// If RSS feeds are enabled, advertise the presence of one.
	if (!empty($modSettings['xmlnews_enable']))
		echo '
	<link rel="alternate" type="application/rss+xml" title="', $context['forum_name'], ' - RSS" href="', $scripturl, '?type=rss;action=.xml" />';

	// If we're viewing a topic, these should be the previous and next topics, respectively.
	if (!empty($context['current_topic']))
		echo '
	<link rel="prev" href="', $scripturl, '?topic=', $context['current_topic'], '.0;prev_next=prev" />
	<link rel="next" href="', $scripturl, '?topic=', $context['current_topic'], '.0;prev_next=next" />';

	// If we're in a board, or a topic for that matter, the index will be the board's index.
	if (!empty($context['current_board']))
		echo '
	<link rel="index" href="' . $scripturl . '?board=' . $context['current_board'] . '.0" />';

	// We'll have to use the cookie to remember the header...
	if ($context['user']['is_guest'])
	{
		$options['collapse_header'] = !empty($_COOKIE['upshrink']);
		$options['collapse_header_ic'] = !empty($_COOKIE['upshrinkIC']);
	}

	// Output any remaining HTML headers. (from mods, maybe?)
	echo $context['html_headers'], '

	<script language="JavaScript" type="text/javascript"><!-- // --><![CDATA[
		var current_header = ', empty($options['collapse_header']) ? 'false' : 'true', ';

		function shrinkHeader(mode)
		{';

	// Guests don't have theme options!!
	if ($context['user']['is_guest'])
		echo '
			document.cookie = "upshrink=" + (mode ? 1 : 0);';
	else
		echo '
			smf_setThemeOption("collapse_header", mode ? 1 : 0, null, "', $context['session_id'], '");';

	echo '
			document.getElementById("upshrink").src = smf_images_url + (mode ? "/upshrink2.gif" : "/upshrink.gif");

			document.getElementById("upshrinkHeader").style.display = mode ? "none" : "";
			document.getElementById("upshrinkHeader2").style.display = mode ? "none" : "";

			current_header = mode;
		}
	// ]]></script>';

	// the routine for the info center upshrink
	echo '
		<script language="JavaScript" type="text/javascript"><!-- // --><![CDATA[
			var current_header_ic = ', empty($options['collapse_header_ic']) ? 'false' : 'true', ';

			function shrinkHeaderIC(mode)
			{';

	if ($context['user']['is_guest'])
		echo '
				document.cookie = "upshrinkIC=" + (mode ? 1 : 0);';
	else
		echo '
				smf_setThemeOption("collapse_header_ic", mode ? 1 : 0, null, "', $context['session_id'], '");';

	echo '
				document.getElementById("upshrink_ic").src = smf_images_url + (mode ? "/expand.gif" : "/collapse.gif");

				document.getElementById("upshrinkHeaderIC").style.display = mode ? "none" : "";

				current_header_ic = mode;
			}
		// ]]></script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=218261441523608";
  fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));</script>
<div id="top">
<table style="margin: 0 auto;"><tr><td width="630px">
<div class="navtop">
  <ul> 
    <li><a href="', URL, '">Bonuses</a></li> 
    <li><a href="', URL, 'site/affiliates/login.php">Affiliates</a></li> 
    <li class="currentp"><a href="', URL, 'forum/">Forum</a></li> 
    <li><a href="', URL, 'blog/">Blog</a></li>
    <li><a href="', URL, 'traffic/">Traffic</a></li>
    <li><a href="', URL, 'affiliate-tips/">Tips</a></li>
  </ul> </div></td><td width="330px">
  <div class="search">
	<form action="http://www.signupandmakemoney.com/google-search/" id="cse-search-box">
    <input type="hidden" name="cx" value="partner-pub-0372492470050030:5vvp50-qsag" />
    <input type="hidden" name="cof" value="FORID:10" />
    <input type="hidden" name="ie" value="ISO-8859-1" />
    <input type="text" name="q" size="30" />
    <!-- input type="submit" name="sa" value="Search" / -->
</form>
<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&amp;lang=en"></script>
</div>
</td>
</tr>
</table>
</div>
<div id="wrapper">
<table width="100%" border="0" cellspacing="2" cellpadding="2" summary="table for header">
  <tr>
    <td class="header"><a href="http://www.signupandmakemoney.com/" style="background:none;"><img src="', URL, 'Assets/signupandmakemoney-logo-lg.jpg" border="0" alt="Signupandmakemoney Logo" title="Signupandmakemoney." width="300" height="67" /></a></td>
    <td class="banner_right"><script type="text/javascript">
					var rbannerads = new Array()

rbannerads[0]=\'<a href="http://hits4pay.com/members/index.cgi?gdc25" target="_blank"><img border="0" src="http://hits4pay.com/imgn/banners/468x60.png" width="468" height="60"></a>\'
rbannerads[1]=\'<a href="http://www.inboxdollars.com/?r=ref12218393" target="_blank"><img src="http://www.inboxdollars.com/graphics/creative/banners/468x60/468x60_2.gif" border="0" /></a>\'
rbannerads[2]=\'<a href="http://www.sendearnings.com/?r=ref271274" target="_blank"><img src="http://www.sendearnings.com/graphics/creative/banners/468x60/468x60_1.jpg" border="0" /></a>\'
rbannerads[3]=\'<a href="http://www.gomezpeerzone.com/application-apply/?Referrer=gdc25" target="_blank"><img src="http://www.gomezpeerzone.com/wp-content/uploads/2011/11/468x60-static.gif" width="468" height="60" border="0"></a>\'
rbannerads[4]=\'<a href="http://www.clixsense.com/?2251204" target="_blank"><img src="http://csstatic.com/banners/clixsense468x60g.png" border="0" /></a>\'
rbannerads[5]=\'<a href="http://www.uniquerewards.com/cgi-bin/main.cgi?cmd=newref&refid=9440" target="_blank"><img src="http://www.uniquerewards.com/banners/ur_468x60_2.gif" border="0" width="468" height="60" alt="UniqueRewards - online rewards program"></a>\'

var rchoosead=Math.floor(Math.random()*(rbannerads.length))
document.write(rbannerads[rchoosead])					
					</script></td>
  </tr>
</table>';

	echo'  ', template_menu(), '  ';
      
	echo '
		<table width="100%" cellpadding="8" cellspacing="5" border="0" style="margin-top: 20px;">
						<tr>';  
	
	echo '
			<td width="80%">
			<span class="middletext" style="display:block;width:400px;">';
			
	if ($context['user']['is_logged'] && $context['allow_pm'])
	{
		echo ((isset($current_action) && $curent_action == 'pm') || $context['browser']['is_ie4']) ? '' : '' , '
					<a href="', $scripturl, '?action=pm">' , $txt['pm_short'] , '</a>: ', $txt[152], ' ', $context['user']['messages'], ' ', $txt[153], ' ' , $context['user']['unread_messages'], ' ', $txt['newmessages1'], '.<br />
					<a href="', $scripturl, '?action=unread">', $txt['unread_since_visit'], '</a> <br />
					<a href="', $scripturl, '?action=unreadreplies">', $txt['show_unread_replies'], '</a><br />
					<span>' , $context['current_time'], '</span></td>';
	}

	if ($context['user']['is_guest'])
	{
		echo '
								<script language="JavaScript" type="text/javascript" src="', $settings['default_theme_url'], '/sha1.js"></script>

								                        <form action="', $scripturl, '?action=login2" method="post" accept-charset="', $context['character_set'], '" class="middletext" style="margin: 3px 1ex 1px 0;"', empty($context['disable_login_hashing']) ? ' onsubmit="hashLoginPassword(this, \'' . $context['session_id'] . '\');"' : '', '>
                        <span class="quick" style="display: block;">
                        <span class="yoo-login">
                           <span class="login">
                              <span class="username">
                              <input type="text" name="user" size="18" alt="' , $txt[35] , '" value="' , $txt[35] , '" onfocus="if(this.value==\'' , $txt[35] , '\')value=\'\';" onblur="if(this.value==\'\')value=\'' , $txt[35] , '\';"  />
                              </span>
                              <span class="password">
                              <input type="password" name="passwrd" size="10" value="Password" onfocus="if(this.value==\'Password\')value=\'\';" onblur="if(this.value==\'\')value=\'Password\';" />
                              </span>
                           <span class="login-button-icon">
                              <button value="', $txt[34], '" name="Submit" type="submit" title="', $txt[34], '"></button>
                           </span>
                           <span class="lostpassword">
                              <a href="', $scripturl, '?action=reminder" title="' , $txt[315] , '"></a>
                           </span>
                           <span class="activatecode">
                           <a href="' . $scripturl . '?action=activate" title="' , $txt['activate_code'] , '"></a>
                           </span>
                           <span class="registration">
                           <a href="', $scripturl, '?action=register" title="' , $txt[97] , '"></a>
                           </span>
                           <br /><br />
                           <input type="hidden" name="hash_passwrd" value="" />
                           </span>            
                        </span>
                        </span>
                        </form></td>';
	}
	
	if (!empty($context['user']['avatar']))
		echo '
		<td width="20%" valign="top">', $context['user']['avatar']['image'], '<br /><br /><br /></td>';
	
	echo '
		</tr></table>';

	// The main content should go here.
	echo '
	<div id="bodyarea" style="padding: 1ex 0px 2ex 0px;">';
}

function template_main_below()
{
	global $context, $settings, $options, $scripturl, $txt;

	echo '
	</div>';

	// Show the "Powered by" and "Valid" logos, as well as the copyright. Remember, the copyright must be somewhere!
	echo '
	</div> <!-- closes the wrapper tag -->
	<script language="JavaScript" type="text/javascript"><!-- // --><![CDATA[
			function smfFooterHighlight(element, value)
			{
				element.src = smf_images_url + "/" + (value ? "h_" : "") + element.id + ".gif";
			}
		// ]]></script>
<div id="footer"> 
<div id="footercontent">
<p align="center">

<script type="text/javascript">
					var mbannerads = new Array()

mbannerads[0]=\'<a href="http://hits4pay.com/members/index.cgi?gdc25" target="_blank"><img border="0" src="http://hits4pay.com/imgn/banners/728x90.png" width="728" height="90"></a>\'
mbannerads[1]=\'<a href="http://www.clixsense.com/?2251204" target="_blank"><img src="http://csstatic.com/banners/clixsense_gpt728x90a.png" border="0"></a>\'
mbannerads[2]=\'<a href="http://www.sendearnings.com/?r=ref271274" target="_blank"><img src="http://www.sendearnings.com/graphics/creative/banners/728x90/728x90_2.jpg" border="0" /></a>\'
mbannerads[3]=\'<a href="http://www.inboxdollars.com/?r=ref12218393" target="_blank"><img src="http://www.inboxdollars.com/graphics/creative/banners/728x90/728x90_1.gif" border="0" /></a>\'
mbannerads[4]=\'<a href="http://www.squishycash.com/homepage?ref=gdc25" target="_blank"><img src="http://squishycash.com/images/banners/66.gif" width="728" height="90" border="0" /></a>\'

var mchoosead=Math.floor(Math.random()*(mbannerads.length))
document.write(mbannerads[mchoosead])					
					</script>


<br /><br /><br /></p>
    
    <table width="100%" border="0" cellspacing="2" cellpadding="5" summary="Table for footer.">
  <tr>
    <td colspan="2" class="whitespace"><div align="center" style="padding-left:30px;"><br /><a href="http://www.signupandmakemoney.com/blog/feed/" target="_blank" title="Subscribe to the Signupandmakemoney RSS feed!"><img src="', URL, 'Assets/rss-large.jpg" alt="Signupandmakemoney RSS feed." width="100" height="100" border="0" style="padding-right:20px;" /></a><a href="http://www.facebook.com/signupandmakemoney?ref=profile" target="_blank" title="Friend me up at Facebook!"><img src="', URL, 'Assets/facebook-large.png" alt="Friend Greg London on Facebook." width="100" height="100" border="0" style="padding-right:20px;" /></a><a href="http://twitter.com/signupmakemoney" target="_blank" title="Follow me on Twitter!">
    <img src="', URL, 'Assets/Twitter-large.png" alt="Follow Greg London on Twitter." width="100" height="100" border="0" style="padding-right:20px;" /></a><a href="http://www.youtube.com/user/signupandmakemoney" target="_blank" title="Add me as a friend or subscribe to me at YouTube!"><img src="', URL, 'Assets/youtube-large.png" alt="Friend me up on YouTube." border="0" width="100" height="100" /></a><br /><br /><br /><div class="fb-like" data-href="http://www.signupandmakemoney.com" data-send="true" data-width="450" data-show-faces="false"></div>
          <br /><br />
      <table align="center" cellpadding="8" cellspacing="30" border="0" width="600px"><tr><td><div align="center">   
    <img src="', URL, 'Assets/make-money-circle.jpeg" alt="Make money circle of people." border="0" /></div></td><td style="padding-left:15px;"><script type="text/javascript" language="JavaScript" src="http://twittercounter.com/embed/signupmakemoney/ffffff/111111"></script><br /><a href="http://feeds.feedburner.com/signupandmakemoney/haHu" target="_blank"><img src="http://feeds.feedburner.com/~fc/signupandmakemoney/haHu?bg=99CCFF&amp;fg=444444&amp;anim=0" height="26" width="88" style="border:0;" /></a><br /><br /><br /><a href="http://www.mysql.com/" target="_blank"><img id="powered-mysql" src="', $settings['images_url'], '/powered-mysql.gif" alt="', $txt['powered_by_mysql'], '" width="54" height="20" style="margin: 5px 16px;" onmouseover="smfFooterHighlight(this, true);" onmouseout="smfFooterHighlight(this, false);" /></a><br /><a href="http://validator.w3.org/check/referer" target="_blank"><img id="valid-xhtml10" src="', $settings['images_url'], '/valid-xhtml10.gif" alt="', $txt['valid_xhtml'], '" width="54" height="20" style="margin: 5px 16px;" onmouseover="smfFooterHighlight(this, true);" onmouseout="smfFooterHighlight(this, false);" /></a><br />
					<a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank"><img id="valid-css" src="', $settings['images_url'], '/valid-css.gif" alt="', $txt['valid_css'], '" width="54" height="20" style="margin: 5px 16px;" onmouseover="smfFooterHighlight(this, true);" onmouseout="smfFooterHighlight(this, false);" /></a><br />
					<a href="http://www.php.net/" target="_blank"><img id="powered-php" src="', $settings['images_url'], '/powered-php.gif" alt="', $txt['powered_by_php'], '" width="54" height="20" style="margin: 5px 16px;" onmouseover="smfFooterHighlight(this, true);" onmouseout="smfFooterHighlight(this, false);" /></a></td></tr><tr><td><br /><div align="center"><script type="text/javascript">
					var bottombannerads = new Array()

bottombannerads[0]=\'<a href="http://hits4pay.com/members/index.cgi?gdc25" target="_blank"><img border="0" src="http://hits4pay.com/imgn/banners/468x60.png" width="468" height="60"></a>\'
bottombannerads[1]=\'<a href="http://www.inboxdollars.com/?r=ref12218393" target="_blank"><img src="http://www.inboxdollars.com/graphics/creative/banners/468x60/468x60_2.gif" border="0" /></a>\'
bottombannerads[2]=\'<a href="http://www.sendearnings.com/?r=ref271274" target="_blank"><img src="http://www.sendearnings.com/graphics/creative/banners/468x60/468x60_1.jpg" border="0" /></a>\'
bottombannerads[3]=\'<a href="http://www.gomezpeerzone.com/application-apply/?Referrer=gdc25" target="_blank"><img src="http://www.gomezpeerzone.com/wp-content/uploads/2011/11/468x60-static.gif" width="468" height="60" border="0"></a>\'
bottombannerads[4]=\'<a href="http://www.clixsense.com/?2251204" target="_blank"><img src="http://csstatic.com/banners/clixsense468x60g.png" border="0" /></a>\'
bottombannerads[5]=\'<a href="http://www.uniquerewards.com/cgi-bin/main.cgi?cmd=newref&refid=9440" target="_blank"><img src="http://www.uniquerewards.com/banners/ur_468x60_2.gif" border="0" width="468" height="60" alt="UniqueRewards - online rewards program"></a>\'

var bottomchoosead=Math.floor(Math.random()*(bottombannerads.length))
document.write(bottombannerads[bottomchoosead])					
					</script></div></td>
    <td style="padding-left:15px;"><a class="addthis_button" href="http://addthis.com/bookmark.php?v=250&amp;pub=gdc25"><img src="http://s7.addthis.com/static/btn/v2/lg-bookmark-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0; padding-bottom:0px;margin-bottom:0px;"/></a><script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pub=gdc25"></script><br /><br /><div id="google_translate_element"></div><script>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: \'en\'
  }, \'google_translate_element\');
}
</script><script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></td></tr></table><br />
    </div></td>
  </tr>
  <tr>
    <td colspan="2" style="color:#fff;"><br /><br /><h3 align="center">', $context['forum_name'], ' is proud to be ', theme_copyright(), ' with a Theme By <a href="http://www.smfciyiz.biz/index.php?action=profile;u=10607">Brkdmrcn</a> modified by Greg London</h3>
    <br /><br /></td>
  </tr>
  <tr>
    <td width="50%"><div align="center" class="side">
    <ul>
    	<li><a href="', URL, 'info/earnings-disclaimer.html">Earnings Disclaimer</a></li>
        <li><a href="', URL, 'info/privacy-policy.html">Privacy Policy</a></li>
        <li><a href="', URL, 'info/signupandmakemoney-instructions.html">Instructions</a></li>
        <li><a href="', URL, 'sitemap.html">Sitemap</a></li>
   	    <li><a href="', URL, 'contact/">Contact</a></li>
        <li><a href="', URL, 'info/faq.html">FAQ</a></li>
    </ul>  
    </div></td>
    <td width="50%" rowspan="2"><div align="center"><img src="', URL, 'Assets/signupandmakemoney-logo-lg-transparent.gif" alt="Signupandmakemoney Logo" width="300" height="67" /></div>
	<!-- ladesk -->
<script type="text/javascript" id="la_x2s6df8d" src="//signupandmakemoney.ladesk.com/scripts/track.js"></script>
<img src="http://signupandmakemoney.ladesk.com/scripts/pix.gif" onLoad="LiveAgentTracker.createButton(\'button1\', this);"/>
<!-- ladesk end -->
	</td>
  </tr>
  <tr>
    <td style="color:#fff;"><div align="center"><br /><br /><p>Copyright &copy; 2008 - ', date('Y'),' Signupandmakemoney, LLC</p></div></td>
  </tr>
</table>';
		// Show the load time?
	if ($context['show_load_time'])
		echo '
		<span class="smalltext">', $txt['smf301'], $context['load_time'], $txt['smf302'], $context['load_queries'], $txt['smf302b'], '</span>';

	// This is an interesting bug in Internet Explorer AND Safari. Rather annoying, it makes overflows just not tall enough.
	if (($context['browser']['is_ie'] && !$context['browser']['is_ie4']) || $context['browser']['is_mac_ie'] || $context['browser']['is_safari'] || $context['browser']['is_firefox'])
	{
		// The purpose of this code is to fix the height of overflow: auto div blocks, because IE can't figure it out for itself.
		echo '
		<script language="JavaScript" type="text/javascript"><!-- // --><![CDATA[';

		// Unfortunately, Safari does not have a "getComputedStyle" implementation yet, so we have to just do it to code...
		if ($context['browser']['is_safari'])
			echo '
			window.addEventListener("load", smf_codeFix, false);

			function smf_codeFix()
			{
				var codeFix = document.getElementsByTagName ? document.getElementsByTagName("div") : document.all.tags("div");

				for (var i = 0; i < codeFix.length; i++)
				{
					if ((codeFix[i].className == "code" || codeFix[i].className == "post" || codeFix[i].className == "signature") && codeFix[i].offsetHeight < 20)
						codeFix[i].style.height = (codeFix[i].offsetHeight + 20) + "px";
				}
			}';
		elseif ($context['browser']['is_firefox'])
			echo '
			window.addEventListener("load", smf_codeFix, false);
			function smf_codeFix()
			{
				var codeFix = document.getElementsByTagName ? document.getElementsByTagName("div") : document.all.tags("div");

				for (var i = 0; i < codeFix.length; i++)
				{
					if (codeFix[i].className == "code" && (codeFix[i].scrollWidth > codeFix[i].clientWidth || codeFix[i].clientWidth == 0))
						codeFix[i].style.overflow = "scroll";
				}
			}';
		else
			echo '
			var window_oldOnload = window.onload;
			window.onload = smf_codeFix;

			function smf_codeFix()
			{
				var codeFix = document.getElementsByTagName ? document.getElementsByTagName("div") : document.all.tags("div");

				for (var i = codeFix.length - 1; i > 0; i--)
				{
					if (codeFix[i].currentStyle.overflow == "auto" && (codeFix[i].currentStyle.height == "" || codeFix[i].currentStyle.height == "auto") && (codeFix[i].scrollWidth > codeFix[i].clientWidth || codeFix[i].clientWidth == 0) && (codeFix[i].offsetHeight != 0 || codeFix[i].className == "code"))
						codeFix[i].style.height = (codeFix[i].offsetHeight + 36) + "px";
				}

				if (window_oldOnload)
				{
					window_oldOnload();
					window_oldOnload = null;
				}
			}';

		echo '
		// ]]></script>';
	}

	echo '
	</div>';

	// The following will be used to let the user know that some AJAX process is running
	echo '
	<div id="ajax_in_progress" style="display: none;', $context['browser']['is_ie'] && !$context['browser']['is_ie7'] ? 'position: absolute;' : '', '">', $txt['ajax_in_progress'], '</div>
</div></div></body></html>';
}

// Show a linktree (vB Clone).  This is that thing that shows "My Community | General Category | General Discussion"..
function theme_linktree()
{

	return;

}

// Show a linktree (vB Clone).  This is that thing that shows "My Community | General Category | General Discussion"..
function theme_linktree1()
{
        global $context, $settings, $options;

        // Folder style or inline?  Inline has a smaller font.
        echo '<div class="navbar" style="font-size:10pt">';
		
		echo '<img class="inlineimg" src="' . $settings['images_url'] . '/icons/folder_open.gif" alt="+" border="0" />&nbsp;';

        // Each tree item has a URL and name.  Some may have extra_before and extra_after.
        foreach ($context['linktree'] as $link_num => $tree)
        {
                // Show something before the link?
                if (isset($tree['extra_before']))
                        echo $tree['extra_before'];

                if (($link_num == count($context['linktree']) - 1) && count($context['linktree'])>1)
                        echo '<br />
						<img class="inlineimg" src="' . $settings['images_url'] . '/icons/linktree_side.gif" alt="" border="0" />&nbsp;';

                // Show the link, including a URL if it should have one.
                echo '<b>', $settings['linktree_link'] && isset($tree['url']) ? '<a href="' . $tree['url'] . '">' . $tree['name'] . '</a>' : $tree['name'], '</b>';

                // Show something after the link...?
                if (isset($tree['extra_after']))
                        echo $tree['extra_after'];

                // Don't show a separator for the last one.
                if ($link_num < count($context['linktree']) - 2)
                        echo '&nbsp;&raquo;&nbsp;';

        }

        echo '</div>';
}

// Show the menu up top. Something like [home] [help] [profile] [logout]...
function template_menu()
{
	global $context, $settings, $options, $scripturl, $txt;

	// Work out where we currently are.
	$current_action = 'home';
	if (in_array($context['current_action'], array('admin', 'ban', 'boardrecount', 'cleanperms', 'detailedversion', 'dumpdb', 'featuresettings', 'featuresettings2', 'findmember', 'maintain', 'manageattachments', 'manageboards', 'managecalendar', 'managesearch', 'membergroups', 'modlog', 'news', 'optimizetables', 'packageget', 'packages', 'permissions', 'pgdownload', 'postsettings', 'regcenter', 'repairboards', 'reports', 'serversettings', 'serversettings2', 'smileys', 'viewErrorLog', 'viewmembers')))
		$current_action = 'admin';
	if (in_array($context['current_action'], array('search', 'admin', 'calendar', 'profile', 'mlist', 'register', 'login', 'help', 'pm')))
		$current_action = $context['current_action'];
	if ($context['current_action'] == 'search2')
		$current_action = 'search';
	if ($context['current_action'] == 'theme')
		$current_action = isset($_REQUEST['sa']) && $_REQUEST['sa'] == 'pick' ? 'profile' : 'admin';

	// Are we using right-to-left orientation?
	if ($context['right_to_left'])
	{
		$first = 'last';
		$last = 'first';
	}
	else
	{
		$first = 'first';
		$last = 'last';
	}

	// Show the start of the tab section.
	// Style 4 Masum_Serseri
// Show the start of the tab section.
echo '

<div id="tophmenu"></div>
<div id="hmenu">
<ul>



';

// Show the default [home] button.
echo '<li><a href="', URL, 'forum/" title="Forum home page.">Forum Home</a></li>';

// Show the [help] button.
echo '<li><a href="', $scripturl, '?action=help">' , $txt[119] , '</a></li>';

// How about the [search] button?
if ($context['allow_search'])
echo '<li><a href="', $scripturl, '?action=search" title="Search the Forum.">' , $txt[182] , '</a></li>';

// Is the user allowed to administrate at all? ([admin])
if ($context['allow_admin'])
echo '<li><a href="', $scripturl, '?action=admin">' , $txt[2] , '</a></li>';

// Edit Profile... [profile]
if ($context['allow_edit_profile'])
echo '<li><a href="', $scripturl, '?action=profile">' , $txt[79] , '</a></li>';

// Go to PM center... [pm]
if ($context['user']['is_logged'] && $context['allow_pm'])
echo '<li><a href="', $scripturl, '?action=pm">' , $txt['pm_short'] , ' ', $context['user']['unread_messages'] > 0 ? '[<strong>'. $context['user']['unread_messages'] . '</strong>]' : '' , '</a></li>';

// The [calendar]!
if ($context['allow_calendar'])
echo '<li><a href="', $scripturl, '?action=calendar">' , $txt['calendar24'] , '</a></li>';

// the [member] list button
if ($context['allow_memberlist'])
echo '<li><a href="', $scripturl, '?action=mlist">' , $txt[331] , '</a></li>';

// If the user is a guest, show [login] button.
if ($context['user']['is_guest'])
echo '<li><a href="', $scripturl, '?action=login">' , $txt[34] , '</a></li>';

// If the user is a guest, also show [register] button.
if ($context['user']['is_guest'])
echo '<li><a href="', $scripturl, '?action=register" title="Register to start and reply to forum topics.">' , $txt[97] , '</a></li>';

// Otherwise, they might want to [logout]...
if ($context['user']['is_logged'])
echo '<li><a href="', $scripturl, '?action=logout;sesc=', $context['session_id'], '">' , $txt[108] , '</a></li>';
echo '</ul></div>'; 

}


// Generate a strip of buttons.
function template_button_strip($button_strip, $direction = 'top', $force_reset = false, $custom_td = '')
{
	global $settings, $buttons, $context, $txt, $scripturl;

	// Create the buttons...
	foreach ($button_strip as $key => $value)
	{
		if (isset($value['test']) && empty($context[$value['test']]))
		{
			unset($button_strip[$key]);
			continue;
		}
		elseif (!isset($buttons[$key]) || $force_reset)
			$buttons[$key] = '<a href="' . $value['url'] . '" ' .( isset($value['custom']) ? $value['custom'] : '') . '>' . $txt[$value['text']] . '</a>';

		$button_strip[$key] = $buttons[$key];
	}

	if (empty($button_strip))
		return '<td>&nbsp;</td>';

	echo '
		<td class="', $direction == 'top' ? 'main' : 'mirror', 'tab_' , $context['right_to_left'] ? 'last' : 'first' , '">&nbsp;</td>
		<td class="', $direction == 'top' ? 'main' : 'mirror', 'tab_back">', implode(' &nbsp;|&nbsp; ', $button_strip) , '</td>
		<td class="', $direction == 'top' ? 'main' : 'mirror', 'tab_' , $context['right_to_left'] ? 'first' : 'last' , '">&nbsp;</td>';
}

?>
