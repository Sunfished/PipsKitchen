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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8575069916468774" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.29980106097889214" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.10382992666295165" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.4258537568088152" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.588480100600943" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7518488447444027" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3888365278642887"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.14201039432642615" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.07527605657634351">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.28472393750451497">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6939929621572123">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4119598345066642">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9385883997175513"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6499878463013264"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.16312295192717774"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8353320781605185"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5067213166662194"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9874231408608056"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2543645186261281"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3700437412530424"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.09856605838018906"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8098283451113637"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6412385042114506"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9336074015446727"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5341665463490113"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9441732866882997"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5077221360704405"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.727278803652647"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6180667457763385"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.11906614639953617"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8848671180974736"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
