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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6476174081335446" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8994757530079294" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8791614336056695" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6709725468252503" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.750743096179493" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8610833546184218" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.39012831426267236"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.593054790229246" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4079021943639396">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6550367288549814">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.07964394788694995">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9779590710680315">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.61143808939834"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.10736173280849748"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6350860770007334"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.04821964618404451"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6847714192706906"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6541306992885207"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3285522890004593"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4534785186375394"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8072632470356669"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.46599516922434336"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8100905970240735"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6042683285639119"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4300391952354663"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7863132049932346"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.2833601161087549"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.2783729762352951"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.320733471691107"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.562766852456793"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5945506516126366"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
