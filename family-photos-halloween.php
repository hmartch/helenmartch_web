<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Family: Photos: Halloween - HelenMartch.com</title>
	<meta name="description" content="A slideshow of our son's Halloween costumes and some of our jack-o-lanterns and other Halloween fun other the years." />
	<meta name="keywords" content="Halloween costumes jack-o-lantern pumpkin family photo slide personal site Helen Martch Helen March" />
	<?php include "includes/head.php"; ?>
	<script src="data/JSONdata-halloween.js" type="text/javascript"></script>
</head>
<body>
	<div id="photoside"></div>
	<?php include "includes/header.php"; ?>
	<div id="content">
	
	<div id="main">
		<h2>Photos &mdash; Halloween</h2>
		<section>
		<!--<p></p>-->
		<h3></h3>
		<img src="/images/spacer.gif" id="slideimg" class="slide" alt="photo"/>
		<nav class="slide"><div class="left"><span class="first">first</span> | <span class="prev">previous</span></div> <div class="right"><span class="next">next</span> | <span class="last">last</span></div></nav>
		<div id="thumbcont">
			<div id="thumbs" class="clear"></div>
		</div>
		
		<h3 id="slidetitle"></h3>
		<p id="slidedesc"></p>
		<p id="slidedate"></p>
		</section>
	</div>
	
	<div class="side">
		<?php include "includes/general-side1.php"; ?>
	</div>

	<div class="side">
		<h3>More Photos</h3>
		<ul>
			<li><a href="family-photos-garden.php">Garden</a></li>
			<li>Halloween</li>
			<li><a href="family-photos-pets.php">Pets</a></li>
			<li><a href="family-photos-travel.php">Travel</a></li>
		</ul>
	</div>

	<div class="side details">
		<h3>Halloween Through the Years</h3>
	</div>
	
	<?php include "includes/foot.php"; ?>
	
</div>
</body>
</html>