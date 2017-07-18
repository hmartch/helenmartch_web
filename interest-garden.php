<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Interests: Garden - HelenMartch.com</title>
	<meta name="description" content="A slideshow of the wonders of nature in our own backyard." />
	<meta name="keywords" content="garden gardening plant flower tree photo slide personal site Helen Martch Helen March" />
	<meta charset="windows-1252">
	<meta name="google-site-verification" content="hgbcQefWUSgp2t9BA0KJuCPJQGyOVdeemJ8h8sy7L9c" />
	<link rel="stylesheet" type="text/css" href="styles/hlm2011.css"/>
	<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="styles/hlm2011-ie-lt9.css"/>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="data/JSONdata-garden.js" type="text/javascript"></script>
</head>
<body>
	<div id="photoside"></div>
	<div id="content">

	<header>
		<?php include "includes/heading.php"; ?>
		<?php include "includes/nav.php"; ?>
	</header>
	
	<div id="main">
		<h2>Garden</h2>
		<section>
		<p>It can be quite satisfying to work on our garden.</p>
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
	
	<div id="side1" class="side">
		<?php include "includes/general-side1.php"; ?>
	</div>
	
	<div id="side2" class="side">
		<div id="biobits">
			<ul>
				<li></li>
			</ul>
		</div>
	</div>

	<div id="side3" class="side"></div>
	
	<?php include "includes/foot.php"; ?>
	
	<script src="js/jquery-1.7.1.js" type="text/javascript"></script>
	<script src="js/hlm2011.js" type="text/javascript"></script>
	
</div>
</body>
</html>