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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6065129278579093" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5069566434065804" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6529507328019504" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7088117094618986" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8775290190076015" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6136172752726274" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6336368171132789"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.20405602972661185" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9303109013191055">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5768941984186231">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3612792650155736">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5677712403895154">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.014825202026797601"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9430314767963257"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.62544743099031"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.20085100928008748"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.41548859754873124"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.18813257344087742"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.44682337720434084"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.24710672955588997"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3203903581676999"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2405372042350593"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3569805868717224"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8740579752243094"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3755779138387729"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7931801625129091"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.02408750961110573"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7651509115381374"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8204792848573257"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7309203944015623"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9962375863072945"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
