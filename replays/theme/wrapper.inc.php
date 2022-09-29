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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5515617384547906" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9622142169657604" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9747067107360943" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9913259679783901" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7500868757567463" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.05223276494694207" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3063449278532193"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.1689239032803458" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8459332873410406">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.18755158954188111">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5875580901742146">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.43343326850388997">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.12163327994569029"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.2593847753907057"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.19086282588271608"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6031137597146328"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9150821273129632"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.677363617929478"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4584260222003058"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.04735133989652551"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3008034472679171"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5245865319542333"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6052906893856456"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4106129955670903"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6361335894041886"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3017523917288296"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6320227748552356"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.80875922924535"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8930563378844922"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5771929884057401"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.33314646877364607"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
