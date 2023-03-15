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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8385469792337763" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.49452713889194166" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.30708609832654066" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3774228471351495" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5908802418271293" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.34724160247706415" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.011378741501050893"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.02521781459271799" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.32276705943108475">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7158048022149732">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5092552191360458">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.37048928985324836">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.32677895535250423"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3858153148237855"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3674997610349755"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6340366147935246"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8030239575724318"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.488950261339004"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.06616826368756712"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7446951658928225"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.923871429096276"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.988954506368311"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.08692217242475819"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.41868144285825704"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7542555017732926"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.17932111391563654"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9327054034013145"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.09283230681023036"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.2489233942453568"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.17741418120881813"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8547020890396015"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
