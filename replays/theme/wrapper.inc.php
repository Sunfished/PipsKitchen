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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5666179163020706" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6898329550984919" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.09683409024584755" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.4972381401318098" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8604875485329688" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.05009718975893085" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.1803208583481506"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5030322830352998" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6066233169490651">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7414950907104974">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.44329265872243373">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.83820725709229">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5085164484354512"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4575693763791566"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7419937006167245"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8525121300159575"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8016527495135377"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.996444214167902"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7096980249065625"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8603829848472664"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5367876144702501"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4232678680919275"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.49125893085685846"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.587216798120967"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.2855613988541177"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4780485207017384"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.2713115765061165"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.669300506012569"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.2258114628154666"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5665767209482464"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1038379307440247"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
