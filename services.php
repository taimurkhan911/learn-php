<?php
include "Layout/main_header.php"
?>
<!-- SUBHEADER
================================================== -->
<div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p class="left">
				 OUR SERVICES
			</p>
			<p class="right">
				 Request a free quote
			</p>
		</div>
	</div>
</div>
<div class="hr">
</div>
<!-- CONTENT 
================================================== -->
<div class="row">
    <!-- MAIN CONTENT-->
	<div class="eight columns">
		<div class="sectiontitle">
			<h4>What we offer</h4>
		</div>
		<!-- Services List-->
		<div class="six columns noleftmargin">			
			<h5 class="sidebartitle">Service 1</h5>
			<p>	
			<img src="http://www.wowthemes.net/demo/studiofrancesca/images/settings.png" class="pics" alt=""> Duis sit amet risus nunc. Maecenas a elementum urna. Quisque euismod pellentesque sem in feugiat. Mauris nulla urna, euismod sit amet placerat et, adipiscing sit amet nisi. Maecenas libero purus, pulvinar at blandit a, auctor non nulla. Fusce vitae tortor erat
			</p>
		</div>
		<div class="six columns noleftmargin">
			<h5 class="sidebartitle">Service 2</h5>
			<p>
			<img src="http://www.wowthemes.net/demo/studiofrancesca/images/settings.png" class="pics" alt=""> Duis sit amet risus nunc. Maecenas a elementum urna. Quisque euismod pellentesque sem in feugiat. Mauris nulla urna, euismod sit amet placerat et, adipiscing sit amet nisi. Maecenas libero purus, pulvinar at blandit a, auctor non nulla. Fusce vitae tortor erat.
			</p>
		</div>
		<div class="six columns noleftmargin">
			<h5 class="sidebartitle">Service 3</h5>
			<p>
			<img src="http://www.wowthemes.net/demo/studiofrancesca/images/settings.png" class="pics" alt=""> Duis sit amet risus nunc. Maecenas a elementum urna. Quisque euismod pellentesque sem in feugiat. Mauris nulla urna, euismod sit amet placerat et, adipiscing sit amet nisi. Maecenas libero purus, pulvinar at blandit a, auctor non nulla. Fusce vitae tortor erat.
			</p>
		</div>
		<div class="six columns noleftmargin">
			<h5 class="sidebartitle">Service 4</h5>
			<p>
			<img src="http://www.wowthemes.net/demo/studiofrancesca/images/settings.png" class="pics" alt=""> Duis sit amet risus nunc. Maecenas a elementum urna. Quisque euismod pellentesque sem in feugiat. Mauris nulla urna, euismod sit amet placerat et, adipiscing sit amet nisi. Maecenas libero purus, pulvinar at blandit a, auctor non nulla. Fusce vitae tortor erat.
			</p>
		</div>
		<div class="clear">
		</div>
		<br/>
		<div class="panel">
			<p>
				<b>Phasellus luctus ante in eros suscipit aliquet. Donec convallis scelerisque tellus, quis vulputate lacus laoreet sed. Mauris vitae ultricies neque. Nullam arcu neque, posuere et accumsan quis, euismod id leo. Donec tristique, nisi vel tincidunt faucibus, velit eros pulvinar leo, in sollicitudin nisi nibh ac arcu.</b>
			</p>
		</div>		
	</div><!-- end main content-->
	
    <!-- SIDEBAR-->
	<div class="four columns">
	    <!-- Free Quote Form-->
		<h5>Have a project in mind?</h5>
		<p>
			Just provide some preliminary information and a our team will contact you as soon as possible.
		</p>
		<div class="done">
				<div class="alert-box success">
				 Message has been sent! <a href="" class="close">x</a>
				</div>
		</div>
		<div class="form">
			<form method="post" action="contact.php" id="contactform">
				<input type="text" name="name" class="smoothborder" placeholder="Your name *"/>
				<input type="text" name="email" class="smoothborder" placeholder="E-mail address *"/>
				<textarea name="comment" class="smoothborder" rows="6" placeholder="Describe your project *"></textarea>
				<input type="submit" id="submit" class="readmore" value="Submit">
			</form>
		</div>
		<br/>
		<!-- Accordion-->
		<ul class="accordion">
			<li class="active">
			<div class="title">
				<b>Don't miss our treats</b>
			</div>
			<div class="content accordiontrick">
				<p>
					 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
			</li>
			<li class="">
			<div class="title">
				<b>Holiday Services</b>
			</div>
			<div class="content accordiontrick">
				<p>
					 Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
				<p>
					 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
			</li>
		</ul>
	</div><!-- end sidebar-->
</div>
<div class="hr">
</div>

<!-- FOOOTER 
================================================== -->
<?php
include "Layout/Footer.php";
/* JAVASCRIPTS 
================================================== -->
<!-- Javascript files placed here for faster loading -->*/

include "javascripts/addJavascriptFiles.php";
?>
</body>
</html>