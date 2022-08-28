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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.03505435437090054" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.16564722183977598" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9532711313059654" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8870004701826835" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.23130621583013222" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8097490181377087" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7749560112691405"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8253303591062557" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.641290031840541">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9230114944094543">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.08399371704097458">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.48898750771481314">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.012444665425300316"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.27713778286741797"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5903950719968092"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.720397879248081"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2886113406523676"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5674785826407602"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7602287653028148"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.42578914707827176"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.07618817506517583"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.649260621845968"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4122854304718224"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.017268514183643502"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4306231755132959"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.27335944011463886"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5065495569335707"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9645911691346312"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4322834135533824"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6326462299039413"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.15113603041302826"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
