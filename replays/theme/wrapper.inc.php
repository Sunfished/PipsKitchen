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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.18027587103382836" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2406988936785317" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.23848213940412588" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.29579344911739613" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.21904496040834753" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7087089748956739" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5314085508953605"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.782463426308915" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.33589197216637845">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.42709576380169456">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6915468618427281">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7736591223255882">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7648744232888445"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.08488930039133646"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9706019377566986"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8841221405158615"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.10233116155523736"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2911049960568113"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9519629045467213"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6123368916820253"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.959950638379607"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6411636832021257"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.28958250383972817"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.020719041722212284"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4774980793348804"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5118194802019067"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9557833734826118"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7980644385778068"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.49704781540880294"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.37414287622413767"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.12830913072976968"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
