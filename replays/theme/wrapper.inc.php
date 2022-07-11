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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.21543767005114356" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6721125648783928" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.28285751643200197" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9575100026447247" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5359454398383108" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7346427143737484" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6883582496558798"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.15439428933280563" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8580435868764771">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.75306263421604">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.705024204734302">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9361118800333967">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.18815784712615913"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8690204629498635"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9291558282245929"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.08867599306979645"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2667460139625355"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5868900738501837"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4064000521296307"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.38982291425901927"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8563567180982408"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.15677017756949807"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.23975799161525368"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7452513778299679"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3112383838835957"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9118441455275128"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.21119803973590345"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.008908970849412112"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7170745747951179"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.715918661363961"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8042907478261359"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
