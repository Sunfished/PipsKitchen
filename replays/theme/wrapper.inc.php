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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5875837938887607" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6719679743048947" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7027939006359525" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5196506506390941" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4460720144493562" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.08743463518558747" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8926088217738934"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.543599900689937" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5171139146168273">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09501374843621968">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.14580234576762452">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6301577819167854">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5490276853308731"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.44735376506788316"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.1916260491248789"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8162725658562364"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9509452667699372"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.45512203454002753"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.774114877858451"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9158826288068409"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.1213597298089173"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5308976706850537"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7874412915771989"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9706017626528203"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9695811019536547"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5926548950212107"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.051777408835189886"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7616285495517454"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6288761418641062"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.531618584929721"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4023074275386005"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
