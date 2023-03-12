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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.24290427771215684" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9598297058577783" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.41405709199602425" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.27622340386391286" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8081190444823001" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.25307366653461805" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7149912384927655"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9611927279329688" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.10182873673376802">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8054806153273044">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.2876386183785222">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.0941869763441161">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5843047817085911"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9888457584545782"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.2319425734761158"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.823478946716131"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3684521578207338"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7814512572078027"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.795506878744705"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8476452656689188"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8092723919351184"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.25847331712517607"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5423604286612795"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.0001313430176665964"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9956065957393185"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.23277697223184446"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.3492348920849573"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8920618922823764"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.2811019396454766"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9874929633886573"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9985063395658669"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
