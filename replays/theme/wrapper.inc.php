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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6506802209655209" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.43091346406324926" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9736212724782884" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.24776812270754767" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7974087048498575" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.28146895545320394" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6946572316700144"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.21317217465792915" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3736582812547333">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2698599305874507">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6501196310049113">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.30901499668901455">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.03369461085440606"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4771900463723371"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4219700240338884"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7147597823448992"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6911099450967197"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.19821574755892502"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.039900724027564616"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5867762187231191"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6668422476913776"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.24788546746578777"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.1250089061279589"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6770728463913238"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3905914941164732"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.18928742355669237"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.15330594252697693"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.12558438974595854"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.781824804487617"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9755796276659074"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5224520806901731"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
