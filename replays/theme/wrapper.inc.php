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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2357814752452685" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6091697232091409" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3758483862501034" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.22443637377320114" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7271926269938218" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9139507313467381" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8906547687079016"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.1892744589369144" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9932477670675968">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7430992648197752">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7715217499006688">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6357841312332204">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.19297377306479002"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.33298299023968014"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4494254697735527"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3659678080654225"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.35526889018261065"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.13510884616070395"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6466662725130101"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5327221227301797"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8719935355792399"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3058011648578991"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.15695818949491547"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8557322907579632"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8339288412881409"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.0626365087917693"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7147219719132079"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.970438166808941"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5633441054411645"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.20857576897287577"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.00378962124955895"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
