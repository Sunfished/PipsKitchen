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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9425589714403322" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4659157041514208" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.1361567549586431" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.774311611261572" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.41627652125868897" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.37483178980801" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.24909616011653868"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7431133827424243" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7120511791160102">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.07126702102479454">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5410369853330381">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5727624940322187">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5459902975271642"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.49454467370540134"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8626136973185015"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8110832487824191"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7615282319110053"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.23001923770455002"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3761302942210063"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6637762725686822"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4830747479818689"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.19592104869750293"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.13346987015046863"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6157568160829214"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8604451882698989"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6792322304210554"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8356369306720712"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.575223078630255"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7532048851712068"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9270367318562645"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.0025741072184559677"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
