<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Contact 855 Webmaster</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
</head>
<body id="img4">
<div class="bw b1 pfix np">
  <div class="pw">
    <div class="al">
      <div class="arc"></div>
    </div>
    <div class="ar">
      <div class="arc"></div>
    </div>
    <div id="tmenu"><a href="/" class="hl">855 <span>WEBMASTER</span></a><a href="tel:18559326278" class="ph"></a>
      <ul id="dm">
        <li><a href="/" tabindex="1"><span>home</span></a></li>
        <li><a href="about.html" tabindex="2"><span>about</span></a></li>
        <li><a href="portfolio.html" tabindex="3"><span>portfolio</span></a></li>
        <li><a href="contact.html" tabindex="4"><span>contact</span></a></li>
      </ul>
      <div class="cl"></div>
    </div>
  </div>
</div>
<div class="bw ft np" id="img1">
  <div class="pw-t" id="fea">
    <p class="title">855 Webmaster</p>
    <p>Getting a visitor to your site is half the battle, and keeping them there is just as important.</p>
  </div>
</div>
<div class="pw-p">
  <div class="flw" id="content">
    <div id="breadcrumbs"><a href="/">Home</a> &raquo; Contact</div>
    <h1>Contact 855 Webmaster</h1>
<?php
	extract($_POST);
	if ($realname == '* Name:') { $realname = '';}
	if ($homephone == 'Phone:') { $homephone = '';}
	if ($email == '* E-mail:') { $email = '';}
	if ($comment == 'Comments:') { $comment = '';}
	$email_valid = preg_match('/([[:alnum:]\.\-]+)(\@[[:alnum:]\.\-]+\.+)/', $email);
	switch($formtest)
	{
		case "test":
		{
			if(($realname != '') && ($email != '') && ($email_valid != 0))
			{
				$ToEmail = "info@855webmaster.com";
				$ToName="855 Webmaster";
				$ToSubject = "855 Webmaster 10K Contact Form - From: ".$realname;
				$EmailBody = "Name: $realname\nPhone: $homephone\nEmail: $email\n\nAny Other Comments:\n$comment\n";
				$EmailFooter="\nSenders IP address: ".$_SERVER['REMOTE_ADDR'];
				$Message = $EmailBody.$EmailFooter;
				if ($url == '') { 
					mail($ToName." <".$ToEmail.">", $ToSubject, $Message, "From: ".$realname." <".$email.">");
					mail($ToName." <peter@855webmaster.com>", $ToSubject, $Message, "From: ".$realname." <".$email.">");
				}
							// End Send Mail
				
				
?>
<h2>Thank You</h2>
<p class="alcenter">Your Request Has Been Submitted</p>
<p>&nbsp;</p>
<?php
			}
			else
			{
?>
<h2>Form Submission Error</h2>
<p>Note: Fields with a <span class="ast">* </span> are required. Please provide the required information before submitting.</p>
  <form action="contact.php" method="post">
	  <input type="hidden" name="formtest" value="test">
	  <label for="realname" class="cformlt"><?php if ($realname == '') {echo '<span class="ast">* Name:</span>'; } else { echo '<span class="ast">* </span>Name:'; } ?></label>
	  <input id="realname" name="realname" value='<?php echo "$realname"; ?>'>
	  <label for="homephone" class="cformlt">Phone:</label>
	  <input id="homephone" name="homephone" value='<?php echo "$homephone"; ?>'>
	  <label for="email" class="cformlt"><?php if($email == '') { echo '<span class="ast">* E-Mail:</span>'; } else if ($email_valid == 0) {echo '<span class="ast">* Enter Valid E-mail:</span>'; } else { echo '<span class="ast">* </span>E-Mail:'; } ?></label>
	  <input id="email" name="email" value='<?php echo "$email"; ?>'>
	  <p class="as">Leave this empty: <input type="text" name="url" value='<?php echo "$url"; ?>' /></p>
	  <label for="comment" class="cformlt">Comments:</label>
	  <textarea id="comment" name="comment" cols="20" rows="5"><?php echo "$comment"; ?></textarea>
	  <input type="submit" name="submit" value="submit" class="btn">
	</form>
  <?php
			}
?>
  <?php
		}
		break;
		default:
		{
?>

  <h2>Contact Form</h2>
  <p>Note: Fields with a <span class="ast">* </span> are required.</p>
  <form action="contact.php" method="post">
	  <input type="hidden" name="formtest" value="test">
	  <label for="realname" class="cformlt"><span class="ast">* </span>Name:</label>
	  <input id="realname" name="realname">
	  <label for="homephone" class="cformlt">Phone:</label>
	  <input id="homephone" name="homephone">
	  <label for="email" class="cformlt"><span class="ast">* </span>E-mail:</label>
	  <input id="email" name="email">
      <p class="as">Leave this empty: <input type="text" name="url" /></p>
	  <label for="comment" class="cformlt">Comments:</label>
	  <textarea id="comment" name="comment" cols="20" rows="5"></textarea>
	  <input type="submit" name="submit" value="submit" class="btn">
	</form>
<?php
		}
		break;
	}
