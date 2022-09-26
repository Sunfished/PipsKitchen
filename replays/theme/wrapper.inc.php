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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.061836573472642264" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8473666510117805" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.06974694453496233" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.47195824324045876" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.15116146939202868" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2436234207106054" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.04059160618751889"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4596191950034585" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9630431576013925">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9553387722429592">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.952883236999335">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8663698260995232">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6146182657353598"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.22791796679122656"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5267601170759828"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24456578591087785"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.22714513651668544"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.07163382643813399"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5752365268746216"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9116130360836445"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3392065972071292"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.023846831907193833"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.10835734542624098"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5337786176280879"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.35394558753726457"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4586202685346803"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.40561476728595136"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.0979698950740906"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9734150804348822"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4418459614854844"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1168516379635991"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
