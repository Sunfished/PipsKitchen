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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.36203863464756947" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.21069442866945964" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5493812439863941" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.4791838843370413" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6937456464345348" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.32714254807322285" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.4624307846086251"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9083300593011034" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5833561475139384">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.16028813497928174">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7856038162780865">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.16169080577868944">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.30825229667273435"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7450516043291959"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.855655451942601"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.0871257129954579"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.010649777935139548"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9126862275041459"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2737480015640623"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5531603257007387"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5970180422773008"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.06353390452214858"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5562342437641867"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2774743853048882"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6241499589050341"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3131726425721999"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.11447046076108314"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.043057116861906275"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9083303207307547"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9675814007614791"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6164168729270574"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
