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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9814424503928862" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5941500245480209" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.15387430985270734" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5673377729311408" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8430196501016887" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5032796590746949" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9770065160046193"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4957937021529055" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8115640036769891">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.40359530899993645">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.23308021725799422">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5121943801171174">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6151803907853595"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6610053439307502"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.21705842197648306"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.40011202953510683"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3109223984141434"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5389586240271766"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5347992547491809"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6411965662643853"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7601201452103101"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9409251913057575"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8754606034662253"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.15049889240122116"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8584312337251467"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7164993631481615"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9451946752794236"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6064919074268103"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.2787531828055423"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3858567172878544"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.2492311123466049"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
