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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6476310029637862" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.20678879366816028" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5941739124841232" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.357810493302096" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7787851117839759" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.39580070673490475" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3284091903470385"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.39208177715555337" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7481160833439615">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6978974833381573">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7491238950377839">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4395163645601756">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.106357077356517"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.1428754698378758"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.1597973216579387"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4139343973012777"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5686929004916395"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.865811842391659"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8925791572259283"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.0007654694345529123"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.09988558158568495"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2893984707593231"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3355557948285117"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.08229506522500651"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7902995993618265"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9684720228797143"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.25895971058329326"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.05621096294893202"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.15465181122929494"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9305121636762894"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1195540238299635"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
