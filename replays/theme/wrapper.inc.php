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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6178248319014883" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6420322309645039" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.11195852181970567" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.08476265392928894" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.45630019800276056" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5533038288239625" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.613003420456049"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6195913030916993" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4175173531151024">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6015565905254703">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.16040001533558312">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5981019930569238">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5119933127487688"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.41693668844636944"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.2818564928791789"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3977057073715886"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2960467814666279"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3671745601577905"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2155056153969026"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6252952566267873"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.84261503841467"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9879525356455607"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.07216384687974964"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.28779729047939906"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.41333904211383743"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9833867381142392"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.1051582733712435"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.39126116293002866"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7796455292644855"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6962152801062564"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6608909203749538"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
