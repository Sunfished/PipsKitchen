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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2893222370830242" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4816561553860601" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.1333266587416686" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.06544653031839198" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8502813481258618" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7163607469085294" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.4714052781370148"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6780556898302728" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.07277688738191879">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.48224565584794266">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.12475531838242726">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9004336009264062">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6619004384248637"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6629276155820756"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9623466686380822"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5928072669409976"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9880091685053405"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7526669108827826"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.24214828095429985"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6736023803876159"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9374786012095533"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7423267352979959"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2676906685534275"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5708972703001813"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.09795663491779338"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4261836885414645"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7292978534142791"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.23371290252166288"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5286340742368973"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5360421192496847"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5259031694423468"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
