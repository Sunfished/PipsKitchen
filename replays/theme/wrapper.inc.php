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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5635394362695931" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4052197485621001" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.15433798007631783" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.23219007035030237" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7362582239022286" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6173964855376266" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9313113447799704"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7476951848058364" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8039582505926259">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.02250462373583506">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3674091799694774">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7056429308894814">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8526695002283156"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.24695769782765598"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3605988887726781"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9648162823116972"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.31925427684648433"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8850109902356413"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.04305609696770052"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.736150900778253"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.18742687652904144"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.30305312485869185"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.937924930105954"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.753818808802184"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.39677361652764764"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8932315417372398"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7697962839906154"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4230350619029257"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4168705660359473"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.49668198536265984"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.263644974156229"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
