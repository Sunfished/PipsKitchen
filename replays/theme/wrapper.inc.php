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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.38754590745106343" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.03127361743346291" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.26187791314056996" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.31205821265902456" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7444936868237686" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4776802711368682" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.42503698545847124"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.09413886751109857" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.03732961292565906">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.28867356127301913">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4642800347424014">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8993148622192628">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.16127571168798394"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7500187230498299"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.2792330599400161"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7512142989821511"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.572865734610462"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2539529893183059"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.13614796916722693"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8544568686704204"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.36403985570168973"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3794020296411853"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7361552121101309"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5416092090060749"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.014622832379277861"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5415297763998004"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7002928528704664"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7937345443458901"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5376959973109938"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7234770039244054"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.534045543588185"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
