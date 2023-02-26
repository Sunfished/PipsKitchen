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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.006897964836448445" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.31477399347305113" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.014779129345128927" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7628648952061454" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.14143751781161185" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9375696291585984" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9940903383784527"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.721795763237822" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.36987520383837924">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5582316408973087">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3350922491237318">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.0018757411060044138">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.18045550375251596"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.152296547174547"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6667600434710848"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.29785344006899694"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7159426592854816"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.31066306892895934"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2868826024910536"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.445968443928461"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.2116482320513322"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.19342332589526778"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.614056063161798"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3064429623876377"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.552652283679407"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.25313192781452076"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.45679112955981793"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.012691642628582356"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.32391526044312036"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5510711505795127"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.13995694935644432"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
