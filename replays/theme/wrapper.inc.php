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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.437366718205195" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.48022712169221293" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.019838579034111126" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6184111692491583" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8116112148883927" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5027483483459334" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8198700689590315"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6154925584703477" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.961515155777475">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.21533517380374922">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.26631158830685053">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9261153480494435">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.16438585667583228"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3682683227932735"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9904534266634435"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3947533102588241"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.45206343160492013"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.35285214189286407"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.21268261951015832"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8567508121248708"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8823639213891845"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.02378526172884965"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.14940092051074383"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.14685321119365757"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3224569937074544"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.20209983208097326"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4162839705277055"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9768436715221989"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8817490866531286"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5743836800736613"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4842585368476662"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
