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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.37350012866892923" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8277091941544337" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.2726047978214874" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3175579045907919" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8607237082223793" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.29229578736835404" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.24110265597694602"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2873944337363177" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.11099343386084093">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7768396824365271">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.029341919912391212">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7140987476219098">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6646902688746927"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5368905764038321"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6534767765894969"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.287498522379791"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.023922671004565688"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2950725574329227"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.11666873855584203"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6551616126369053"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9387984621351875"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4732147673076019"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8997976105472723"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.554461726243539"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8868275325203434"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.15869680342161252"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7221564592184722"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.0646026735028149"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.49082074590986036"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4993281452851619"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5123351222681667"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
