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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.1016248653933487" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2842445344239328" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.18231338095954297" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.46229089060335626" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8377122350516943" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8156555224602611" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.1021973027729548"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6576319200642289" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3422319767702229">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09249793385172578">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.0665645977627678">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4882846454414307">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.0867635580876589"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.04589335645418191"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.32469216668414735"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7011129762334163"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3530563982252639"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.04042171094013702"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.35797906462602724"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.12390295335653168"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3887044375853661"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.30189206518624223"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.027803559709092207"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2545218521237518"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6431089502667684"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8310502996707025"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6673481291110488"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7469904130886766"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.17885520688456746"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.44978760268481643"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5192655148030767"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
