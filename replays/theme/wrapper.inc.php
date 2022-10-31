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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9123795522458071" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5915168249283309" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3071418033741109" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8496103288143864" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.040615512649800456" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.49409016109904913" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7428711402271935"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3641200798572721" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4748909000922339">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6925099594169339">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9613287741156435">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6335791225500247">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6045474777496058"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3965728718111641"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.506190120627255"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5686120342008714"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6176135009714099"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.755863643271635"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4820699863838853"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3304489769228054"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9198785743456308"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.09316809859028852"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.16656444502493972"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9274103418301245"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.0446845054269025"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.41300696862175923"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7365953765603326"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9909180591493245"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5328027947556311"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.1357129027440156"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3128716921271011"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
