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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.11577178858251025" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.224701555270149" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.22164286514583087" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9038107275769098" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.13715934602264102" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.31503672378790637" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3566510868106809"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.841450436277321" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.016933623908150564">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.342825593891648">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5199874446468897">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.047493919247076466">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.017365521415282803"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8453739658888761"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.022288781439138372"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.46059890474040555"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7499325050281647"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.30589062178638127"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2771347422521955"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.10264278341921362"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.48671819277887574"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8839260957167034"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.662824060534962"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5644509622831253"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.1110123571604571"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6149641356798399"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5505137508357394"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.24901046522265702"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.08815355866724883"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8847532027014471"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.2882646010945955"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
