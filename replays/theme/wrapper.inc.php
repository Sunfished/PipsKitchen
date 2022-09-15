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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.31826743910880717" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4192189382531253" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.1232361968802882" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.415865673995659" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6763561781841867" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.09462879570939497" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.18636448432873243"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.04083219077417666" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9529113574963191">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2620495234583895">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3922505176425166">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.06568041056623786">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7410871726700636"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5635352419413031"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4404244857351325"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.18597576738121702"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.1807545951568439"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9957737918938561"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5149877460075758"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.26391532956575925"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.14328979186947177"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7093850163421787"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7532765054530761"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9527477653091878"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.40368799325731164"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5435154585225195"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.29437060986019326"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3954488808599881"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6658979077467544"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9008119301280544"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6414866339683041"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
