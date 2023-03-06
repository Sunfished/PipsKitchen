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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.11335665403343786" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.1908972453060045" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.4840748711541709" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.4212069664625717" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5861646561943976" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8113204475523039" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.07803503157338598"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4897499834924557" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9342826016787278">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.916550692604216">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.46911448128564315">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8766439495939811">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.39938270964537903"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.86515609695346"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.26738250218544923"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7834149978668667"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.005442804471798235"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4811071989841065"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3914591215942911"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5420153838912816"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.11919783822105257"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5014331434497077"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.32772800942603264"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9166739252747933"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.47449919591284795"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.1862095279953413"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8694768586529487"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8172131926003097"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7528788815803236"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6720680880915091"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.15689340448091182"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
