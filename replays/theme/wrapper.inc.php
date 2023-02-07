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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9518630214343806" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6907166644424665" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.11534576070135927" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9624810643453829" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4007578554919806" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.49330507903559395" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9182457866900742"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6771042607977396" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.34877218261967347">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.21174118023787836">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.288989800273173">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9403804016536492">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.24757963705409303"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6470982332065853"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.14969691476221603"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.48190045014622496"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.41440131845820694"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.17908480603989108"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2968610581911113"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9050551064248422"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.2731678381690217"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.918013845274398"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6113171812971274"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.016426736156159416"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4771349292387681"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6495024973209915"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.612529069502805"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5068559326649416"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6819414736751397"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4616290747648941"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3218494108190306"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
