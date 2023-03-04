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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.20143054851337738" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6919325615303094" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9844663733223364" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9393506931936395" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.32464449079876956" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.798689059484081" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.16271444726394102"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.038321008960910286" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4167843213557494">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.40049171726348387">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5331088920594707">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5802676055817433">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5526262007431235"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7706433370411694"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.45882299415325734"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6252998188982977"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4497847139204476"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5433428698131333"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.644960685228934"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.27176552060492964"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.08155321536210502"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.29390062126911465"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.33623612383601786"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.08012271377881097"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8080171999961885"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.32838053176244153"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9513921035771462"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7040807100131594"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.17851166893183157"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.656302475165705"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8548591581235241"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
