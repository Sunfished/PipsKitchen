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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7631539379849599" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.41909571350212604" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7807486577815292" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.04012723584934452" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.00992784605504049" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9211741551361246" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6064626509794817"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9997392368930087" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3487055589998669">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9027471848240696">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.15561945435233926">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.23220586578357083">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.45313291654736276"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.008695519195797585"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8779843556602918"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6938501984587924"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.731517066318963"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6525910710709684"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3145084738919768"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7026269753927363"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8264632452330001"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.32103052101497975"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.28760406752597123"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.46146648269088764"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9830714185524065"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5345654512370119"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.529330606080904"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6721348330802155"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.1628911505105981"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5377482231918371"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3152271437721468"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
