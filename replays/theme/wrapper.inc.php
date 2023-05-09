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
	<link rel="stylesheet" href="//pipsbasement.herokuapp.com/style/font-awesome.css?0.13254442212988882" />
	<link rel="stylesheet" href="//http://76.50.33.22.psim.us/theme/panels.css?0.04127711898454178" />
	<link rel="stylesheet" href="//http://76.50.33.22.psim.us/theme/main.css?0.7554604905208404" />
	<link rel="stylesheet" href="//pipsbasement.herokuapp.com/style/battle.css?0.011923287518546433" />
	<link rel="stylesheet" href="//pipsbasement.herokuapp.com/style/replay.css?0.9335682599749557" />
	<link rel="stylesheet" href="//pipsbasement.herokuapp.com/style/utilichart.css?0.7059859453151753" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//http://76.50.33.22.psim.us/?0.5367414742411558"><img src="//http://76.50.33.22.psim.us/images/pokemonshowdownbeta.png?0.060185813673951705" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.615321887442938">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.05906362736169668">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//http://76.50.33.22.psim.us/ladder/?0.19219334593920934">Ladder</a></li>
				<li><a class="button nav-last" href="//http://76.50.33.22.psim.us/forums/?0.5504136918073641">Forum</a></li>
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
	<script src="//pipsbasement.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6286720173166374"></script>
	<script src="//pipsbasement.herokuapp.com/js/lib/lodash.core.js?0.0672911690465341"></script>
	<script src="//pipsbasement.herokuapp.com/js/lib/backbone.js?0.9632408951291904"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.41970748308547456"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//pipsbasement.herokuapp.com/js/lib/jquery-cookie.js?0.7835668723284912"></script>
	<script src="//pipsbasement.herokuapp.com/js/lib/html-sanitizer-minified.js?0.32024430582160024"></script>
	<script src="//pipsbasement.herokuapp.com/js/battle-sound.js?0.6457935852206984"></script>
	<script src="//pipsbasement.herokuapp.com/config/config.js?0.5805585832390188"></script>
	<script src="//pipsbasement.herokuapp.com/js/battledata.js?0.8812515513644559"></script>
	<script src="//pipsbasement.herokuapp.com/data/pokedex-mini.js?0.6433660768477016"></script>
	<script src="//pipsbasement.herokuapp.com/data/pokedex-mini-bw.js?0.0624782195457112"></script>
	<script src="//pipsbasement.herokuapp.com/data/graphics.js?0.5757887624995481"></script>
	<script src="//pipsbasement.herokuapp.com/data/pokedex.js?0.36994406682173797"></script>
	<script src="//pipsbasement.herokuapp.com/data/items.js?0.5766742669271259"></script>
	<script src="//pipsbasement.herokuapp.com/data/moves.js?0.35222644696420047"></script>
	<script src="//pipsbasement.herokuapp.com/data/abilities.js?0.9302261060370756"></script>
	<script src="//pipsbasement.herokuapp.com/data/teambuilder-tables.js?0.8486711295737983"></script>
	<script src="//pipsbasement.herokuapp.com/js/battle-tooltips.js?0.7264490791590392"></script>
	<script src="//pipsbasement.herokuapp.com/js/battle.js?0.965763997065413"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
