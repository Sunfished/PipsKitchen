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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.03518001749536648" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.32495502648445496" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5551532302914011" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3789103907455369" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9690650808808059" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6046102064775871" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5212635880501229"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5333132255782622" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6953993737461648">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09365310402652494">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.899074347613303">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7379352213923807">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4280236024973705"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.13014625765673093"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.17129104170120368"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7756646629878359"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.28927739303285116"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3540899559048194"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6179587312966939"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9827478225380917"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.18173686188250637"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6231245149800697"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.845936705147881"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6926851227648576"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9169583932407261"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8143093043922263"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.780784724823709"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.14370074280040113"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.11357295430843783"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.002751853984214847"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9360716277827288"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
