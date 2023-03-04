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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5414815968936906" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.0997273955957847" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3877466844171651" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.929767797121938" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5767723465705956" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9429383933426079" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7165621322121738"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.40976621906639665" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.23361574315776967">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4107661517620931">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.2069437979146762">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4682116704082804">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5715492747109514"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.48203809508980666"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4979507430945431"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6160938263187403"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4421866629030864"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5714030856260641"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7115992705211263"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3168606112921184"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6555958096356227"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.28931483479405773"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.45727653467801743"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4626986130386914"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9972947818128968"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.1222894892339843"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.715262215169705"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.35063719078287914"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6871669596047005"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7432639936150791"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9970388331299147"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
