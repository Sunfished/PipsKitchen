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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.10631832849984324" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9080950400550305" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6892042472619422" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8672383455925898" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5922274561324163" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7123339175100647" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.4512293721861651"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8841067736738628" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.489087930363012">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.41648685466249313">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.369262133342555">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8848311708375631">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5772731526736787"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.78747269178632"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4255354659110988"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.42112073987465326"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3409648316011189"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.06177356249749999"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5771715395834682"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7712792574368976"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.20498566459507495"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5332331031294191"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7068573273950454"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.29712956417253666"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.33668752705386695"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8517988623043011"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8564849307231579"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.20815875568224707"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.301952438093924"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7180942072593313"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.42013747295931547"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
