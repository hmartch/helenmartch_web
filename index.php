<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>HelenMartch.com</title>
	<meta name="description" content="My personal site which includes my resume, portfolio, family photos, videos, and more." />
	<meta name="keywords" content="resume portfolio bio projects personal site Helen Martch resume Helen March" />
	<?php include "includes/head.php"; ?>
</head>
<body>
	<div id="photoside"></div>
	<?php include "includes/header.php"; ?>
	<div id="content">
	
	<div id="main">
		<h2>About My Site</h2>
		<section>
		<p>I have had a personal website since 1996. This site is meant to be a showcase of my skills and range of abilities and also a personal space.</p>
		<p>I have written all the content, planned the design, prepped the images, edited and converted the videos, and written the code. This latest 
		version uses PHP, XSL, XML, JSON, JQuery, CSS, and HTML5. I have tested with Firefox, Safari, Chrome, Internet Explorer, and even on the iPad. Taking the 
		time to work through all these steps have renewed my appreciation for my former team mates and co-workers with whom the workload was shared on projects 
		we did together.</p>
		<p>I hope you enjoy getting to know me better. Thanks for visiting!</p>


		<h3>My Career</h3>
		<p>In June 2011, I left my job at Oprah.com after nearly eleven years working on the front-end development of the site. Since February 2012, I have been 
		working as a front-end developer for the Sears Holdings Corporation where I've contributed to a variety of projects.  
		<a href="resume-overview.php">Learn more about my experience in my career overview...</a></p>


		<h3>My Portfolio</h3>
		<p>Browse through my portfolio pages to see a wide variety of projects that I have to share.<br/>
		<a href="portfolio-category.php?cat=va">Art</a> | <a href="portfolio-category.php?cat=3d">3-D Images</a> | <a href="portfolio-category.php?cat=gd">Design</a> | <a href="portfolio-category.php?cat=mm">Multimedia</a> | <a href="portfolio-category.php?cat=wd">Web</a> | <a href="portfolio-writing.php">Writing</a></p>

		
		<h3>My Interests</h3>
		<p>I have lots of interests! I love <a href="http://www.goodreads.com/user/show/3565405-helen-martch" target="ext">books</a>, games, television, movies, history, space, and much more. That's too much to keep up with as pages 
		on my site though, so I chose three primary interests to share.<br/>
		<a href="interest-garden.php">Garden</a> | <a href="interest-music.php">Music</a> | <a href="interest-travel.php">Travel</a></p>
		
		
		<h3>My Family</h3>
		<p>The past, present, and future of my family is very important to me. Family is a big part of what makes us who we are. A bit of who I am 
		because of my family can be learned through <a href="family-genealogy.php">genealogy</a>, <a href="family-photos.php">photos</a>, and 
		<a href="family-videos.php">videos</a>.</p>
		
		</section>
	</div>
	
	<div class="side">
		<?php include "includes/general-side1.php"; ?>
	</div>

	<div class="side">
		<h3>Video</h3>
		<video controls="controls">
			<source src="/videos/snowman.mp4" type="video/mp4" />
			<source src="/videos/snowman.theora.ogg" type="video/ogg" />
			Sorry, but your browser does not support the video tag.
		</video>
		<p>"The Death of a Snowman"</p>
		<p>A 3-D computer animation that I produced while studying at DePaul University. <a href="portfolio-project.php?piece=death-snowman">More about this project.</a></p>
		<p><a href="family-videos.php">See more videos...</a></p>
	</div>
	
	<?php include "includes/foot.php"; ?>
	
</div>
</body>
</html>