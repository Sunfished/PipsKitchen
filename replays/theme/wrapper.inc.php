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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.696306328728487" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9758017653060838" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5877038082051134" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6418202873092522" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5139984719733837" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3602895121454124" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.36076611464850794"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9959654801483719" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7871115706744352">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7677898351002401">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9937111080764991">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6452351360353137">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.21533363146192763"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.00012964849530150424"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.810671445273951"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.23847817748326428"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6455991676799324"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5294668822361037"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.11498835665618157"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8294240602729961"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5373279157592263"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.832958165977983"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.27524937445649145"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.13358541646618916"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.051192451906627356"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8526518295677887"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5363239487951155"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5067976502299509"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9282311076848553"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.22912613614929667"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.09126147643119542"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
