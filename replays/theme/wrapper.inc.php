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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7689519580038338" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9463819319083893" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.34491734896531523" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7713289780059753" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7591453042955867" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8508685673297014" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9751466373689168"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.02693094619702796" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.18246243239698523">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.08696392088763849">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.56648405359666">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9612381986037966">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.524999246672051"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8178327834041885"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8971522685911444"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8904629754902358"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6265977202966906"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6627685922263056"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.28162983146358167"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8989942109180586"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4535689177607203"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1769016680487976"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.17785971838089054"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6322105681062362"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8891935869811323"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9092316230416755"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.13851215321638444"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.19944667477174338"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5979180975887637"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.28806542029124693"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.634146028650338"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
