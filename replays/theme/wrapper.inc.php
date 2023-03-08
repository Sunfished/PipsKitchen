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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8844007878449138" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.32795321519024356" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5388820434034065" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.13398849605787633" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.566496637992743" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.49832448961857945" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.4155895137004797"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.19049610439550846" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7676870367272892">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.16299508417620845">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.81160475451914">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8214907889234027">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.20728566152830674"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7205628599825298"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7769474142699186"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.30375912195426613"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.31449411607130706"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.053617366110012554"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9576638527544954"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.24657473320134593"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4071454564331882"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.44375111476379225"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.43577748079419476"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.158772374830632"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5672796769418702"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.1357306964401921"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5151932464904063"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.619020729858673"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9443507103049538"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.671649785846695"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.031187578006323546"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
