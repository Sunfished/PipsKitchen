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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.45956755116927805" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.17355446975449262" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9386568858823627" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.41237088558509605" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9937468058134158" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8015635436242747" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5084294907228646"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8824234823651773" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3429141286904349">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5094319825398113">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.33052343188023725">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.49555762492624433">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7184602756404126"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8184081431000501"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.21400896490246635"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.879732850233546"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.13882052361202923"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9968259621237847"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.14032483067873613"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8917236591437472"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.678807546563609"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5221336838530832"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6123058445170826"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5112330445749174"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4554871817726516"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3005442295887639"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.29541557458832823"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8503566826126954"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7825167599438516"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2824610889304855"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7905036556811107"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
