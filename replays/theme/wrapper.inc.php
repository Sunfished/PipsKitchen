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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.22993056338783657" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.14069598038299946" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.40539544500630553" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3190025176907052" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.1370778183814696" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.29744556480900375" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.06171374069278879"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.010371238601790234" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8173281980410059">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.24452065537358503">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5329127794975892">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6154231035472584">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.659602014920901"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.04464223898371111"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5281003883715596"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.028328125883484434"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.08813316700741525"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6502902171160208"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9851652741292336"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5614561838758281"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.1959898777495277"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.45499811038721183"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5021245213533636"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.33079381304451516"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8022004484531988"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5005066515052301"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.07350115462924212"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.14732095193055694"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.12116326782187214"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6562901226295796"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9043889420581512"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
