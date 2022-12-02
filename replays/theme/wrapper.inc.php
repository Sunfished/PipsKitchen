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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9748303404711685" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.045583382468660893" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.500664644901623" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7990525099706203" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8619877770800539" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4157715413412537" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.692495826449947"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6097481582245461" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.916683170923914">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7562882561176922">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.2370337357743848">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.17922673412902013">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5687953833610786"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6542016393591619"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9326402955426392"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.32122839778528567"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7822729892774376"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5504440174384511"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2641053233358457"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.00007674817048597404"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7688704167048805"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.15146075286603655"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4779108279812829"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5238414828275713"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4614431310391862"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9202573428317362"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.35249671690991335"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6588450786704192"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6840591866236023"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.20696272855106979"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8236154658902257"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
