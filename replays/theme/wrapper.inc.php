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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3981740209356228" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6382444715459306" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.11815355378060155" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.024192897336300145" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8519748161011709" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9657452307037495" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.805378185143615"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.612141805531965" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.20993368660503475">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.34884094459734816">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.22089163423511526">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.30006029320254846">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9199406653017088"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6116390506609299"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.05500071915211935"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.617650991594586"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.1752239152880839"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.21611720583715766"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6439726051528591"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6003457355402413"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.37725393379612093"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1662199290857096"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.20249896952015622"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4024481169713072"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.15861946171807872"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9887951252677896"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.3197324892452289"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6821802865512723"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.24851200026142162"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6715483939478117"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.2701922437990465"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
