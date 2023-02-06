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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.47005747022656275" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.13085487111466754" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5251276340658604" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9250495786566895" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.14937523590116664" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.08964596507954625" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.44829264378708267"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5104092241278475" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7270084966223875">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.009511855824409166">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3785906846631619">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9784097191826622">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.10392898322792332"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8145741449653068"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.24779450402259107"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4485045211510885"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2828018692595584"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8643453009156281"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.17140385450575546"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.49421304842758906"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6366629561414154"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2978255228496052"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.253152689920106"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8745497255925847"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.20038112084240822"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.09345853108018298"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.82813607930509"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.033153509518358604"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8975570470686607"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.605822260807485"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8549882938129556"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