?> 
    <div class="cl"></div>
  </div>
  <div class="frt">
    <div class="sb sb1 bg1 np" id="img3">
      <h3 class="alt">Contact Us</h3>
      <form action="contact.php" method="POST">
        <input type="hidden" name="formtest" value="test">
        <input name="realname" value="* Name:" onfocus="if(this.value == '* Name:') {this.value = '';}" onblur="if (this.value == '') {this.value = '* Name:';}" tabindex="5">
        <input name="homephone" value="Phone:" onfocus="if(this.value == 'Phone:') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Phone:';}" tabindex="6">
        <input name="email" value="* E-mail:" onfocus="if(this.value == '* E-mail:') {this.value = '';}" onblur="if (this.value == '') {this.value = '* E-mail:';}" tabindex="7">
        <p class="as">Leave this empty:<input type="text" name="url" /></p>
        <textarea name="comment" onfocus="if(this.value == 'Comments:') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Comments:';}" tabindex="8">Comments:</textarea>
        <input type="submit" name="submit" value="submit" class="btn" tabindex="9">
      </form>
    </div>
    <div class="sb sb2 np">
      <div id="pf">
          <div class="it" id="it1">Under 10Kb</div>
          <div class="it" id="it2">Progressive Enhancement</div>
          <div class="it" id="it3">Responsive Design</div>
      </div>
    </div>
    <div class="sb sb3">
      <h3>Resources</h3>
      <ul>
        <li><a href="https://a-k-apart.com/">10K Apart</a></li>
        <li><a href="https://abookapart.com/">A Book Apart</a></li>
        <li><a href="http://adaptivewebdesign.info/2nd-edition/">Adaptive Web Design</a></li>
      </ul>
    </div>
    <hr>
    <div class="sb sb4">
      <p><span>&ldquo;</span><strong><em>High quality work, cost-effective and produces excellent results on time.</em></strong></p>
      <p>- Alexander</p>
    </div>
    <hr>
    <div class="sb sb5">
      <h3>855 Webmaster</h3>
      <p>225 18th St. #2,<br>
        Rock Island, IL 61201<br>
        <a href="mailto:info@855webmaster.com">info@855webmaster.com</a><br>
        <strong>(855) WEBMASTER</strong><br>
        (855) 932-6278</p>
    </div>
  </div>
  <div class="cl"></div>
</div>
<div id="img6">
  <div class="bw bg1 np" id="img2">
    <div class="pw-xp">
      <p id="bl-title">Posted in 10K Apart</p>
      <div class="fl">
        <div class="bl"><p><span>August 15, 2016</span><br><a href="https://blogs.windows.com/msedgedev/2016/08/15/10k-apart/#OJ9S8Ui25GQYEHrB.97" target="_blank"><strong>What would you do with 10kB?</strong></a></p></div>
        <div class="bl"><p><span>August 30, 2016</span><br><a href="https://blogs.windows.com/msedgedev/2016/08/30/building-in-10k-content-and-strategy/" target="_blank"><strong>Building in 10k: Content and Strategy</strong></a></p></div>
        <div class="bl"><p><span>September 6, 2016</span><br><a href="https://blogs.windows.com/msedgedev/2016/09/06/10k-for-optimization-performance/" target="_blank"><strong>Building in 10k: Designing for Optimization and Performance</strong></a></p></div>
      </div>
    </div>
  </div>
  <div class="bw bg2" id="img5">
    <div class="pw-xp">
      <p class="np bm"><a href="/">home</a> | <a href="about.html">about</a> | <a href="portfolio.html">portfolio</a> | <a href="contact.html">contact</a></p>
      <p>Copyright &copy; 2016 <a href="http://855webmaster.com/">855 Webmaster</a></p>
    </div>
  </div>
</div>
<script>(function() {function async_load(){var s = document.createElement('script');s.type = 'text/javascript';s.async = true;s.src = 'scripts.js';var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);}if (window.attachEvent)window.attachEvent('onload', async_load); else window.addEventListener('load', async_load, false);})();</script>
</body>
</html>
