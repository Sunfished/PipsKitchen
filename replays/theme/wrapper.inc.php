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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.885644607657309" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6253903611637848" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.44290294673232333" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.15581738510864795" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.45011009542931313" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5779171917447765" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9317455358370494"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.44944716174045873" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.16975232539099983">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2888722501406802">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.37507093069868414">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.14661574945721756">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8601401568125615"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9125810936751568"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5595572863602494"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.36251535751979924"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8692246738191964"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9879694574694717"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5739264118070972"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6666267834070623"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3616995089042814"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7925465390225397"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5685048140399096"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4387138090723801"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6553507177220876"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3173485429564822"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7043530059323786"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5897048058017016"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7238642703335083"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.17742133272011618"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6562304738229534"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
