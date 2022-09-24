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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2268158448667108" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6178443289219615" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9734453396094207" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6651904346970618" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.43178108239090407" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8409400077205598" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.03156360325054597"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6975751434355444" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.17019147475585283">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.25458953909657644">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9629047644515714">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6924729379417827">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.07277731103509888"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.16860789470560356"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.05832162098952476"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.0046342783178787705"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.11333347240537162"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.333350931051718"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.32818259128352656"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9666765882532784"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4321027760848024"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7025386291780562"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7869814728331577"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.930147478677243"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.33107667586745326"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3233494647284898"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9409835296141849"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7828999060716182"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4758359498083975"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.11266108482096926"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8935338862823439"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
