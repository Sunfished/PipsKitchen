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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9294636264018958" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.885272363518347" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8603253157018684" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.360993192977515" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.20245918049538303" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.37960088931845637" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7668487535152138"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.08578010673279013" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.892374898233093">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9825516986020082">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8866080031777859">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.46495979207913996">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.70252372611132"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.283055967027819"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.15941427060512003"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.716308575077699"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.24517829778220812"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6221859561559171"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3350652401660481"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9682181167227164"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7030828082472205"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.20274501656082955"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8627592757251139"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.28536887756361784"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.46283661000071263"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.020375278907219352"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.3294255915645887"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5467825953886998"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5582586905341647"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.050865773152421356"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.756335885469495"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
