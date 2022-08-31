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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.49435211936168" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6268202761251114" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.030464511929476856" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7174840048366304" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4291992027977627" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9692032497535974" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.1939618160931389"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4857811582743117" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.005443131841746718">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9201299653887123">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9083883773515351">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.23575487703039433">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9800496316505036"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8133661851866336"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.011144775908600968"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8790127280594036"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5131493064130348"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9272692870482522"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7913376859676879"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.1538075211781489"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.35635932858143904"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6991830834161079"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5797958959192382"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.28288536471352765"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9696920086780556"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.48935267937667315"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9154750626318819"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9097960591071372"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.006343485400615023"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5539709798297319"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7567067509398719"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
