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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.06840589233425853" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4825660385365673" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.11951106254500976" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.45338154631070116" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.014137674628992514" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6579630225863762" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.238143872048451"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.1980228005985052" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9519158592295773">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.21372866244898514">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.870357526367177">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8531464571689304">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.31805233180771064"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.013164345325707538"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5685225444608841"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8769907291683923"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.049143849690715946"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.10026740550108548"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.48484449513740446"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.11027532515965555"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7893000441443219"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2726006004920525"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4279335598912173"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.17858553209946715"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.2956638389919546"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8444900206361896"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.3231410687909111"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8234372550026385"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.006895364127915249"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5595080089782309"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5750627656509042"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
