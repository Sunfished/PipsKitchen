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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9689539824225737" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8136914888856368" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7290886132519934" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.726275065459987" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4550374109347919" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.0712034551733618" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.2580049206946471"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8810288541677422" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.13220340124055818">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8377715452431602">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7799028381849287">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.07714319339746512">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9878132534088324"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7060368488898763"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.30884886128317324"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.732957512164006"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6076061051567914"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.21142579152200547"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6896302835809256"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.1604494674700745"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.30249557872728894"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.014033604393092203"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.653285016237346"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.06850680203183424"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7578633375069972"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9691473448485661"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.32659857417949456"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8258843985031605"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9350064320788838"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3107677045042785"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.44277880412721426"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
