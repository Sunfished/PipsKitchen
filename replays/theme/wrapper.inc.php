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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7599932301560814" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.49960375910495447" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.12481434764670007" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.19027856767199403" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6233954060936437" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4904694346187157" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8756662617423374"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9641562008590909" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5296089134301574">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7481380471786203">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8049268676517829">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8853188246397368">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8806924586514755"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6304157537881718"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8004105747394865"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1787437499866098"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9383292277702475"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4987784188049398"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.44529962465237305"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.05731952236362425"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.19994131312021168"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5858816693060831"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9329779483468461"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3515123291135194"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6570668365434458"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.18250106249096398"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.3702499681478135"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.33250476673106566"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6233695243765507"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.15876530212449147"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7678475918364824"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
