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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6416167572449125" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.37650908079191825" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6062081302844606" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.29841348119632327" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9445113123505431" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5536480173833784" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3835287235530134"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.1861244142942129" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.221107895052296">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7129295625451968">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.08439154713940211">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.036802490452037206">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5512549364617116"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.05451637948933885"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8636036356886263"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.014642694670543799"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2591789499626702"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6674175165788772"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7388351362431689"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9969214092882728"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5936591429205853"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7061569523260793"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9369123936154737"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.18415909457496205"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6321036076071476"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7668243994600907"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7188355762531917"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5668129833968079"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5623273434676399"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7768477016097282"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.48360743508649917"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
