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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.36062059795460155" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5026274123192322" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.046804170601979944" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.514822963909628" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5731407527513688" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.35523680388529155" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5524914587038416"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.704033302018084" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.12420822984053737">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7550806304120217">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8715215928906439">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.2521967137563865">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.905557569234912"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6172594099071891"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9429617564672224"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5812281349975386"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.10515552725319499"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.11608893591690062"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.16703619694743677"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5267017715070044"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4918354535470022"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1309519832637771"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2542916673547784"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8337404383044082"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.264750461879238"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.41304910138468953"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.37398665667337805"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8771725700034498"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.13940603868779422"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8396540981731218"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.706491262476284"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
