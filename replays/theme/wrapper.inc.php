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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5733473683776125" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2698613087233861" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.14166557210978525" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.1325902047698171" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.1182258259237976" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6301685119538285" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7005616483782595"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8659533037092584" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.15114203480713928">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6020833706652147">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.24119395072490035">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.05381127183864942">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1939659127377269"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4332279351243342"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.212517548891624"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.16028540652735646"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6269634663755776"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9038905421871395"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.08994249295876089"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8857446995743061"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8059219399416275"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.31247656207174335"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.0947170972680258"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9540410805442812"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.36763056466241406"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.059045749361376965"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9121586943575"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8796222245732341"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.0877564097079866"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.23553082862437713"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.28062420241328123"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
