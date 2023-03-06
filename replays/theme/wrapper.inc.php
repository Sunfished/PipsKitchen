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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.529659026966391" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6415736563112333" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.1892243716147557" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.38643717329779403" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.80967505176248" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.713924539931682" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.20179537412695536"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5008351827816573" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.27485930442904727">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5840312633242801">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.020906548256726554">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4808531905296909">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7156737788851246"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.494306647520397"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9218850311522748"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5468384146071967"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6437726929785308"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.12045850693103244"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8070703095370533"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6788714516453238"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5756961033735908"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3023775162925413"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4522122954004806"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5157327329136727"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3735570499597196"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.43361374207463066"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6817242643542392"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3708585051149491"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.15934072097135465"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.47477043405647734"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.22346549129932036"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
