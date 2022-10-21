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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.0774751255619579" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7271850598190914" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.1741862918325543" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7642394700575048" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.007463328007601522" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9606182834383661" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.34297235487516375"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6021274589061985" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7161217307360137">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9581346326715421">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.42092968982184775">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.2519473875683147">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.26275711179467676"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.40232388943900443"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8501954060571615"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.13242001773106127"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.02451956180213033"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.39541414501105665"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.47232223841473986"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9775909071625757"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.40125678669206866"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.57278013897724"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5569059227280138"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6728477105778814"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.816410655007566"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.21835163741011399"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.801025887932769"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6939587943831576"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8679612439696878"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5123218208069598"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8620895751027517"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
