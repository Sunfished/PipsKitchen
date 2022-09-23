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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4731184708744176" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9937862584307198" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8257123623464888" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.13449109317878571" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.0476081358493996" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3545884436904325" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6836202116534589"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.1829610891018545" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.017839016986582523">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3480632842350351">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5638277297195531">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.12156901803051534">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9731916740628852"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.1804487444708509"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.08153209267373618"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9110519680325861"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.47570389701695515"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.19152827653078597"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.37931956809818557"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5271098422461666"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.38051683013738913"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.806767482807154"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.42294511369194576"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.863718092358797"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6916826964748557"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7299381302795032"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.42551677261059706"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5306899928995445"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.17051240828573322"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5506581219565825"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5924762715540635"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
