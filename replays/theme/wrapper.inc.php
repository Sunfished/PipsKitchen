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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.22533158147580146" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.1337822840468641" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.42821865811023896" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6363665970438797" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.20197021810487104" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.05440182829935991" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.1695259908429403"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3511275646308478" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8787329878867682">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.39469156978343856">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7991258247891786">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8558378752812188">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6867159271044225"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.17724530098238755"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.04587084482249937"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3010802771646581"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.28118217053637196"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4002534656884891"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.45135358815506255"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7530154982696273"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8937445094386347"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1410386562690833"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3334676723628709"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4957338644552287"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8562650608409048"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.32281529506157924"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.24718066623488055"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9981378998618264"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.18898760557171057"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6532537233421174"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3815090614080485"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
