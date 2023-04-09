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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6604328251024285" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.624589393480218" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9617438021886915" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8460625043489436" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7910747398283482" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7802915376768469" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8467756311961192"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2939228211652043" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.07745724924595199">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.18288343690054765">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4188113613971167">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8471627967551396">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6859169138779777"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6157485148403576"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.046836879927302455"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4759161395665594"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.22103825711732972"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9056095660606804"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7947664354984341"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.007919690871456053"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8006119753815337"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.601292531525869"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7620026571823297"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.32944536892035226"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.39021014637654194"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7066373244532769"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8523823084382325"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6588368147970824"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4297921790764063"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7505016357460543"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8443633867688758"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
