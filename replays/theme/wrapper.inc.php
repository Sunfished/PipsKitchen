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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6355850844815585" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6762318874739537" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.17218579525869826" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.45451867083240893" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.45528497396055756" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8937903512736087" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5710062991998905"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3355387612390135" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.16419517144177864">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2411998819190364">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.0396740574504455">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.19951868267686357">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.42169884723230666"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4944759786340749"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.08924412900739931"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4212272183958021"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3855260758369967"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.11291731407340477"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.47609210373936994"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9358468701149267"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.36756608281940495"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5533582252171254"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3339653642879419"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.630654153248116"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6967671244990707"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.34885278827956734"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.3334197692087526"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.23527517178159174"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5780045961004014"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7558502474527453"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.03466920294022846"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
