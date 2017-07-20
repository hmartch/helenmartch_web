<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>HelenMartch.com</title>
	<meta name="description" content="My personal site which includes my resume, portfolio, family memories and things I like." />
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
		<p>I have had my own website since 1996. This site showcases my range of skills and is also a personal space.</p>
		<p>I planned the design, edited and converted the videos, prepared the images, and wrote all the content and code. This current 
		version uses PHP, JSON, JQuery, CSS, and HTML5.</p>
		<p>I hope you enjoy getting to know me better. Thanks for visiting!</p>


		<h3>My Career</h3>
		<p>I have worked as a front-end web developer since 1997. I have been a freelancer and a staff employee. I have worked for corporations and for 
			start-ups. I also have experience teaching at the university level and as an interaction designer. 
			<a href="resume-overview.php">Learn more about my experience in my career overview...</a></p>


		<h3>My Portfolio</h3>
		<p>I have examples of a wide range of <a href="portfolio-category.php?cat=wd">web</a> projects, samples of my <a href="portfolio-writing.php">writing</a> 
		done for school or for fun, and a variety of <a href="portfolio-category.php?cat=va">other projects</a> including print design and 3-D images.</p>
		
		
		<h3>My Family</h3>
		<p>The past, present, and future of my family is very important to me. I share some <a href="family-photos.php">memories</a> and thoughts about 
			my <a href="family-genealogy.php">family tree</a>.</p>

		
		<h3>My Interests</h3>
		<p>I have lots of interests! I love books, games, television, movies, history, space, and much more. Here are some of my favorite 
			pieces of <a href="interest-music.php">music</a>. Plus, I love to <a href="interest-travel.php">travel</a>.</p>
		
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