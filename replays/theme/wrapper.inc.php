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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5753063843273436" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.47848915935801806" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6532304650234877" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9092687617556372" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.39804174476374055" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.32421050959411724" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.0746081043052571"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.11889545597887063" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.46418803727177305">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5763347126493839">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4816468498082336">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6587140860039411">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4425379795248654"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9815278214779497"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.11283094758524514"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8282994272522675"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.17018006903820138"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6783358241601771"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.26046321010373563"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.31741091529600673"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.09597957669478063"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7495959951600668"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.668670421630313"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.26128761012623913"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9787392705923024"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5965984020584099"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.2329415500102805"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.40563890561862315"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3326234860924375"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.423681183964421"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8867450777055101"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
