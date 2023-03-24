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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.011616824221394983" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.0324880293730101" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8988133578984037" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5791358323982265" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5414003100078433" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.591974799202357" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.1097990279255916"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2281740540524575" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.909023381201264">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4242530755144345">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.2910187014757173">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8837741334664062">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.059029299598316376"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4384217993930506"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.10202543681688203"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6378309472546095"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.1836872800791478"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.28250536514088576"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8274699097988107"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.47600899746726677"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.1632767337186798"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2859714148262138"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.26477278917806113"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3562361382919741"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4045479890957355"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.1671482428939315"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.25730491267464406"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6618920277786782"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.12617394742101196"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4137918803956584"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7899041788580348"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
