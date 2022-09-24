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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8486421370417103" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.012318083144902792" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5620326202022794" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7965385053242731" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8687353853274482" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9814209857485037" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8867191999943596"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.18517091467435942" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.34642143025154537">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.797342626303033">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9727494035467352">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.35914366641455153">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5539098005894316"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.21158395711956124"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9713272169755021"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7846684485608946"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.07939399970175609"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.04890678087835254"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.10815727869012548"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.42580121485719347"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8035145676738491"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2686095109414177"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.469609015287872"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.49754765799396794"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.28069928322821824"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4152330545622003"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8537026602335309"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4967329278175363"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5793823236446574"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.04618452520173566"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9318237831113727"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
