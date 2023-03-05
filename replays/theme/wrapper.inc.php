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
<<<<<<< HEAD
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5602642808201999" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2527642494683442" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5365666479417239" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6568752982454451" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6381902108349482" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.17199303550145828" />
=======
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5310566726043435" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7614861704715936" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.4777993258662272" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.1999499255588888" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.889950474107611" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8523255636942655" />
>>>>>>> a020b6d98fcc718c5c48f0ba16e2e91202a4db47

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
<<<<<<< HEAD
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5725722452399167"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8246402058437479" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.36275054389737815">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8043361018319044">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.14941534002285173">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.24829600202937452">Forum</a></li>
=======
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.2531922427895199"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.41604375112123915" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7603269708129115">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5746424474028684">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9178807415394072">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3491157445794608">Forum</a></li>
>>>>>>> a020b6d98fcc718c5c48f0ba16e2e91202a4db47
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
<<<<<<< HEAD
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4212168986061098"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.21303551029604995"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.08015135389224826"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.16772389825626455"></script>
=======
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.08863397179348254"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.44744923589177077"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6516579105218674"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7890519041686854"></script>
>>>>>>> a020b6d98fcc718c5c48f0ba16e2e91202a4db47
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

<<<<<<< HEAD
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6277677560542863"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.409876332952009"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6959127758163264"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4081103441775944"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.18800388765491105"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2713453905565093"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9506092695755395"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3539868503348753"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.28159366633020877"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.39635473117219266"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4384650426767196"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.39333587231723777"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8917862105927687"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9829060413800028"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.955034604147905"></script>
=======
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.37647593733855444"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8135283560782511"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5307818910856996"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.050910753507891426"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5490604668854191"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.08980984589062357"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.340494132295472"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6362242563790199"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.12112258884838911"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9496320852872229"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6065151055191902"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7684985012235837"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.41205647146196656"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5504670297594283"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.22714696810339396"></script>
>>>>>>> a020b6d98fcc718c5c48f0ba16e2e91202a4db47
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
