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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.13462113932425335" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6624480762264657" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.08740527811597665" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9973848167041992" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9561088224715286" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.40289895827930566" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.4407012328564177"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.27843085708920756" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.49028149716826985">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7873326480813934">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5609362402836466">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6611388844164834">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7595414988040625"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5832524292074499"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.330801369415024"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8973915745818128"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.49732468196612967"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6384771138412957"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9607870773577183"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.968136981746057"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.39230339522334345"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4308034172050106"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4778860138947525"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6385785003193858"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.15561401796254004"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.06134206573903955"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.24513448338890198"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5371011160501877"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7061063067475191"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2818828176631414"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5553087530476148"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
