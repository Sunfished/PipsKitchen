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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.303199218402161" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.010772085423753186" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.4007671073905543" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5299817193109264" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8349633463441624" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6126376160995135" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9348882018840077"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4676487465456569" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7623498867216199">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.29054939700224636">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6299749799334482">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7934881597848595">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6403250440642019"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.18656364411580073"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8461312449994527"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.35086532614622623"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8237760456631653"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.22978743253713096"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6433923600790001"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.00046510923165388185"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6727825443086877"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.08987065923534754"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.787002139845044"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6472190002849658"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9578183414332628"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.25151503872043857"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9599558417379452"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.09658714262574475"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4490568190582307"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.671791524492156"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7553397530327439"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
