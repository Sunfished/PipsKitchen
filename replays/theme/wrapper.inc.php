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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.38671116244744597" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2760038553738027" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.537251195810154" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.35188991818797555" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.44658012772428113" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.30849699990331625" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.42647532444943725"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.20863426790637396" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.650963186697221">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.35475764103039986">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5483722016624641">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7308649335371258">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7441292447123453"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.22458055433646362"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.39107512082478824"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9721707876367585"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.00042600785484081527"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4770632399511856"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3934868716178883"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.2855545689841019"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.37194197745353597"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.510703632871798"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5488099241416615"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4576594214497207"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6676874550649377"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.16626476744663732"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.18198927441581336"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.08796883491533403"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3095082599466792"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7875669673724071"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7131471858419955"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
