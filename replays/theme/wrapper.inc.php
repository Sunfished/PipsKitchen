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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7414603669332263" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.29206317266365045" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5837151270732124" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.057100035811405325" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.43752669354162266" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.25538817047803763" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3455456984613068"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.623837891339315" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7227379673918284">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6178168918115854">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9016875931857393">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.31113662913295204">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.17086190116167366"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6515109254149032"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.07605631558700421"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.05535837803230281"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.16215338782324218"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6352266693560422"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6100711930506642"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8513400439458363"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7780280722948889"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.11749362982241651"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2113627116841048"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2607728740219599"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6924340453019722"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6310235643975521"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5593612939044046"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.1500142854052835"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9565937955450976"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.16378605152120063"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7404102536481574"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
