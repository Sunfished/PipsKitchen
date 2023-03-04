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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5957670629535086" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.80095584082154" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.705917820902731" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.4509764960084226" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5065068334483316" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.08558832443708364" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.436908958295096"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8094753869984594" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.037159283360903794">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.21325527884804174">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8228585634831582">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5038902036899262">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6932031974097572"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7358372871912946"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.0011718335569843585"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6368634845607288"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7941209562384548"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6736277063320659"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.21492341916806113"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.011458110808715505"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.02438893347711968"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7645325397185494"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.743249116355954"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.17806688715064234"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.08741814163130868"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8207771675273356"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4821142848028306"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9560000141093119"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8091072146605467"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.29554479578839565"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5834807240603941"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
