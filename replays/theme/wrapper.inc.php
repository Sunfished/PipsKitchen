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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.1908229139763007" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9043427165044235" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6124147528855215" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7437119209933878" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.16127873022435635" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.1892425601109784" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.2505686698112546"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.15602032451668468" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4490157464301192">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2061071851078029">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.695382947199477">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6033212080163561">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2745094812445008"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.772094261633504"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6693164299825545"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9092696338092894"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8529102326242934"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5196195503674954"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6146447369918513"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6673777934736016"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.47994009282660643"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8929310089794706"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5894719402669464"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.40971506879518893"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8134858823693163"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9133336923331019"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6025279330496665"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.36706866980141517"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7069570362731528"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.15482363786194875"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6255129815407423"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
