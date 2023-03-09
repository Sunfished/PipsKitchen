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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4968435772220552" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9210779966264762" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6957574071848465" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.055211227366403826" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.21924978686710928" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7820709935463506" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5158938709735859"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.38355448007647985" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.07605421047085992">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.21762541262181112">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.22396494336830974">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8295066183073094">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9554433941826306"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8068342126239543"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.11852158806172919"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.29733009486240825"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5243974721315532"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.23707472839250188"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5418515429929684"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4300832562722767"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.39614194714313977"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9096734391355228"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.258898951023423"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8157617423912591"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.31896755248706343"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.06304223151858657"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.04415753986105342"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.80031369233478"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.2668438571912606"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.015396063852690878"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5108395542363002"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
