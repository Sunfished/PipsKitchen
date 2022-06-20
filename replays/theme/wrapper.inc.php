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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.07768388116092217" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.22894438479081125" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8880638825489555" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.04840300494187133" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.0062878050964660925" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7712712029646205" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.29884559308870773"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5259968113766464" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.33762438422211716">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9435529863802619">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.09911045373362826">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9558253420463061">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.08874785683279973"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.12792667873038455"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7876298425942458"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.003541578520036115"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.923967140616659"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.45434505873440845"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7914566185104634"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8093933397452286"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8895273087847315"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9978798422843265"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.26536743302508037"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2704944581006621"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.46182137025231507"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.024338270184464328"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7650119903647685"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9855745107090976"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.29627710033946664"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5182757616197415"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9898196691972134"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
