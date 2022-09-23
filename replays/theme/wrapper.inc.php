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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.19766786722774654" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.05839171602056625" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6991511055149555" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6215408011708028" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.717675280930697" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8036634796738635" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.4682245318997489"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8143514888806191" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6042453334871944">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.35447860528391395">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.936640165671691">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3717822927683241">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.08335586159261243"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.272015817392697"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9558168222508416"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.37239717612020384"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6477691001225978"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.030943154085941504"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9338131310394173"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.862611198888553"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3146766886726049"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.05487340797635598"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7925579046854356"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5638548530143108"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3126860906809761"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9971072967581802"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9179960807373637"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7388740374689584"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.009451666985713425"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.1439085731305696"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8317578967296069"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
