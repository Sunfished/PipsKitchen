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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.10004158898452165" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.15963337963740054" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.03856292023319119" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7997343455090984" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.31440908699254067" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.539045701372449" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.385108677244578"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.16321000579189215" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8005339539116985">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5483373894681944">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.48914459232885465">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5030106835228372">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.48323065335106663"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.23916349107801516"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8582494991038554"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7078440579259349"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6590852468407424"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.898164268762359"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.15137224439179575"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9874152242721035"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.007598144917126071"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4925566330466773"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6272485104757868"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.46314998348676184"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.730189374150535"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8853452423806356"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.722439989785381"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4813761866816637"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7303649751483514"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.10552702600031538"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.2939704557558571"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
