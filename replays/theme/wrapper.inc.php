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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.20286675994416004" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3284010188306068" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.34158828135584085" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.057520872844087245" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.10046437403752928" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.14757957438716196" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9989000278441815"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.612877521005035" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5112602569636326">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.10250055986589057">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.027430489589126195">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.03906835206857906">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3743391422640001"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9687071601688984"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.2793266697120065"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8159050199387567"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.1450844642147322"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6859265986786331"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2727386725288541"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.45422072617915266"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3163909173656143"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.08251383232439347"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.33136392441014406"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7050950477330342"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7769026936552414"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.13358453675870408"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.36697908916475774"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.35262610275325135"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.45312946462884485"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.01975502599682777"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8686967712932401"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
