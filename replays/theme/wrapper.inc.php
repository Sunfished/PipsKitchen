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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.432047834318388" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.416650464721422" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6032329343112097" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8073947720512806" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3424098507749924" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.12931951508307948" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5758879063039466"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9278384893859559" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.42424047851915314">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7320481811076893">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.08418092245129571">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.829514560610082">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7892676647077488"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.28191725466939"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7591917815096652"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9289000517419475"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.16865766268746318"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8605215673633604"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.46285671047325194"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4364200558330802"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.18178894710816063"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3760918534666131"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9832812200588721"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3592575490617904"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.22413523175170202"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.007756160289994707"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.19074476150872255"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9840727796631785"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.039228767713379575"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.13577077684649375"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6459714833568833"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
