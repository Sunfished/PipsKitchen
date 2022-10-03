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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.12313605619866586" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6707691019404001" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.986079011282815" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9497433476979045" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.09980572329564841" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.502142478774906" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.2979979316177004"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.35096211224525664" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4198481435488519">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.058761148556050635">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.16214255148187906">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5559659790507039">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4888123101327131"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3471527899064033"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6635968145504099"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9900060949422089"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.29800475801006066"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3792444244853712"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9472099389539366"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9975821282927433"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.2996720381390454"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8887703792732466"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.48153601049236383"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2585964030305856"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.2113989663349447"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4835420920939104"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6236400392111627"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8131662850581574"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4019036485960499"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7185589080829917"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.21144782341669965"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
