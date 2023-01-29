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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5074365270665835" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.00045009589077027456" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8247425941958058" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.599554573307918" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6825299136769369" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6505192002775408" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.4087154122894112"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9130776112850514" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8862509001045351">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.16010417213454775">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.20636510792600737">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.32140628175580743">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7078802379044873"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.019388781640084618"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.1802917271394031"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.39197806200815677"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.0858444420281772"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.016606147345087363"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.663837518675592"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8005516981969525"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.739083629198054"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5364624227254373"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5618230978483689"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6341210179161341"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.23399664013641774"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.44239877581221076"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6752914071439553"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.37240308653292664"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.734670437685164"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7806670836274516"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5243448009457052"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
