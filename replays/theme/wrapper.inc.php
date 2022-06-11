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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8303732432303184" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.576055493776457" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3652765873883923" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5381847951730849" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8002488727684673" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6630579143046436" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6019589898550957"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5792628116566518" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4892420114149114">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4175767319145225">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6557346210002737">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8384163508206148">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5013296535095593"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7325178298400865"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.19418919570868742"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8421471555022491"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9360250280000428"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.06165840837893888"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3835585724575261"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8385854639737074"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8491189990944208"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6747985646612387"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4697835508918853"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.03931806931530346"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5666731462156867"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7139568541978143"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.2186782435451453"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8870021561970003"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5166120904778213"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.17061654338538856"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.015841683320691136"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
