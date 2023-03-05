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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5492612271728414" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.600107689666959" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.91042196572682" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.36322786486830383" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.41728423500638434" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.741864150283561" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.38708111093405106"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.31302840210217653" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.536276546533234">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5480789342641423">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4446659632125116">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.10684632079482514">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8900234146699506"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3719394987961515"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5108303121131019"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7770598061026834"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.04762176056181722"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7850005636723678"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.37765284087894835"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5630435014534003"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6178207912739531"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.39277522756119754"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.896088853367498"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.07747299328908497"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4210078257383534"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3583649563072149"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.1286742764244866"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8697658357664757"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5091781001559961"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.19880764842064869"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.41232345681453175"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
