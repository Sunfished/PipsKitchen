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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3791962064702996" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.44929945329868204" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.30803374797151384" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.943107104251653" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.10397501530405528" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7470170654371167" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6602320729984044"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7557663727813388" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.47083831623234285">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.15762371647611162">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.2555730425516405">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5791267144789631">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9737544266591498"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.17712703364368276"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3481065691487668"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4734674754738655"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3886163548248016"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.10638594695302306"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6570333020993715"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3106532080744837"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.20947871454282696"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.0005245776934521551"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.08996655165188239"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.31091229279551813"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.0375709910905615"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6928002793916546"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7107422413363558"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7579165430192631"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.39891982912788015"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9568899054713931"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.49631392113045125"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
