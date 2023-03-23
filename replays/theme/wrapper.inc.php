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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.41668470761251064" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.666478941733851" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3784688268036762" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5235175250424207" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.36116406068896345" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.0250634979945763" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.41737701779974845"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.07050746620967185" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3702128110808667">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9456880981201274">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.008498869346029059">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7529756058777106">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5841302086593516"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.23946468905916585"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.11878010196241084"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.20535100610165102"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8329306839793402"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5073363037293599"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.0768835877328653"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8540070396522024"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.046562166370756275"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9553904709743788"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6634324000511702"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.06609300415148978"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9500695811772333"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.994957699166263"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.00014067326890399023"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8852198254918395"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7234324643619905"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5002087185323116"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3496702167841723"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
