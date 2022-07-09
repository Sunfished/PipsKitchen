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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2977842546372018" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3579774188192779" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.813976261763478" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.1963045268886483" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9155854025193828" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7732291360461647" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.34238844747464103"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5253074263134312" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5640626259742629">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8209812362751736">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.07507053831483801">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.43251844479146206">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6181639301095663"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7924033675170714"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7604504331425577"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.912539229688694"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7493963934988299"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.20369844249561542"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.696790602810313"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.14946599305846298"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.32978853597699254"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7131893358851491"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3822057857884882"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7557427986532239"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.16812772101976026"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8928612539908447"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5457531531264439"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7753287150393535"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4191872060809434"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7157156588752518"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1799050506539397"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
