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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2278979252965272" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.481162491198333" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9796087423991395" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.18752118289552167" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8779726224101208" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8728537632569231" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8005354345631606"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.13127090876203606" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.930511476129007">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.29021233595225127">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4638101843907698">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.43212429546238984">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6350092565044922"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.42880816843260083"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7108011817306268"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5862466460773781"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.27899329576639387"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1523202618232422"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.17825630874798626"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.35794977145062346"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.042350350340596865"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4851482125366482"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2241975439263606"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6681021369862614"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8985697573031977"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.11444727345289007"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7539642128530317"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.33919400470520467"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6309311642878082"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.48418754927493435"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.12111708776303831"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
