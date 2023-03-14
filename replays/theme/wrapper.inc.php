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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.11697480608958499" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.32201605430497504" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3663419570459221" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9262592656166841" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.34758232914596743" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7558543033001406" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5158648628484594"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4380212078432928" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8676810460414262">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7369997588359862">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.21373716938813692">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.04671114773094964">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1197759080305707"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6169105212633423"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8448335356137617"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.005146177943485819"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.912672661570062"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5793394431135135"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.37520111999478756"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.0013961736581014073"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7882481411156779"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.08145545297152501"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9038985047762371"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3603282792058127"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9584944611490587"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.17903739433072197"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.17416762752113035"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6069823029109462"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5144468789360375"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6430835409281059"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.11791601462113555"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
