<html>

<head>

	<title>{owner}</title>


	<script type="text/javascript" src="{tpl}demo/libs/jq.js"></script>
	<link rel="Stylesheet" type="text/css" href="{tpl}demo/libs/xo.css" />
	<script type="text/javascript" src="{tpl}parallax.min.js"></script>
	<script type="text/javascript" src="{tpl}/index.js"></script>
	<script type="text/javascript" src="{tpl}demo/examples.js"></script>
	<link rel="Stylesheet" type="text/css" href="{tpl}demo/index.css" />
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', '{google-analitics}']);
	  _gaq.push(['_trackPageview']);
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>

</head>

<body class="background">

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.3&appId=364701270267576";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

	<div class="container">

		<!-- Index - div startowy -->
		<div id="Home" class="leaguegothic white page">
			<div id="titlebox" class="f2 lghtgrey">
				<div class="f5 white">{owner}</div>
				^description^
			</div>
		</div>

		<!-- O mnie - div boczny (lewy) -->
		<div id="Aboutme" class="leaguegothic white page f2">
			<div class="w960 center" style="margin-top:50px;">
				<div class="right"><img {picture_path} style="width:200px;"><br><span class="calibri f0">{picture_text}</span></div>
				<h3>^aboutme^</h3>
				<div id="siewo" class="calibri f1 center w850 pad">
					^aboutme_content^
				</div>
			</div>
		</div>

		<!-- Facebook - div boczny (prawy) -->
		<div id="FBfeed" class="leaguegothic white page">
			<div id="content" class="black whitebg calibri f0 center w750 pad">
				<h1>^fbfeeds^</h1>
				<p>
					{fbfeeds}
				</p>
                <table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" style="width:100%;" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                    <thead>
                    <tr role="row"><th style="width:150px;" class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Command: activate to sort column descending">Command</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Response: activate to sort column ascending">Response</th><th style="width:100px;" class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Userlevel: activate to sort column ascending">Userlevel</th></tr>
                    </thead>

                    <tbody id="commandsTableBody" role="alert" aria-live="polite" aria-relevant="all"><tr class="odd"><td class=" sorting_1">!animelist</td><td class="">http://myanimelist.net/animelist/kagami_sama</td><td class="">Everyone</td></tr><tr class="even"><td class=" sorting_1">!battletag</td><td class="">Kagamisama#1468</td><td class="">Everyone</td></tr><tr class="odd"><td class=" sorting_1">!fb</td><td class="">https://www.facebook.com/kagaminium?fref=ts</td><td class="">Everyone</td></tr><tr class="even"><td class=" sorting_1">!heynight</td><td class="">Cześć [touser]! HeyGuys</td><td class="">Regular</td></tr><tr class="odd"><td class=" sorting_1">!justice</td><td class="">De Batyl, De Batyl, De Batyl... Justice!</td><td class="">Everyone</td></tr><tr class="even"><td class=" sorting_1">!karikov</td><td class="">/me MISZA! Kreygasm</td><td class="">Everyone</td></tr><tr class="odd"><td class=" sorting_1">!kebab</td><td class="">proszę tbBaconBiscuit</td><td class="">Everyone</td></tr><tr class="even"><td class=" sorting_1">!koniecstreama</td><td class="">BibleThump BibleThump KONIEC BibleThump BibleThump</td><td class="">Everyone</td></tr><tr class="odd"><td class=" sorting_1">!lethal</td><td class="">Łan dimejdż of lifal - Kagami http://i.imgur.com/iIozj2c.gif</td><td class="">Everyone</td></tr><tr class="even"><td class=" sorting_1">!okno</td><td class="">Umyjmy je razem! http://i.imgur.com/ZhSQpkn.jpg</td><td class="">Everyone</td></tr><tr class="odd"><td class=" sorting_1">!papug</td><td class="">Jam jest Król Papug IV (づ｡◕‿‿◕｡)づ Witajcie poddani</td><td class="">Everyone</td></tr><tr class="even"><td class=" sorting_1">!photoshop</td><td class="">Burżuazja!</td><td class="">Everyone</td></tr><tr class="odd"><td class=" sorting_1">!plugdj</td><td class="">https://plug.dj/kagaminium</td><td class="">Everyone</td></tr><tr class="even"><td class=" sorting_1">!poważnie</td><td class="">Bądźmy poważni KappaHD http://i.imgur.com/wsfcKcw.gif</td><td class="">Everyone</td></tr><tr class="odd"><td class=" sorting_1">!rekord</td><td class="">https://www.youtube.com/watch?v=BpHSm0KcW7o Aktualny rekord: 371 widzów.</td><td class="">Moderator</td></tr><tr class="even"><td class=" sorting_1">!rngesus</td><td class="">(つ°ヮ°)つ Dziękuję Ci Bogu RNG! http://i.imgur.com/RbPiQsL.gif</td><td class="">Everyone</td></tr><tr class="odd"><td class=" sorting_1">!rngfail</td><td class="">RNG skraca mi zycie ~Kagami</td><td class="">Everyone</td></tr><tr class="even"><td class=" sorting_1">!salut</td><td class="">[touser] Welcome in the Papug's army Soldier! Salut!</td><td class="">Moderator</td></tr><tr class="odd"><td class=" sorting_1">!stfu</td><td class="">Oh shut your face http://youtu.be/18kqcczy6MQ?t=12s</td><td class="">Everyone</td></tr><tr class="even"><td class=" sorting_1">!sylvanas</td><td class="">FUUUUUUUUUUUUUUU http://i.imgur.com/2zrhzss.gif</td><td class="">Everyone</td></tr><tr class="odd"><td class=" sorting_1">!szafa</td><td class="">Kocham Cię szafo! Tak ładnie pachniesz! http://i.imgur.com/4diyHYX.gif</td><td class="">Everyone</td></tr><tr class="even"><td class=" sorting_1">!toplay</td><td class="">Przypominajka - do zagrania na streamie: CS:GO z widzami, Mount &amp; Blade, Valiant Hearts, To The Moon, 0A.D., K&amp;M, Civ 5 z widzami, TeeWorlds z widzami, Tzar, Heroes 3</td><td class="">Regular</td></tr><tr class="odd"><td class=" sorting_1">!ts</td><td class="">ts.23games.me</td><td class="">Everyone</td></tr><tr class="even"><td class=" sorting_1">!zezwól</td><td class="">[alias]</td><td class="">Moderator</td></tr><tr class="odd"><td class=" sorting_1">król</td><td class="">Jam jest Król(owa) Papug IV (づ｡◕‿‿◕｡)づ Witajcie poddani</td><td class="">Everyone</td></tr></tbody></table>
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
			<div id="logo" class="f2" style="padding-bottom: 50px">^hello^ {owner}</div></a>
			<div class="black whitebg calibri f0 center w750 pad">
                <div class="fb-comments" data-href="http://kagaminium.23games.me" data-width="100%" data-numposts="10" data-colorscheme="dark"></div>
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
