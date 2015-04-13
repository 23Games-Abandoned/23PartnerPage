<html>

<head>

	<!-- Tytuł strony -->
	<title>{owner}</title>

	<!-- Ładowanie skryptów -->
	<script type="text/javascript" src="{tpl}demo/libs/jq.js"></script>
	<link rel="Stylesheet" type="text/css" href="{tpl}demo/libs/xo.css" />
	<script type="text/javascript" src="{tpl}parallax.min.js"></script>
	<script type="text/javascript" src="{tpl}/index.js"></script>
	<script type="text/javascript" src="{tpl}demo/examples.js"></script>
	<link rel="Stylesheet" type="text/css" href="{tpl}demo/index.css" />
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-34546066-1']);
	  _gaq.push(['_trackPageview']);
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>

</head>

<body class="background">
	<div class="container">

		<!-- Index - div startowy -->
		<div id="Home" class="leaguegothic white page">
			<div id="titlebox" class="f2 lghtgrey">
				<div class="f5 white">{owner}</div>
				{description}
			</div>
		</div>

		<!-- O mnie - div boczny (lewy) -->
		<div id="Aboutme" class="leaguegothic white page f2">
			<div class="w960 center" style="margin-top:50px;">
				<div class="right"><img {picture_path} style="width:200px;"><br><span class="calibri f0">{picture_text}</span></div>
				<h3>{aboutme}</h3>
				<div id="siewo" class="calibri f1 center w850 pad">
					{aboutme_content}
				</div>
			</div>
		</div>

		<!-- Facebook - div boczny (prawy) -->
		<div id="FBfeed" class="leaguegothic white page">
			<div id="content" class="black whitebg calibri f0 center w750 pad">
				<h1>Kto to jest {owner}</h1>
				<p>
					{fbfeeds}
				</p>
			</div>
		</div>

		<!-- Twitch (Live Stream) - div górny -->
		<div id="Twitch" class="leaguegothic white page">
			<a class="noanchor" href="#"><div id="logo" class="f2">Live Stream</div></a>
			<div class="f0 center w1280 pad">
				{twitch_player}
			</div>
		</div>

		<!-- Brak treści - div dolny -->
		<div id="Bottom" class="leaguegothic white page">
			<div id="logo" class="f2">^hello^ {owner}</div></a>
			<div class="f0 center w750 pad">

			</div>
		</div>

		<!-- Fuknkcja Testowa -->
		<div id="boo" class="leaguegothic white page clickable">
			<div class="center w400 " style="margin-top:20%;">
				<div class="lh0" style="font-size:300px;">BOO!</div>
				<div style="font-size:47px">Click anywhere to head back.</div>
			</div>
		</div>

	</div>

	<!-- Nawigacja -->
	<div id="leftControl" class="control">
		<img id="leftArrow" class="arrow left" style="width:60px" src="{tpl}demo/assets/arrowleft2.png"></img>
		<div id="leftText" class="dirText" style="float:left"> Test</div>
	</div>

	<div id="rightControl" class="control">
		<img id="rightArrow" class="arrow right" style="width:60px" src="{tpl}demo/assets/arrowright2.png"></img>
		<div id="rightText" class="dirText" style="float:right"> Test</div>
	</div>

	<div id="topControl" class="control center" style="width:145px;left:45%;">
		<img id="topArrow" class="arrow left" style="height:60px" src="{tpl}demo/assets/arrowtop2.png"></img>
		<div id="topText" class="dirText txtcenter" > Test</div>
	</div>

	<div id="bottomControl" class="control center" style="width:145px;left:45%;bottom:0px;">
		<div id="bottomText" class="dirText txtcenter"> Test</div>
		<img id="bottomArrow" class="arrow left" style="height:60px" src="{tpl}demo/assets/arrowbottom2.png"></img>
	</div>

</body>

</html>
