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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.369795544594947" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3262465131738894" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.4500378957521318" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.2225055807638987" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.08515517323224908" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.561019257941505" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6505933091380778"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.11337401908120581" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7553940391708318">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.24377928770203527">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8146152717582629">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5815048787026609">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7810108082618514"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.04371563723004268"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.08215270646759887"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6431967889066315"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6132588597568995"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8626391759679912"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2739491490843571"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.2152945613081978"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.50478111953531"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9952701669799573"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.16174964169295047"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6011194355104938"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.08276744453721885"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9183223730754224"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8883512156563751"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.15578105282577792"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7453113171639163"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.48442565146048255"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7393179533764334"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
