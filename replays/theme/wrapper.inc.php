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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.24927103810118867" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5948113478659631" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.38298675679570304" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.011460777665996513" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5661764070767099" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8011368955649196" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5943239656081833"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8599436921499304" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8725294598242328">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9792201490299159">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.050678153073138166">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4674379238812032">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.391933694028501"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9593225598398978"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6923489724257295"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5894592787609434"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.868956086067455"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7491040189348279"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3116566159263434"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.824483410973456"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.786409417886808"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7021846368464442"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4817128189639177"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.13933395371862511"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6156402553321965"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5395107512245334"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9880298280194766"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.13860527683843538"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5578818699669916"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5639584352997566"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.540641257964499"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
