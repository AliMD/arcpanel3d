<!DOCTYPE html system "about:legacy-compat">
<html lang="en-US">
<head>
	<meta charset="utf-8" />
	<title>Arc Panel 3D | Home</title>
	<link type="text/css" rel="stylesheet" href="style.css" />
	<script type="text/javascript" src="scripts/html5shiv.js"></script>
	<script type="text/javascript">
		document.write('<script type="text/javascript" src=scripts/' + ('__proto__' in {} ? 'zepto' : 'jquery') + '.js><\/script>');
	</script>
	<script type="text/javascript" src="scripts/script.js"></script>
</head>
<body>
<header class="main">
	<div class="head-line"></div>
</header>
<section class="left-panel">
	<div class="top-bg"></div>
	<nav class="menu">
		<div class="logo"><img src="images/logo.png" width="190" height="62" /></div>
		<menu>
			<li><a href="#">home</a></li>
			<li><a href="#">about</a></li>
			<li><a href="#">products</a></li>
			<li><a href="#">our stores</a></li>
			<li><a href="#">contact us</a></li>
		</menu>		
	</nav>
	<div class="bot-bg"></div>
</section>
<aside class="right-aside"><!--MONDAM CHE CLASSI BEZARAM :D-->
	<menu class="right-panel"> <!--should coded with php to load images-->
		<li><a href="#"><img src="images/right-side/1.png" alt="image1" tooltip="" /></a></li>
		<li><a href="#"><img src="images/right-side/2.png" alt="image2" tooltip="" /></a></li>
		<li><a href="#"><img src="images/right-side/3.png" alt="image3" tooltip="" /></a></li>
		<li><a href="#"><img src="images/right-side/4.png" alt="image4" tooltip="" /></a></li>
		<li><a href="#"><img src="images/right-side/5.png" alt="image5" tooltip="" /></a></li>
		<li><a href="#"><img src="images/right-side/6.png" alt="image6" tooltip="" /></a></li>
	</menu>
	<div class="marker"></div>
</aside>
<section class="slideshow">
	<div class="noise"></div>
	<div class="backimg">

		<script type="text/javascript">/*better to change it to PHP*/
			for(var i=1;i<7;i++) document.write(
				'<div class="slideshow" style="background-image :url(images/gallery/'+i+'.jpg);">	<section class="desc"><h1><p></p></h1></section></div>'
				);
		</script>

	</div>
</section>
<footer>
	<p>Copyright © 2012. All rights reserved. check this project at <a href="#">Github</a>.</p>
	<div class="media-button">
		<div class="pre"></div>
		<div class="next"></div>
		<div class="play"></div>
	</div>
	<div class="foot-line"></div>
</footer>
</body>
</html>