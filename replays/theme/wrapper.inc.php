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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7896439860699029" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.25974287595579715" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.301106783236778" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.2550866967768348" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3452135715777267" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2057841037112591" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.005068472465967089"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8568249860447115" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.44947930100480993">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.28797970802531436">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7016950291768946">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.35747011080107916">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5212401660663384"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6188475193929597"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6239818952717466"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.39831118478870686"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.07896815915184963"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9718877715302119"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7851773677320377"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.47439971973400286"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6562291493425705"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7819317684627689"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8728201019750423"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2915906151613996"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7957731924890197"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.0847105480455892"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.49448545303070435"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.27141632803740157"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6179825839810014"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8115576601371879"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6655421236482251"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
