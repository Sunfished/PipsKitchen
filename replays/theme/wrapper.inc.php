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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6051319726563027" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.07845886429580795" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.26359865699390905" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7466635593658475" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6303971247974611" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.358802947038263" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.1269420211975698"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7897193066581956" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8724111565432908">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6822186391086045">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8277604142705608">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5785950316695323">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8721487041108735"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.49718751949766515"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.677116996298248"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7545791953968393"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9163118036973346"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.18136024746268298"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.837914117843193"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.2479150032651054"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.29912503315029015"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8292606657750696"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8467734158610998"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.18143357475879873"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7630963576638832"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4677640919529986"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.04655238942298667"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.386777653981613"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6607963748988415"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5081452467702836"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4055594564098768"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
