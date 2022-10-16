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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2687629774031919" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9533841684021234" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.13053090205264017" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.699065137449006" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7943741496488081" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.46739817320235844" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9782651991494777"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8618241927619785" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.05443241220256678">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6071230518351225">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7142988594116835">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.13864303324619853">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3944010666262683"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8138112536919879"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.1688819674766049"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3712105324555983"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.27545692898294827"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6295275356010601"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9144654337850748"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6583093273003373"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6968722273496393"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7430851035062189"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9333041769894479"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3719188048888551"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8076867457125576"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5068036393771964"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.42000676923790814"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.16335699144432358"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.18798726158931367"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2833885332839199"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.20720557011481233"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
