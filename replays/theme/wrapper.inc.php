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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9978249648332356" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.03954160588620126" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.4890680948119073" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6725281304789037" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.06547674622948918" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.19352085021651066" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.2406919136782053"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.0016845522787407585" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7334725289681487">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9162534853193611">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.28732217511895186">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6932016697094179">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8124966877656743"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4061713337151007"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.42290732463678027"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5821222806053843"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6287336767174772"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6261528235533009"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6749569980725503"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9015483755096041"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.28727328941886077"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4358583394593998"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5978706772744566"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4592464580404294"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7888375695003189"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5750606280473467"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9892537183949919"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.0064425988504761555"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4257457928694135"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.18930511045243703"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5793846588808425"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
