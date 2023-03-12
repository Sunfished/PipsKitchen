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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5796119198623435" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7597361513747996" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.05209104497520234" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9868295432743022" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9084671854002133" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.35709265589677064" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3638410488489725"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6239763023080034" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.791574839612633">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.19055168604173867">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.28513678285091615">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8294069377834103">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.0468372811291391"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7161708367040336"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.06973262757468635"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9747708286263363"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.43652624244567284"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5651153358077643"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5142684563983153"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.06505918673758027"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.39025699389282376"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4345481528415318"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6864846513565148"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8562660346357882"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.43100739776775177"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9126543238547531"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.2659828382930327"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6379877398280336"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7748596822368534"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6523909280317313"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.22859982953303826"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
