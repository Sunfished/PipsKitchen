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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4697437499958308" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6219252664231507" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7427678524129955" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.4751338179671061" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8647320395596261" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7686167211377894" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7995930710624863"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2118382744033418" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.570152690395519">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9837127160758841">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5953597958584043">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9991341365868578">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8769404328507322"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9785007116286131"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9936177601877616"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.01832532909296103"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.933880935422938"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4511812441683314"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.06719870010043616"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6549005234061054"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6889584096128372"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.03596617225597076"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5877602319772623"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5851719428610234"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4300749812460183"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5764399060378615"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6681420013843553"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.06024494393000479"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.968219080812633"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.305154408648205"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.44937524701834275"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
