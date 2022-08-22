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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.653436348085602" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.24997786538498135" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3978805529807643" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6072534030848531" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.0297989812953785" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.09019464802010924" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.1773271848564999"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.1285426740571325" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8504906688844696">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7374503936591561">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6764529684378013">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.2484144188885551">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3424045765196486"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3826314256508836"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.1643275154105237"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5363408041466209"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9788796127749357"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4068534504582346"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3434394324935559"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8541129703718546"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.28359601173265037"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.14555915793890595"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.16411260135939565"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5484883203929007"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3016132020204998"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.16115723928447578"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4377700185407043"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5725894923184487"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.27597482695037145"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4508883540373858"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.05244686857270531"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
