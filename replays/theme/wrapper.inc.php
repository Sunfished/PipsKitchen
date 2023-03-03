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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.11675634315479555" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.06623655470707446" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7308841599376696" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.457962497520469" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8984320367926382" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4429668046735631" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.34693536734524133"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7237992961826882" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9131469765531526">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5152733118269659">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3636638183194585">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3020460101023268">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.852089141687393"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.14063092481279926"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.16644833457897512"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.09894717847172974"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7899734945738968"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9456471360657452"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5071124704488661"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8413738778973519"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6665801983664086"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2708475853264789"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9236727969384786"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2910282479771318"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4700954997342639"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.39591304562493423"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.12560322747803765"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6335221414113168"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8922881364809876"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.06343213771341061"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.34283252226723726"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
