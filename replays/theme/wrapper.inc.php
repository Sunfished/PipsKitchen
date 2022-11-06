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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.36322553121858325" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.10144433770806316" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.20367842220092847" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7329716191017377" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.855474869022846" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7642261548899301" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.2646093792741995"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.24469360650504202" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8148604247321747">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5975829915947335">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.2629643730761422">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5257536607045346">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5916420606441817"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.0008958661213605001"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3651356446619096"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6701832966978067"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7467068777204111"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.47901242137876787"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9972390210092277"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7316701703921218"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.45498254172739117"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5396445119136151"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.10816513278281659"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.10226041624881499"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.0854919052212908"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.34813265074682276"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.1589930524607306"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3949629164718442"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.31236946692088563"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5229724268622822"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.664826199478957"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
