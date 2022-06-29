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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.060075636365924945" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4865833353718705" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9020446041212764" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.33318255060272883" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.18257756396298164" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.12367789650934635" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.14857162121358636"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.10271491292595036" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.19230390222496618">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6930148126997213">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.557120449281777">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6976235571227385">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.41631714562364763"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9619503236731073"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4074159807596891"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1062564278215179"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.07859365985764244"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7120254903172958"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8481554367919861"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5272239342446725"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7490954250607385"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2461177139723294"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5855546096055202"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.0959624883104202"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.2255963928600877"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.746357991478487"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.765865118646627"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3529504692490253"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5415955879489602"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8244771975667802"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9803978965165179"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
