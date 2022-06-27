<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.38090249112991437" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.848105218739633" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5351459013194328" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.687509761138621" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9743233628445043" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5254825129736909" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3031333919814021"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.17863498937961464" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.684291936014817">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7303371691994389">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5846630933061772">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.29766898017081345">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9635131578849272"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.36471449199862693"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4728804617111979"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.36099236841744653"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6805445604831482"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6512922443993878"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.21636024111714147"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.647498870316215"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8648848905146447"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.775712101833576"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6220271013465828"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.04306344067687551"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9464446783265961"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3759387253994628"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.30792437337344847"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.03388096684261388"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9967928795772403"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6783702793334956"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.873044914557878"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
