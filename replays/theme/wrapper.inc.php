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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8653305548536276" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.20845891936420102" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.012741913830980778" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.499403391859915" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.391403686562378" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.39500695418393894" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8462068855536127"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5333414325566663" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.33962464651563007">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9359323018608816">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.692614320737611">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4546112021037585">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9152721387243798"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3198742642073904"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7115470234051464"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8748958372705873"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6029572428770771"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1487919556481332"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.07368048213671097"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7509742923798517"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.244353642889082"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9715161351616317"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.29924661416535425"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.022968136616799972"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4061784960815982"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3116203760073861"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.51478513142123"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8860044697648379"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4285191356513822"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.12679561185305976"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.27892423171114245"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
