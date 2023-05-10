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
	<link rel="stylesheet" href="//pipsbasement.herokuapp.com/style/font-awesome.css?0.8223451007079778" />
	<link rel="stylesheet" href="//http://76.50.33.22.psim.us/theme/panels.css?0.627851286285098" />
	<link rel="stylesheet" href="//http://76.50.33.22.psim.us/theme/main.css?0.9479405286618596" />
	<link rel="stylesheet" href="//pipsbasement.herokuapp.com/style/battle.css?0.48545911084831617" />
	<link rel="stylesheet" href="//pipsbasement.herokuapp.com/style/replay.css?0.17033322408955676" />
	<link rel="stylesheet" href="//pipsbasement.herokuapp.com/style/utilichart.css?0.9172701523928419" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//http://76.50.33.22.psim.us/?0.3438977716742613"><img src="//http://76.50.33.22.psim.us/images/pokemonshowdownbeta.png?0.7414217065489848" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4661952939870755">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6883526419456316">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//http://76.50.33.22.psim.us/ladder/?0.7346481659896449">Ladder</a></li>
				<li><a class="button nav-last" href="//http://76.50.33.22.psim.us/forums/?0.5981370905529038">Forum</a></li>
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
	<script src="//pipsbasement.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7632359147193788"></script>
	<script src="//pipsbasement.herokuapp.com/js/lib/lodash.core.js?0.6358803476720005"></script>
	<script src="//pipsbasement.herokuapp.com/js/lib/backbone.js?0.562283865342615"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9524934137850007"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//pipsbasement.herokuapp.com/js/lib/jquery-cookie.js?0.2409420318600779"></script>
	<script src="//pipsbasement.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5489667965767533"></script>
	<script src="//pipsbasement.herokuapp.com/js/battle-sound.js?0.4072339355031218"></script>
	<script src="//pipsbasement.herokuapp.com/config/config.js?0.0439013167997655"></script>
	<script src="//pipsbasement.herokuapp.com/js/battledata.js?0.7150053775253615"></script>
	<script src="//pipsbasement.herokuapp.com/data/pokedex-mini.js?0.7039387263403136"></script>
	<script src="//pipsbasement.herokuapp.com/data/pokedex-mini-bw.js?0.0767389613227476"></script>
	<script src="//pipsbasement.herokuapp.com/data/graphics.js?0.4981212430083295"></script>
	<script src="//pipsbasement.herokuapp.com/data/pokedex.js?0.6596435033709871"></script>
	<script src="//pipsbasement.herokuapp.com/data/items.js?0.6747841219848232"></script>
	<script src="//pipsbasement.herokuapp.com/data/moves.js?0.8511713582676979"></script>
	<script src="//pipsbasement.herokuapp.com/data/abilities.js?0.3341267261741163"></script>
	<script src="//pipsbasement.herokuapp.com/data/teambuilder-tables.js?0.5534797915599217"></script>
	<script src="//pipsbasement.herokuapp.com/js/battle-tooltips.js?0.8152793685726778"></script>
	<script src="//pipsbasement.herokuapp.com/js/battle.js?0.03831760063255296"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
