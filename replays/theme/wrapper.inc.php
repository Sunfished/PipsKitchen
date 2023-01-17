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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5043106216831368" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.41544664379604757" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5529606821048059" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7167774814491543" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3649305587685343" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.08779203725010043" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.13345055712200637"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.554336634335886" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7748312249819995">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4827742800797108">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.12793512504921578">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.008506458940390482">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.703536938395358"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8838377392183787"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8201908504741169"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3890295402022652"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3026865716455196"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.23027814370328814"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.058324393527505736"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3567005914182604"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.2726612167678635"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5740973411113737"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8670247843257823"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9538149512960514"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4584372474424827"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.28886518278570583"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8428116941025416"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.30619416401056854"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6026002186780679"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.32648283601648553"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.740672165667484"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
