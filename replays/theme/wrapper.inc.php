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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.19746793234150428" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7820792420418141" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3596742929239152" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8215117782439705" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.988403970065123" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4006179914729513" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.4375876092874227"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.921979901638337" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7116948562662506">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.05464939390879109">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8221334711327712">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.16779005038358985">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.35352607165222727"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6685118504524978"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.21523604110363337"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9221103713880494"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.45511408875779225"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8762306537789546"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7034443769486651"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.352212197349151"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.06617200319062033"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.35421729854698936"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3398052587290781"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.05324602217484742"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6007693719891027"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8432760553209211"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8835512009040618"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9300767014665519"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5488905313795396"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.14271405622514033"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9153995822908527"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
