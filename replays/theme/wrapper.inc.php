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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.20991635521190077" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.48997694326278873" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.25523043122093303" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9162822769295551" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.050171214679502585" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.028515920519325277" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8222106517800181"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.23647784149410023" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7871134464905463">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4325444231268001">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.24470372201139257">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.28310252372213673">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.815270501378373"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.33578047772062325"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.32587705095065034"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.09798993149301305"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5310140613180407"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6339139028809095"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2774827939895901"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.1648597491248407"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6365656628202196"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.07965071342631402"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.11707349653959453"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.38432507774335845"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6940632826694595"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4978663533570671"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.33940119679131797"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8351805193099386"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5881992679658712"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6273144352268616"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.2810704046709569"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
