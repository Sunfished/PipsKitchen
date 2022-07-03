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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4019909982630343" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9987470216501111" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7976837556058134" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.017053153259238618" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3410014655148912" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.0979026900718647" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5679980363703352"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.991633589211246" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8715878369179415">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3455359314371562">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8547286231084184">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.09641344569666943">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1882288392195146"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4874561225455394"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6480538737975148"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.42924245670575556"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7302134572149601"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4972302505184518"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.319616506093086"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.11119010436046928"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.2641456193445997"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5187201328280946"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2532553111685669"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.708165102328481"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.751345301875129"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.344851634163976"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8018758694377688"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6227287102463088"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.38610448733935177"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8839579969498212"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.10049803236109578"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
