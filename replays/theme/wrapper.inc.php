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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.1942448979710638" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.19894060173229944" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8127059728625732" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5599216733677201" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.49129797640468587" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6428051395854153" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7476227759308121"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.21472682667547272" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8461033483147058">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8129797272802897">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.920844899128862">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5163166222887636">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8021902604037767"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8140036580510603"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.573983259408605"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8133402553597362"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5796309516973732"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7063951420201233"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.443518914861859"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.682353785237674"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6549985970075001"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3567566062977374"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9441126646865579"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6562520279063615"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3494316343076982"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5407736874260844"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5484567132730256"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8915630440077864"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.21991495047175946"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.07745144499236845"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.887183759597856"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
