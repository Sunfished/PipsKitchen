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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5753701198835157" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5987081574284121" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7757029294079303" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.14391261107787034" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.11188363977832494" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9868740759862413" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.1659798372901935"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7276820450048662" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8668007020934843">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7360185216029866">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5909508423750236">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8317847250963983">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.28310251788585017"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.07955319098875169"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8053142512468141"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6965855845038071"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.19926563625871174"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8534391350890498"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7438657689279327"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.09123068456727057"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.24739200919130133"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2679667978493192"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8574063334138717"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5277930614442881"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.28181863775332716"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.24802791340073638"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.51442813357097"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.34735225333681896"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.01396797262457139"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7737856644262775"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5167359420103919"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
