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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.12029823805333595" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8826313934588002" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6747728975067917" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.910127359311381" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.05512920504976204" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9948573225635939" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7311228865740724"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5054514132812624" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9087642221334542">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6695683908936263">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.011473805243009894">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9359374372850999">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8892691204404781"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.24259760330524793"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7193831678393137"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9318215142557682"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7549511901578707"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.14097977236262849"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.012180674029965477"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5546104511957213"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9983819059289456"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.609589568516081"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.28305878300534815"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9911903337457058"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8978631869288909"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4941082476163259"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4247871595892454"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5465890882450382"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.006764400242265323"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9852181032202425"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.792079951282529"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
