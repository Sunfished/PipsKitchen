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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.04939411918382297" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7282045848236103" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.2868371008097972" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7583904495116056" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.22931917849777084" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.25417670304986606" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9361158106483243"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5677514373902515" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5163032984440716">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8414379070093827">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.26908208041041193">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.888598852299016">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.681407456244963"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7145950775086167"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.38217204496505586"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6852820479970947"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.0356936192182713"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8162608699562433"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.19758283126050746"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8289228930780894"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7687024038339032"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2835972720717508"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.25945017404489557"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4990186045418785"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5088532863025461"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.23718711792695601"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.28361439257936905"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.550109621576621"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8656268240025764"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6349241676508135"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.604468333384913"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
