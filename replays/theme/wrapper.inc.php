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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9859529412503252" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8421254348195837" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.38241091840491825" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.44467434643286485" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5905458364241558" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.08289265062227158" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6477260774833102"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2448332972202174" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2902967711791806">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6259318388778004">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7695754987351029">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5467111984226456">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.715732333158891"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.911945800169873"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.33777153874576493"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7696747155938286"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.23053403592594335"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.23590347283144664"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8865566130647311"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.50389067755874"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.19270793505503248"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9760293105917008"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8240727309572156"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9915171670716394"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6802487974175704"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.20023648473263989"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8723010132838167"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6152771048056604"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4484576210451028"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.25902291248341935"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.39651099825445435"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
