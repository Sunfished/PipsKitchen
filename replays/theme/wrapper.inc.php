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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.30668909625155427" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.721542798548876" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.20728990581962758" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.06253452489534794" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9657586599520838" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6806003195271704" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.09914532321565939"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.41058407643519956" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9401041869260502">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2707705334320982">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5145130410326588">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7448434197730935">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.05454840554706908"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8243035526779463"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5638637909039761"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.08385554988354804"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.35177372355880077"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.43165303858892634"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.003390932606917696"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.32280459859896005"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8439682174704057"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2594234686199115"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.43020712783185133"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.819874762398795"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7466790680323481"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.19087628931515632"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.032570186852995064"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.14195312413511219"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.18904460798628264"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3378398727192473"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.0796382960298363"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
