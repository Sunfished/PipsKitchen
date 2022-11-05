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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.05869418882463395" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9888650041937619" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6728470763757262" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9529439969592104" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5596859234140901" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.36745156470488527" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.14063083629085815"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7948094240449832" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.10172688469619762">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9461379215428312">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.1999082393331706">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6218374214002707">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.40521953051520176"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.07581697958092537"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4381916546147133"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.29069163332880654"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6195139460614465"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6853733637953616"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.15087128777542547"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3512789979687305"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5584860972779051"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.32944482716913304"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5655125726108081"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7767773877304902"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.005265038123376087"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7053154050590928"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6297894813746483"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.16988649908269515"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.19736203214114334"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.49686174410754225"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.10238317749812476"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
