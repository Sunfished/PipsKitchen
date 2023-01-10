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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.12502248018463047" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.696337813099041" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8172859267718258" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5541505732806598" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3392268466756512" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8869996332093149" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.24223036122463992"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.0907611596282325" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.11497833780956368">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6296860777660633">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4280713581436586">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8429463037432223">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4385300623809847"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.11684855557052054"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7455802948464307"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.03430910967240797"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.1824696774714083"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8809159733310199"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5647594181965987"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7510208717239448"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5940254669491201"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.13300424551623302"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8166244528557391"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3525211407040185"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.830627009074552"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6805745515290398"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5068002916601586"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3210676301803279"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.927361160013267"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2655913814294515"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4600113459625519"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
