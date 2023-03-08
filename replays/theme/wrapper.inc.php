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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4967841253162071" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7691037473339071" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.16985888067080035" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6120590508066193" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6781567457652231" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.32368879202309575" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7895157585646839"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5749397333420128" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7611559163374717">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.658185359808386">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.594591968959892">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.36551957477661845">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.12372348924992793"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6538492317130229"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7556875318880341"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.27868653894647544"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8152605698416344"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7357409203926115"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.20515350644137742"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9574090828063111"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5101393773296381"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8643294175930605"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.37743654812821914"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.22726029528526803"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4533950307587309"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.13061123309957545"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.428387072324556"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9880791531024733"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8918920108322326"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.472664282484879"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.2678558648366558"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
