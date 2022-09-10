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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5241169248401283" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.25834029597821306" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.4491774695693018" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.637508342007058" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.10464153207309623" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6555203339849274" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5231312778529931"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8659918306119787" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7507336849420527">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.64894410764199">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7767651829835822">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.888347686999335">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.039693854563033204"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7401613389245321"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5745994021617606"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.485228338432075"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.20228277002687522"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9050712177081104"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3157792709188376"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.043028323168829985"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4128972526641659"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.11057645035686381"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.19937339749417693"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.11359717804633163"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.1023152117556203"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5164913549618049"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.1904358485657771"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4219190892656115"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6740904973478012"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7686477919735937"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7541477276696229"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
