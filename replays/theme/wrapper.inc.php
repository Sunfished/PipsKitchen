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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.31933556131327157" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.10756149831674411" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.12761502462235796" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6738206853003141" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.218173590980973" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3263066747115464" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.2671859414341682"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2599739233905083" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.34040597910496584">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.15062859056147215">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.014214568787629167">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6242776787779816">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9623200195672819"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.32415941146265337"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5243811768506008"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9935358961118945"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4755140551695838"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8075800283673342"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5377662473721141"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7596018935509667"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.756909911569364"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.34554223519246285"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6900716019325246"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.920557977377432"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.703533760788305"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.07319453966868172"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5740666633072526"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.44968139535371465"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.12834844049093075"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7337554581798453"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.20838542949950511"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
