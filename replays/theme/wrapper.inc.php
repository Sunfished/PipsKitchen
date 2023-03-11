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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.014818715427510343" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.650164275751941" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7552555077167862" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9036851527609717" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.39126530389762904" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5978672627598631" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.08717810151041627"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6647795613137077" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.35382663035770356">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7089035835821509">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8889396248836086">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3589196265843082">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.19683665505746162"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5533230175049939"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.1502769709288867"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3342411510213372"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.41698909985947163"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2528588173815558"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.27754109214661327"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.14630355069597312"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8205706702575724"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8193473995860849"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.32069651120582643"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.17905028819147817"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7590521264902848"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7608322115894561"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.841208796856669"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6466109380504748"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5184069827216033"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.47457556066321516"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.16373656137378156"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
