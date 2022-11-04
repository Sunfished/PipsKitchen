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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.673682218890783" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.11432190366328587" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.61627783484887" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9716849887050325" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.2596658652137076" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5181173375351984" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.17341505491400722"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2004972228681292" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7299503860579948">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2589705939288862">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7359962784682781">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.31488677055621017">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.29989345381100185"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5168072693428418"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.13609551376414508"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2749732588393554"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4021558772074083"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.12398889622040987"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3115010517371437"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.26527858707834273"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6075992099292573"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8870281257968131"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.37226499981471317"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7620523568712583"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.38234913243094093"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.668227557974848"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.23119603929554944"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.30675671935122995"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.17757479514240626"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.36330607484615385"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4388749600294579"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
