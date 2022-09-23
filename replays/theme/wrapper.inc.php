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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5302366461170247" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.32793423887121054" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6744270887752744" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6482614700802733" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3210368582445713" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.80019524461191" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.19245298937715072"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2577255649506651" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6461560529798458">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9255639353678378">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8034500499297383">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.41972283002861177">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.15894121603218947"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5493511927212322"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5621220078127249"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.05843282383290438"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.20258578043768427"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.48885348441447274"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.679923758359033"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.905650401928416"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.10772995011185915"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.60794799399173"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.18415900276705366"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.29725634708272364"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8860554107982361"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5228004656281511"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.28138997361356144"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.43220754129684513"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.36288624735974384"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6845346230521423"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8893082218464212"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
