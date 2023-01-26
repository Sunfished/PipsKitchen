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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5208038176559264" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7226961309699589" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.94699165888584" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5199931629230619" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7688219191658658" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9878061698677478" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.4630905756427568"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.20857533767539627" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5838280723506535">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.013715700978534917">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5294779620536167">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.816068450397551">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.958366707996307"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8623778789669883"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9115866128393562"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5161188476362346"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.20285157793070674"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7550153092138092"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9163191431237507"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.30295150276906035"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.957158126908082"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3881989549394662"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.33961293129281755"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.765340323786539"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6436277860066801"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.33782389076451347"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.25403138423121274"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7561738299682688"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3781350703531916"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6074023517558562"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7841061591327485"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
