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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7994920933010301" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.43931806408008467" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7707150548547972" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.12172206215431203" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.07420728011478417" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.717240777934445" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9343785393595347"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2040718107316004" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9094344619038397">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5064181523817857">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.735674480502339">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4535066233523488">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4162896437878363"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5671227647218129"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6989934785783674"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.31091504370846623"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9845411783963336"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8510888118515394"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.261317658732344"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7303279796393112"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.09809134949966425"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6322764168558765"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8131292354832833"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.307961254910583"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3682092133622792"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8459222056447557"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5163396610336921"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8783350868510709"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9028416293819264"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.912665358916203"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4298499080149254"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
