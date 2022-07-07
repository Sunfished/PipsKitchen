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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.899221524727404" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6834263149329147" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.16856460453948086" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.4131964352372186" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3066339551578523" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2513920552510509" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5366093551194158"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9307294074682002" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6674585108518116">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.11179701612194748">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7460619251897078">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7296071167302893">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1933570156210782"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.2565916525634868"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5058834484399197"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.868862762239164"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.0624391213358757"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2508967601086556"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.755370444896623"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.07582957393038892"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9657555991103621"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3598733807203305"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8221095173775717"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.14546628827598185"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4272387745286126"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3746578803028511"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.05468943561965145"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.018732706612738292"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5734487287809777"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6420024867915035"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6784740216820424"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
