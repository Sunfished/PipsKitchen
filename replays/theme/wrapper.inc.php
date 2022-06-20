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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5949947346683682" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6205467897648069" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7157337301030442" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.28162364754482616" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.48466771989750956" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.133330832313177" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8211025651567008"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.32114334504186304" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3821203568210729">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8981917901167886">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3388720541212671">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5617177769951378">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6105926359365266"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9239250416960723"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6000023974637327"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5002627321784232"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3544398859165223"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9760043786202772"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4891413293661553"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.2985884885187602"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9347903570276594"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4595377252448012"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6946585379760191"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.01793536585759914"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7719961930481358"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.19681083566082802"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.012189144670763596"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9593151532632704"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6810256656548834"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.1167922346579251"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4361699652384228"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
