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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.447609224298231" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5532723010684577" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5061554306427993" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.2553946139845118" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.42332514220746953" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.09632935635385675" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6257220305731783"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6302366376934827" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9595620580325521">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.34975910814513256">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5221662714628623">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7073780788117905">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2675114221668913"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3781618558029274"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3430237115333299"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.89719627178043"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.06733437034252887"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2444358812669465"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.44834379731257235"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.12365953065081015"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8965389174066709"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.825638194318904"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9427154993377624"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6231627154908039"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6069183300943615"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.23623826757004918"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9918073838410257"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.11405311370617377"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7232113303354297"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8881728981103523"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.20183746973748318"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
