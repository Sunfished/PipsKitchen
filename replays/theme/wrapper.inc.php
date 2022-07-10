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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4425589338776821" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5514414948213939" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.4470080798777103" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5664083279044079" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.34570249685334264" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3402130149324891" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8697246097754336"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.1859418927484826" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.22986469227129125">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.38976233756504963">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8055328834604207">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.40843650954602495">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6011842784342434"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.429202987128934"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6420107262049723"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.10236857252011178"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7699995615711028"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.09395334457689919"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.18189489259955893"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.03377559698200594"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9688443980177313"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.08070813307604663"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.08317160322198314"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9322533529699872"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9041196240987392"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8639540471783007"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8154925008356411"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9403231131456042"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6380786314331399"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5149155632565545"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8723895549126526"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
