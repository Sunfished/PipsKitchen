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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.23342833922555895" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9034026833340838" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.215702881914154" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6512423114810486" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.40512048743070905" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8315799338163692" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7073038845666297"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.44709695294921525" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8139392245704873">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6629922443884">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6189767008526357">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.07845629930887088">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6928468026432795"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.2467921499160861"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8321435877382353"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.58386331765175"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.48914626114103155"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9136855609969581"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5259828653532141"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.243009962818725"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.1903350987316217"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8491173795554041"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8703778047191411"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8545261459893221"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8745280336338392"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7582809660772876"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.23052408126395618"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9281329012145634"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.22675990154171743"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3669815707910056"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6557296217137649"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
