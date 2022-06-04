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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8254624795727539" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5298205017514781" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9074501678066975" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9744829640757713" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7475468732411887" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4973839789092922" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.4580008635318673"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.11111844615017286" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4311342272325043">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.894589732953122">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5214617318193053">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3618393227750496">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7634483700061498"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5269055483874867"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.769589245584924"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5169449782518247"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6839431441686219"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.790687069838939"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9491084327535597"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8873016665249704"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7453357796488054"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.21064715460800354"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6958264377958612"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5789496991694227"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6666178166356529"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.398792427277207"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4242993147030536"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7476809871762082"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.17549729305743256"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4196487632201997"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9622110956410004"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
