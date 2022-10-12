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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8785546494067726" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.10257545565228576" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.06061434242020303" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7592644503331782" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4678505333689025" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9474802348202083" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9215966978347134"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7946499372154923" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.31540816288436635">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8916788695312778">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.20940631692152567">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3649931609087247">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7817029510443747"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.10896236381291935"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9937882635601623"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3204903265137262"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8783794998860481"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2712351045214325"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2809918980885049"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.2112002617532558"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.057860672098979826"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.12697530927770218"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.1184466109190474"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6191067251750757"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6750147551697927"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6779684569906785"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.22253468340678917"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6110112709505551"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.644145012116198"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3148750551449002"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9989932830274804"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
