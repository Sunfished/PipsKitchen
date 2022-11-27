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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.05106531611494103" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3279581930367743" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7693241360062681" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.611139422028983" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9545954078816841" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5160096790841537" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7002459481482297"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9287966315748861" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9426098688418425">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09088004184122056">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.27917940982516876">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7590521063733779">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.789571918096615"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8960491330710909"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.29267351593928526"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1212561952510045"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6466473268456292"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.054852688937035765"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4246426556297447"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9811598777647004"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3737464883410613"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9723772240931103"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.05058153518409281"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.14147017158443198"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.07453957005163336"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.39132026725552915"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.300506381240333"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.043076531858623035"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6997550673730342"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3417346400083423"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7315546717137997"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
