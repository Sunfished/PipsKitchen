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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4371234632097547" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6163078029065152" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9331857099972531" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5530807965943814" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4313602508598269" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.28515477991553917" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.21073199220856642"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8211693387519761" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6470198940546947">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.43358005275534617">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.545972734967517">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3366742967846179">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6291039571952832"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8487682558846248"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8004104740168418"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.22831191861405054"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8579408140929854"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.06336509525207545"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.49496206137521237"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8130910092366481"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.14156908294335202"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7941618260614267"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6994656754608737"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.38676155887683406"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8373172312438197"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4223455010327162"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5577100759891416"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7413298334567469"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3267274352941578"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.28249521842063574"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9481730355447104"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
