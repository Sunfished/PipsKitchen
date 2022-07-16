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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3811263029015515" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.130839235020082" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7437454455246795" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.06896883935957976" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8784122835461374" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9611288343815192" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5204809400840764"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.234124336793883" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5088609739128078">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.20193022960082652">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9640961025040515">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.36242873674007225">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.25278805694281536"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5152596978415995"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4847882684658493"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4347871023879897"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.18084767325695994"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6156707837335802"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3202894787222432"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9045206512894881"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9919071549614671"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1953585335868666"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.35326022911158406"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3735779783723756"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.11811102737744861"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.1614671241468404"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8941321165996425"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8129141468880168"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8232674478773425"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.16256608594162691"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6303122462705952"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
