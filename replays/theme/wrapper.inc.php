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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6499819532838218" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.41343986396881927" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.1994861348719359" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5169104182034856" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.15334064514302437" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6534007807795139" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9518005194502299"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9630097907130581" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3644020969068984">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2863099437771961">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9834014101703923">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.575268522747586">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7874339376895472"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5605340999000954"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3406260096690772"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.08482370431556863"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.10039429143776801"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.620014616632375"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9980118835660559"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7864346097176476"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8495820683026334"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.49363034146418583"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.17357177069035568"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8082835212594537"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.12230968372619078"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.49870522974976894"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8773443105112178"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6470729385407277"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7677223094331165"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.05051331862637931"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8465586979281581"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
