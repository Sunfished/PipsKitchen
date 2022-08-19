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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5615782953101289" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.748013441205484" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.25314538946336884" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5529499585931237" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.973890209600959" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2866192150416156" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.2847713199037396"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8570544546797616" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.19601984400512817">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6376368154122842">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3210556223685539">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.11774372270260147">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6946738947931668"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8909402247057399"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8826669101632862"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7633766860498719"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7351700806445409"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.23309973113089"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.20005532572195572"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5973740296744445"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9642683700682058"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8266666818373221"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.1973718516469729"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3371785541380534"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6474576897023263"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7294611080198168"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.37282052657083553"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5413204950151866"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5462098560361865"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5030308372828634"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.24856927464304923"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
