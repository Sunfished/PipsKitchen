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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.690635340078497" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4017172536190532" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5803942990302811" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7891220116322786" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4710788904045682" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4325461220583464" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.34651092374233183"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9220607103845246" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5791518841793748">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9131863794933595">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.26433661495406024">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.16273909982571033">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3421510744771441"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.32816626608286104"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7188229242188164"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5218145146857853"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6271323697197064"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.38325170008971376"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.021682116719399902"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.14658394553140597"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5626693591502372"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4239438590781268"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.37740380878946445"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6963333777839429"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9870927550020621"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.007768667794131323"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7066016540277"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.536759643101894"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.984933824129808"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.859550554898648"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7211150642068684"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
