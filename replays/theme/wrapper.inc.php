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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4103469197236831" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7220013185030723" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.0621883711766138" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8155812509197842" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.19708978260754173" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.25684936507064293" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.018741901718198894"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.18601839736653836" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5272184226878291">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2523934738521858">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.05984685254485256">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7189068755917865">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9521369062845042"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.49116149080804594"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9593161920020423"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5891719008700458"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.05395691776068334"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.030599190313199243"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9589965341247726"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.13618455107114213"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.33369654519173486"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6830971061401019"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9461437508077162"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9639942246166464"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.98329567875664"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5726266651886296"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.401285178763817"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.13702283391943482"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9808870249872119"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.27585072749718487"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.03633078410696533"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
