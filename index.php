<!DOCTYPE html>
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
<header>
	<div class="head-line"></div>
</header>
<section class="aside">
	<div class="top-bg"></div>
	<nav class="menu">
		<div class="logo">
			<h1>Arc Panel 3D</h1>
		</div>
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
<aside class="right-panel"> <!--should coded with javascript to load images-->
	<div><img src="images/right-side/1.png" alt="image1" tooltip="" /></div>
	<div><img src="images/right-side/2.png" alt="image2" tooltip="" /></div>
	<div><img src="images/right-side/3.png" alt="image3" tooltip="" /></div>
	<div><img src="images/right-side/4.png" alt="image4" tooltip="" /></div>
	<div><img src="images/right-side/5.png" alt="image5" tooltip="" /></div>
	<div><img src="images/right-side/6.png" alt="image6" tooltip="" /></div>

</aside>
<section class="slideshow">
	<div class="noise"></div>
	<div class="backimg">

		<script type="text/javascript">
			for(var i=1;i<7;i++) document.write('<div class="slideshow" style="background-image :url(images/gallery/'+i+'.jpg);"></div>');
		</script>

	</div>
</section>
<footer>
	<div class="desc">
		<p>social links:</p>
		<div class="social">
			<div class="google">
				<div class="tooltip">google plus</div>
			</div>
			<div class="foresst">
				<div class="tooltip">foresst</div>
			</div>
			<div class="drible">
				<div class="tooltip">drible</div>
			</div>
		</div>
	</div>
</footer>
</body>
</html>