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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.06289317018624008" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.14816635626821695" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5299458142206046" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9668726128295064" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8605856506057898" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2361346593695972" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9797514802422378"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5574245788460521" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.551525232068153">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.06112015813086624">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.42669867708364584">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.20524052813397176">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7594108115266107"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.47463900567448825"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5731642438694817"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.31858679405837265"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8593199368479432"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.04763943248121372"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9011608592635179"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.2601728030035222"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9421126046341726"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9972385526629814"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6443759997211516"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.34176147578425375"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.842355268157212"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.41677748151525296"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9550944909355621"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9668908611467422"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.12965966864132183"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.1826895440237748"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5618873239182225"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
