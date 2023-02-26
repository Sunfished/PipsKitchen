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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.0015269016970795857" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5388510479332616" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.27633438220738205" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.22682833176612616" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6237213476574646" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.41844890203081264" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8266079608286696"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3924381569766815" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8189205407668028">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4308974573450832">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5695533967329054">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3818994305426968">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5909693721984417"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5641481163358175"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6932397737944942"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5694241155033266"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7516867969306253"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5727718784660976"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6628775575624739"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.32470755660948925"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8516241463769931"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.08714754852379536"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8431241640898677"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8337614633650634"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.670662124217601"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5831706428643022"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.14599205350813738"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9429240531575784"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.653901630711903"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.07603231326278426"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9327695792769988"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
