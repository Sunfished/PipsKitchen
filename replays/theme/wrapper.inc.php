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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2680610248839794" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6513659768081299" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7353921376099457" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3424339654530879" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.38519365036166286" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.16394103914692826" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.19362705711256734"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.990981447440342" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5143520010415978">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.49957501980042074">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8540660324158076">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6961815466503576">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.11363261451302908"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7943090668276482"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7038714152009926"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4915518773220495"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8665216063137251"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8016973050514249"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.04107130804182546"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.37851067229688673"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.10553281818592586"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.40794182734132156"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9597074420990479"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7212395842123394"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.22421830353086847"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8102603324951958"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.3048033379246404"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.32995674995417"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.1748811261396923"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.46279562207373837"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7865713331272279"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
