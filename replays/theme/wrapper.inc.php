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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9070511344414927" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.649213078157787" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.47453537187054096" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3550837662466564" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.2339749450188331" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5516974834012445" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7876012918889355"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.38013591142318903" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6662253152994766">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3848092152613194">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9416598347590879">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.34123060330045507">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6446485534790922"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3955239761201428"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.367027356149934"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8044252346050889"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.19505925567569915"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.42299551529999846"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5070110393814891"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.12819621587385566"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.12485608408462556"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8831815557784266"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.514421402651116"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.11074870729322073"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4097435432770744"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3737510643275712"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5607570078119257"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5078900242926898"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6214969840707032"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6700948134896567"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.06533970132881262"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
