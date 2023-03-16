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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6162871395158287" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8587572214832437" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7755151393857258" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8064441472174291" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.571321917103133" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8703817738574007" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9583584935274787"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.04445506674313848" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4711527259398389">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7166391334204656">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.2525453042734842">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7783531176705412">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6197860358786793"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.11233058812277386"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.41233026045260845"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.20148399791564064"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8363720830645551"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4426758982504586"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9842726423927899"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.519019252832158"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8480541288101076"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4190702692367261"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.20776099315418928"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5749430420268862"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.44269035352920194"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.25420828322406175"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7177010215759041"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6655165389961122"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9995647529276301"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.08074703863496135"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7748819799570634"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
