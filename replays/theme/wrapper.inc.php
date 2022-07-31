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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.637269189865022" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5084354660961485" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7494349027222631" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.1801704261117465" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.13661071064042973" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.05466783098015937" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.412897738958921"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2881418678707981" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.23020542907521802">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7270306093623757">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7851765500109265">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.38937009158327807">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.03332145613059878"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.33581462449686605"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.22179036108603145"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5514372438673965"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.02070876240177255"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6482147190671752"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9838921257110653"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9908617305192038"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.33086136867143723"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.38838145624125464"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7444599314100473"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.030502540160283864"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7798683042615333"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4220711795620251"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.014304596931731473"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.2385217336311134"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.29119365856786494"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2192778958247672"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4967780176190444"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
