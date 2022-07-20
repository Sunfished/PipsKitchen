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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9602332160753646" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6186992245665006" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3896162547445916" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.10695420519881549" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9141357628837778" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6051817441054701" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6289536738383816"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9909094303185038" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7595755601587617">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8558356635178557">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5873099040227132">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7530427638097683">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.165867386809591"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.2698440177576622"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4534739383759514"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.46897378985172633"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5502285364849917"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.27247997423575554"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.20878374409270606"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6206033147973717"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.33032762968842744"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.31197184583746274"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5840454766461558"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5524479556847104"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.19155373139186116"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.04084226026394089"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.2450990703723941"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5256172056628003"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.14513678713406652"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9870143379191576"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5921038752988315"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
