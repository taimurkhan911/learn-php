<?php
include "Layout/main_header.php"
?>
<!-- SUBHEADER
================================================== -->
<div id="subheader" class="blogstyle">
	<div class="row">
		<div class="eight columns">
			<p class="bread leftalign">
				 You are here: <a href="index.html"> Home</a> / <a href="elements.html">Elements</a>
			</p>
		</div>
		<div class="four columns">
			<div class="row collapse">
				<div class="ten mobile-three columns">
					<input type="text" class="nomargin" placeholder="Search...">
				</div>
				<div class="two mobile-one columns">
					<a href="#" class="postfix button expand">Go</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="hr">
</div>
<!-- CONTENT 
================================================== -->
<div class="row">
    <!-- TABS-->
	<div class="six columns">
		<h5>TABS</h5>
		<dl class="tabs">
			<dd class="active"><a href="#simple1">Simple Tab 1</a></dd>
			<dd><a href="#simple2">Simple Tab 2</a></dd>
			<dd><a href="#simple3">Simple Tab 3</a></dd>
		</dl>
		<ul class="tabs-content">
			<li class="active" id="simple1Tab">
			<p>
				This is simple tab 1's content. Pretty neat, huh? Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et non ex maxima parte de tota iudicabis? Item de contrariis, a quibus ad genera formasque generum.
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et non ex maxima parte de tota iudicabis? Item de contrariis, a quibus ad genera formasque generum venerunt. Sit enim idem caecus, debilis. Duo Reges: constructio interrete.
			</p>
			<p>
				Sit enim idem caecus, debilis. Duo Reges: constructio interrete.
			</p>
			</li>
			<li id="simple2Tab">This is simple tab 2's content. Now you see it! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et non ex maxima parte de tota iudicabis? Item de contrariis, a quibus ad genera formasque generum.</li>
			<li id="simple3Tab">This is simple tab 3's content. It's, you know...okay. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et non ex maxima parte de tota iudicabis? Item de contrariis, a quibus ad genera formasque generum.</li>
		</ul>
	</div>
	<!-- ACCORDIONS-->
	<div class="six columns">
		<h5>ACCORDIONS</h5>
		<ul class="accordion">
			<li class="active">
			<div class="title">
				<b>Accordion Panel 1</b>
			</div>
			<div class="content" style="overflow: hidden; display: block; ">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
			</li>
			<li class="">
			<div class="title">
				<b>Accordion Panel 2</b>
			</div>
			<div class="content" style="overflow: hidden; display: none; ">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
			</li>
			<li class="">
			<div class="title">
				<b>Accordion Panel 3</b>
			</div>
			<div class="content" style="overflow: hidden; display: none; ">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
				</div>
				</li>
			</ul>
		
	</div>
