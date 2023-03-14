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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8702324539603568" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3844058558777683" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7271697551631429" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6149505698752662" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9293793191344872" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9783237627525412" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.26023964073053096"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6319799540311941" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.07700466405460538">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.40483484690227023">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6968373984382752">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.40018078112003885">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1665649407991978"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5069290162500648"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.27629422297198514"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.22180056559345518"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7698055186430848"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.004615543861459459"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.773163200272212"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5354082946734819"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.08013490982759519"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2484738389185397"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6681118607834224"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.054947567412192644"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.18120354948658002"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9371161235405305"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5430621255726669"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5253646236936944"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8527819920413462"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.10808053966801467"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.41816600174988494"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
