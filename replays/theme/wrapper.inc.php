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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.05473937324289002" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8422766062399902" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.2683152692265267" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.2085160791434182" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5644641971766853" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3555468315693817" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9525051379216734"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2980220190238616" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.39684746882244193">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.438761872032545">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.008613716785375036">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6181911137678955">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6994050962261986"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7453700991417673"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.1637395788974767"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.40300618860310844"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8957721793863946"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3001643189598593"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.16369646807758254"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8078478183319742"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.04837583530245215"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7130061928959692"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.11187728041552103"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.07567915016909232"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3632687716806329"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5576202577805103"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5239273701434874"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8874102736835756"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6754675851662477"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3838118526754912"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.03041598637945997"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
