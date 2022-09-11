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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.035438920337469204" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.1990026655193884" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.4633854987389705" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.07324675776515255" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.29590871167735844" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7783991835420305" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.157466607536622"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.42092055305616993" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3456734548979601">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9864566098968865">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.2378793470918399">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.2130911307767851">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5824859884837881"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9738585179992862"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.19665484038120784"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8788103069544053"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5876479469557057"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.677290422804518"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.01931121940190561"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.04860027408396861"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.0942877608535988"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.41046684853517745"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7621880407270767"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7759913712171769"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9213399805111246"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.21891356512992144"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6726723312794924"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4042456090720705"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.786523104676367"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.08110245824765405"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6711503818120925"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
