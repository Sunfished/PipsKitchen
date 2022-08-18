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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.657323757109322" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.876613505863679" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.10675958706153232" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.06876563031941019" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5257003960911037" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.44522105481263896" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.2693824412272654"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2369992777964296" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.739166590108616">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8616488413040155">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.2535687839969367">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.14474579386779585">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2042022131523098"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3710929526558706"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.34514369949835855"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.09669150337209587"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.24547988097120954"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6890037760415233"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.820138856422205"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8910202409893229"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5082791708190801"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3166685360892043"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3121228948739774"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2039435108960277"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6108904963794064"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.23666364921402816"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5658756718835813"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.740737804168812"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.16712665916749958"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7590059438486152"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7669935435390196"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
