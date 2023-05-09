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
	<link rel="stylesheet" href="//pipsbasement.herokuapp.com/style/font-awesome.css?0.4635430933710407" />
	<link rel="stylesheet" href="//http://76.50.33.22.psim.us/theme/panels.css?0.2645304041949381" />
	<link rel="stylesheet" href="//http://76.50.33.22.psim.us/theme/main.css?0.5908532898478354" />
	<link rel="stylesheet" href="//pipsbasement.herokuapp.com/style/battle.css?0.07049283708659826" />
	<link rel="stylesheet" href="//pipsbasement.herokuapp.com/style/replay.css?0.3822322956116553" />
	<link rel="stylesheet" href="//pipsbasement.herokuapp.com/style/utilichart.css?0.7795611267270093" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//http://76.50.33.22.psim.us/?0.32686233050074764"><img src="//http://76.50.33.22.psim.us/images/pokemonshowdownbeta.png?0.35054621729296587" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5760715722157268">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.679848241064783">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//http://76.50.33.22.psim.us/ladder/?0.6175903842842854">Ladder</a></li>
				<li><a class="button nav-last" href="//http://76.50.33.22.psim.us/forums/?0.027105953021630436">Forum</a></li>
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
	<script src="//pipsbasement.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5681053444370383"></script>
	<script src="//pipsbasement.herokuapp.com/js/lib/lodash.core.js?0.09912795526731011"></script>
	<script src="//pipsbasement.herokuapp.com/js/lib/backbone.js?0.24660798496710168"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3530715089931933"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//pipsbasement.herokuapp.com/js/lib/jquery-cookie.js?0.4946456085353721"></script>
	<script src="//pipsbasement.herokuapp.com/js/lib/html-sanitizer-minified.js?0.617075648732266"></script>
	<script src="//pipsbasement.herokuapp.com/js/battle-sound.js?0.6108492013179201"></script>
	<script src="//pipsbasement.herokuapp.com/config/config.js?0.39433138324751593"></script>
	<script src="//pipsbasement.herokuapp.com/js/battledata.js?0.9830214992203592"></script>
	<script src="//pipsbasement.herokuapp.com/data/pokedex-mini.js?0.0018349435079327847"></script>
	<script src="//pipsbasement.herokuapp.com/data/pokedex-mini-bw.js?0.44927043135262856"></script>
	<script src="//pipsbasement.herokuapp.com/data/graphics.js?0.5022261086468831"></script>
	<script src="//pipsbasement.herokuapp.com/data/pokedex.js?0.4510980252704264"></script>
	<script src="//pipsbasement.herokuapp.com/data/items.js?0.18692384482812008"></script>
	<script src="//pipsbasement.herokuapp.com/data/moves.js?0.9760834748187908"></script>
	<script src="//pipsbasement.herokuapp.com/data/abilities.js?0.2271045353723482"></script>
	<script src="//pipsbasement.herokuapp.com/data/teambuilder-tables.js?0.25233036436070555"></script>
	<script src="//pipsbasement.herokuapp.com/js/battle-tooltips.js?0.49318671458329955"></script>
	<script src="//pipsbasement.herokuapp.com/js/battle.js?0.7164354965526301"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
