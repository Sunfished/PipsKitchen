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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5681510258110192" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4713193685932453" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3920664254187136" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3116596132730862" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.30152540218531" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5931823948101578" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9113539697793471"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3524085453900514" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5099905961977518">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.02861355241219532">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.006654562621109639">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.26004186480204283">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.12598423818172044"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8201850294809552"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6750461298371415"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.28344586012759265"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.10430359791629296"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.902610743966064"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6742308518019431"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.36001015810073533"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5230656216519673"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6978737616040491"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.12523819101623412"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6834696812435499"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9809085679677871"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.28254581883045926"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8325843095887653"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9859213089035472"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6804104481964088"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9940999356172966"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.13850312826784705"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
