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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3252055109331886" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2875607967331997" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.972013101929251" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3825056332352075" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.24956412933006544" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8410621328648271" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3524335262297267"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.1793014558792947" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8337415022243171">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.34170099344815075">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.843245665468328">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3804743149117251">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9228963083487869"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.03005618349863526"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7999283258018441"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9911060588212643"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7005262980902929"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6386530313510967"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.22434594168912758"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.28535018261123324"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9392940402460881"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7028563071928473"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5346314661552283"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2282760149167744"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.19733566053237284"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7302651042236339"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.07754690743679227"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7901123033009441"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7342288952364824"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5895211581814921"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.037372606133217134"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
