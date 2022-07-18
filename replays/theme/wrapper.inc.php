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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9745051360281509" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3780458653746539" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.374744626842082" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9517643212131097" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8744004310891775" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.16871798378891945" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.14828560553700632"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.23381915181474722" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6057326222014427">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.26008902600683026">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8455249080148242">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7382197557505406">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.49246574687575206"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.673650077831452"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.541689079622552"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6148793379268107"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3435702622822028"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.931209462227975"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3115855410356674"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.24674554101744905"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7118664713680056"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8894575138791563"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2652149304823832"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.17015272930653547"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.2811075670699619"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5367929810072287"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.2686763454011605"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7832171941048505"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8463064827389646"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8898863736121241"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1079923067252544"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
