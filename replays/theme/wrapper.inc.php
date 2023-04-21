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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.06122275725160753" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2301880529940219" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9070314008040357" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.15436243515169434" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.2869111927068" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8125903303490882" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5339951597949042"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7049562841678847" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5911594236345996">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.660473053450745">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7614600642954108">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.022095850821528762">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9161277030364292"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.17461499739997532"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.2204879514271112"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.11477494688661238"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.36195200389364546"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8626721636705039"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6645778614646471"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.30383470430743587"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5029353383760553"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.060339660606243184"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.24367352660023256"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.16534007864659594"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.1147927089220766"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9372458275756232"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5914283273377241"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.043328219848703275"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.28864536694289966"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.08979169468432624"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7246171117741458"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
