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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7282050163928071" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6028858896957001" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7104078037087262" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.15930605272964726" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9659235972568143" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6617711144048697" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.34829664557542395"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8045720149388746" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4202828403913075">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1570399470444932">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9931803633904952">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7361226575453066">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.34578193477968466"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.09995579597559923"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.1930207537852171"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.13384807609821414"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.16572525784227632"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8699296520146036"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9808477236799831"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9623534474371451"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4084558961122575"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.11891859804273297"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8241608907081708"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6024839089682428"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4994082707440539"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.12400138115417181"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.71389112931152"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.27735482831474956"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.739956057013061"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9584623645947392"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8519269908571196"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
