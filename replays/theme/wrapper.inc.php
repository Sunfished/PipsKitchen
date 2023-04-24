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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6019360060710703" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.07210674103916026" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.696403768921616" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.527325767464506" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7481877259860377" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.07769050196739324" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3000185343642605"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8112748342139127" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7927044972590944">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1003495589568153">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.45208115917525227">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6628305630954676">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.0840011609645932"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6841453402487485"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.60472609122046"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7722546981405238"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9261532660555167"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.014916082603155578"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3576982865843179"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6417617779402813"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7324143967846328"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4241357388124962"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4949398829478526"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4224029174126276"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.44323186757051913"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5327211121136459"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.545431309712197"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5209530026698346"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.1944611366861635"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.23962897518697535"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5537613040417864"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
