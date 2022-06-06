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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6172277460297049" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2650418445102356" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6018728352197726" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9625921471188286" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5093495762497116" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2676910388101401" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.06638107733652587"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8669444963034527" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8450706104497394">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8429125335233072">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.2967000326227589">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7729280413537336">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.581254852425084"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6498876769558404"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9923696278599516"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6642063792635859"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.22156660851441168"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1613905112632288"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3617493274867327"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.799133387101864"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.15737542150249806"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4964487086016427"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5635509226021218"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5675999513438355"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9784308650716023"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.10484879551791182"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.2483683671895205"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9523876712445396"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.10874662899740639"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.00532411470683658"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.10805964523020761"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
