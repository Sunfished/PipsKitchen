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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.1622496766984689" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.22350174967201308" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.2563236137507092" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6205509782109007" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4450407841584343" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2036459273950344" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.970121591158797"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6626693484705868" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9706602885858628">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7119371777374148">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.005709565846211628">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6317721710295592">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6914399945228158"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5916983521317962"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8509130476427471"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24016075760288969"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7582804144778594"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8907824882474749"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6949502937434913"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6940690150017448"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.31372801218589275"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8319458016284067"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.13051493734238218"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8459621877474015"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9610782935939266"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7329391935930978"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8325398678601841"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.2184244810672442"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8206386793734632"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2601863925304664"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9047977287235196"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
