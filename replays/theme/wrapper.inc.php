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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9630814969477883" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.13805578253058304" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.040783867086650494" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.05031289429105912" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.37683813595859617" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4258276231594551" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7950201961158134"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.548608203863741" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5943491309017739">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.703105408538993">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3245785798907672">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.12562248145985921">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5118396208718892"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5446918198715416"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.41890172813537707"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7916877469428198"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6877622685865978"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.15853277694369883"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.25240645934777795"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8342536378654477"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.45967660873617233"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9080937245243785"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9795002225241751"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8313022583759184"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5220806206193285"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6339975536005484"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8270125334924963"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.06815342629856502"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.2881973437083285"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.10619846154113399"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.37374091766431383"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