</div>
	<div class="row">
		<hr>
		<!-- TABLES-->
		<div class="seven columns">
			<h5>TABLES</h5>
			<table>
			<thead>
			<tr>
				<th>
					Table Header
				</th>
				<th>
					Table Header
				</th>
				<th>
					Table Header
				</th>
				<th>
					Table Header
				</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>
					Content
				</td>
				<td>
					This is longer content
				</td>
				<td>
					Content
				</td>
				<td>
					Content
				</td>
			</tr>
			<tr>
				<td>
					Content
				</td>
				<td>
					This is longer content
				</td>
				<td>
					Content
				</td>
				<td>
					Content
				</td>
			</tr>
			<tr>
				<td>
					Content
				</td>
				<td>
					This is longer content
				</td>
				<td>
					Content
				</td>
				<td>
					Content
				</td>
			</tr>
			<tr>
				<td>
					Content
				</td>
				<td>
					This is longer content
				</td>
				<td>
					Content
				</td>
				<td>
					Content
				</td>
			</tr>
			</tbody>
			</table>
		</div>
		<!-- ALERTS-->
		<div class="five columns">
			<h5>ALERTS</h5>
			<div class="alert-box default">
				 This is the default alert. <a href="" class="close">x</a>
			</div>
			<div class="alert-box">
				 This is a standard alert. <a href="" class="close">x</a>
			</div>
			<div class="alert-box success">
				 This is a success alert. <a href="" class="close">x</a>
			</div>
			<div class="alert-box alert">
				 This is an alert. <a href="" class="close">x</a>
			</div>
			<div class="alert-box secondary">
				 This is a secondary alert. <a href="" class="close">x</a>
			</div>
		</div>
	</div>
	<div class="row">
		<hr>
		<!-- VIDEOS-->
		<div class="seven columns">
			<h5>VIDEOS</h5>
			<dl class="tabs contained">
				<dd class="active"><a href="#video1">4:3</a></dd>
				<dd class=""><a href="#video2">Widescreen</a></dd>
				<dd class=""><a href="#video3">Vimeo</a></dd>
			</dl>
			<ul class="tabs-content contained">
				<li class="active" id="video1Tab" style="display: block; ">
				<div class="flex-video">
					<iframe width="420" height="315" src="http://www.youtube.com/embed/9otNWTHOJi8" style="border:0px;">
					</iframe>
				</div>
				</li>
				<li id="video2Tab" style="display: none; " class="">
				<div class="flex-video widescreen">
					<iframe width="560" height="315" src="http://www.youtube.com/embed/N966cATFWjI" style="border:0px;">
					</iframe>
				</div>
				</li>
				<li id="video3Tab" style="display: none; " class="">
				<div class="flex-video widescreen vimeo">
					<iframe src="http://player.vimeo.com/video/21762736?title=0&amp;byline=0&amp;portrait=0" width="400" height="225" style="border:0px;">
					</iframe>
				</div>
				</li>
			</ul>
		</div>
		<!-- PROGRESS BARS-->
		<div class="five columns">
			<h5>PROGRESS BARS</h5>
			<div class="progress six">
				<span class="meter"></span>
			</div>
			<div class="radius progress success eight">
				<span class="meter"></span>
			</div>
			<div class="nice round progress alert ten">
				<span class="meter"></span>
			</div>
			<div class="nice secondary progress">
				<span class="meter"></span>
			</div>
			<div class="hr">
			</div>
			<h5>BUTTONS</h5>
			<a href="#" class="button">Button</a>
			<a href="#" class="success button">Button</a>
			<a href="#" class="secondary button">Button</a>
			<a href="#" class="alert button">Button</a>
			<div class="minipause"></div>
			<div class="button dropdown">
				 Dropdown
				<ul>
					<li><a href="#">Dropdown Item</a></li>
					<li><a href="#">Another Dropdown Item</a></li>
					<li class="divider"></li>
					<li><a href="#">Last Item</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<hr>
		<!-- FORMS-->
		<div class="seven columns">
			<h5>FORMS</h5>
			<form>
				<fieldset>
					<legend>Form Title Here</legend>
					<div class="row">
						<div class="five columns">
							<label>Name</label>
							<input type="text" class="smoothborder"/>
							<label>Occupation</label>
							<input type="text" class="smoothborder"/>
							<label>Twitter</label>
							<div class="row collapse">
								<div class="two columns">
									<span class="prefix">@</span>
								</div>
								<div class="ten columns">
									<input type="text" placeholder="twitterusername" class="smoothborder"/>
								</div>
							</div>
							<label>URL</label>
							<div class="row collapse">
								<div class="nine columns">
									<input type="text" placeholder="website" class="smoothborder"/>
								</div>
								<div class="three columns">
									<span class="postfix">.com</span>
								</div>
							</div>
						</div>
					</div>
					<label>Address</label>
					<input type="text" placeholder="Street (e.g. 123 Amazing St.)"/>
					<div class="row">
						<div class="eight columns">
							<input type="text" placeholder="City" class="smoothborder"/>
						</div>
						<div class="four columns">
							<input type="text" placeholder="ZIP" class="smoothborder"/>
						</div>
					</div>
				</fieldset>
			</form>
		</div>		
		<div class="five columns">
		    <!-- PANELS-->
			<h5>PANELS</h5>
			<div class="panel">
				<h5>This is a regular panel.</h5>
				<p>
					It has an easy to override visual style, and is appropriately subdued.
				</p>
			</div>
			<div class="panel callout radius">
				<h5>This is a callout panel.</h5>
				<p>
					A little ostentatious, but useful for important content.
				</p>
			</div>
			<div class="hr">
			</div>
			<!-- PAGINATION-->
			<h5>PAGINATION</h5>
			<ul class="pagination">
				<li class="arrow unavailable"><a href="">&laquo;</a></li>
				<li class="current"><a href="">1</a></li>
				<li><a href="">2</a></li>
				<li><a href="">3</a></li>
				<li><a href="">4</a></li>
				<li class="unavailable"><a href="">&hellip;</a></li>
				<li><a href="">12</a></li>
				<li><a href="">13</a></li>
				<li class="arrow"><a href="">&raquo;</a></li>
			</ul>
		</div>
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