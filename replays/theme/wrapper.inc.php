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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.26847046538934105" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9589448120285444" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9880454899826425" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6801193540771711" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.12449125069952105" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.36048947905457074" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3510123613749745"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5576904468875066" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7620415780884047">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6858343939585732">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.010781935542264476">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4531156861621073">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4085997462466353"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9151021172923617"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4956964236779091"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.08575719657108971"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8743732817365675"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6818749181365824"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.45752442091518586"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.25436861565896307"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6724732630412973"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6363962068350173"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6057767373745391"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.22968495040968695"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8426203087095354"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9298802630319214"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.12084128304238284"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4888030950707867"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.1738506924812966"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.17583137593494502"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6353848740303072"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
