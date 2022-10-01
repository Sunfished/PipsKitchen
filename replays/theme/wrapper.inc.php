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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.0867442238964955" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7622266208788284" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7832249540744181" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6466612434809644" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8528390784511446" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3402078341748458" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.10983378503103336"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7015901769382324" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7801999339099119">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.49406195169039124">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.16320580990294142">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6008186109576703">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9280831057665617"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8797946671909791"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5262964414864151"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8602803627618603"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.18178468385546842"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5544828769066767"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.912553345272834"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5926420632038081"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4734692606708413"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.05625222664974272"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.836283401246555"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8717497621450043"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4499296518384246"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9422169165647911"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4355901394030939"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5136006017217916"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7492522388766438"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.22446763783775392"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.07441193876117902"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
