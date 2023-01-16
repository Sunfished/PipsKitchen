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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7819249672623168" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.28926587140704685" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7489435959649697" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.12120603522761075" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.06590303051560342" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6513913465201713" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6300808299896603"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2208582456356034" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2011681398023335">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3475643783096165">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8175917541589066">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.184327918345065">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5415191002488049"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.930160676856217"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.026313231333410014"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.37631255805357755"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5879452155965292"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.997908000665203"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2039533098050692"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4025498238866756"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.47242798460304547"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.08532321926619324"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2410021203483157"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.23530162328325321"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.83424756868014"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3920494978968525"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.45506641534126224"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6756823942340437"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5149640270146574"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2007049453902301"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5479190633377344"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
