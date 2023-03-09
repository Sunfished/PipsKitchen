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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7148186456692909" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5735252842499508" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.02074195509269705" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5908776525727439" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5489684485471666" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.22323371606607423" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.03309103745431119"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9017051269970737" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.828251508367883">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.12729085343076907">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7124400450782855">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.1295374295974383">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5651541985109552"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.992435015543031"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5193494457233223"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6406853044898329"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6958091942787739"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8790982920616008"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6280842963134354"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.027764353371852346"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8750136233011718"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.650534898774731"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.11639313179014588"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4994575700814756"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8565921454540824"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.25063203495816766"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8269869428292191"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.2912146863841589"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.11746925449252377"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.04987696947485354"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.09038639346058264"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
