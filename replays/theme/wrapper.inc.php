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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.02552235131950109" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7559857582157634" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8372823080729559" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9469797488948359" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8169308850030044" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5673505898790894" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9672463794756239"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7807362831644022" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2485596015515208">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.30210169645074814">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.32245852075640147">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4913057545710733">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.15118539798745556"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9735499184036778"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.817602045253286"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.812056530074561"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3024490269634872"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5704423266131478"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.40689321947779766"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.007715938546338119"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.09806280619725216"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2944202813016812"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5855586266307495"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9989118729733097"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8518236504436609"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8609168500637749"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.45277910941014055"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.40849539969200976"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.36669567536906045"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.41792254135362605"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8808811710374163"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
