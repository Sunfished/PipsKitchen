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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.27356643575040396" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9350963449537497" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3493838236234488" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9869354119088682" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5511365126619832" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4624692238082715" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5231034153135639"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8191197077973507" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4445408757720408">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.14566535000398861">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4555728585246135">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.19751267297061315">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8161888824574726"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6081787915029089"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5303764103569062"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6654736651895525"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.15665865200590257"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8842689246403135"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4232921181701428"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8923237819339978"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4540246706623794"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1463158974094969"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5095271855797676"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7667466864467916"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.955788695528889"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2003053443627174"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7506116664768752"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.028382772658562594"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.930292625583732"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8261102708497479"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.17196119639611562"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
