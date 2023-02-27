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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.44346954512844095" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.37620542939944346" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.77321849214862" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3690526465747086" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5537937983440147" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5406164349313554" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9894837117434931"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3017977748127023" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.08629544363701913">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5790871155528168">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.23698553373683207">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7346325016199879">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.765237839596165"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8626181646885991"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.523640584781641"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6388713090363523"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9035143567252508"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3616997116948688"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9373481665438481"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.051580994554387916"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7376736840710267"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8155708765359566"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9606059314594222"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.14256727758832244"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7653075542736318"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9690791515196926"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7306779031405941"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.2726100714967328"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3862211239091895"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.38994387014447907"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.0021415955859904745"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
