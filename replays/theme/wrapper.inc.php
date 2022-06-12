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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.11597018774247925" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2689654841485434" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8428338238319195" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.11809677497291005" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.1530495802112961" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8240291978697312" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.971404081880513"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4320983014832245" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8952988921701848">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.07155032176327358">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7856664947509706">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.31033212878162364">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4898956991839014"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5906343037130917"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8197216072643538"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.20174568393702375"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8327172060096029"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3058142255773264"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8242512086422809"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.38799941451057873"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.04971536850587288"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5121233374584098"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.30464038362703727"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.32471342281205295"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5692119074143622"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6379514195852887"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5848422829862427"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4121618715209534"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.16973934662972812"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.82211143547236"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.2641926680875122"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
