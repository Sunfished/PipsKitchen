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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.33234046656869065" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.11965648453559585" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5587889872138248" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8378422594716521" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5336028122874421" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4008794092928982" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9164119980481817"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6101900413866479" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.15999190432479704">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4828204882107159">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7715936409806945">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.10934253310681719">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5026230061512242"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9527491818610845"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.04830950455382088"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.88367403927502"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8682770953190275"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7947773891674481"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4996157190020507"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6325415472932949"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8888237762757119"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5112613143972939"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8641243858082821"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.20772009108679823"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.1314860329493983"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9385272137723089"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5177617470728835"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6588882042042783"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7271391851921862"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7870802711535154"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1468261884538411"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
