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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.18929685984229838" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9544686312234603" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.04544386992276084" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.22597942042112273" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.16527188951413807" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9921626962766199" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.09574542157443178"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5300693972063202" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.46533190095186105">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8388606487182462">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.0649940599747374">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9370325999295548">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.11061500156041437"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.22094461845648428"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4788791380293598"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.837634274952642"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.037889795980977414"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.29124445716029346"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8280989605767728"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6571716299742922"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3073549519408578"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1082090126025197"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7337272087041011"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4621623559906678"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7429335656148359"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3700682627314682"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9294759097947285"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3404759040129006"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.04844221041576979"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9593940595317203"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6873968048115298"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
