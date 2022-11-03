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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.48237433665778573" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.38051647760673823" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.21941806480504056" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.43151023574517655" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7130933854821169" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9368523616283224" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5454610376541396"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.09336989539223728" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.19365259159390447">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8027336499867583">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.013863444037661932">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7324473212696867">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2542079655081493"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.05197476961647607"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6136516115030983"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8498014555565079"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5613869182488773"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9318246509496879"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3596973704080868"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.20382947042410637"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.17475775095195378"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6866784949541131"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4251888914435089"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3847620046811242"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9723536923024925"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8184882752172433"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.844122522270738"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6361925207558901"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.08764081293059522"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7502834147906812"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7449737083147874"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
