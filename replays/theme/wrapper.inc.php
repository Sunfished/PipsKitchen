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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4023699905678588" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7769910653949881" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.19608707160620886" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.16298375902094664" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6352063087240518" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.420720920231735" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9525801217906908"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.12036675527634122" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9924202053865077">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.500602409694819">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.46372461720362246">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.2495480521825475">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8867348033634275"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6145615883595641"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6079804776059139"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5158851756250233"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9103819088692322"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5980120841570886"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.19486919137729797"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.18128007958449688"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5690843528812006"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.09381194774241375"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8546870143164549"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9971216011544382"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.22829546033989412"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5239832713585337"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.630030407154923"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.20329726644775548"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7388456055892965"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.05965799391979765"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.048853605463030636"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
