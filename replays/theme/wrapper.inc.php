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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6267595916910609" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.11203761789074917" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5332499986368642" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5106772289556796" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7785641911747438" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.15240173180003835" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.14477703224904537"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7640181488921469" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.623339351772213">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9714480213395127">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.1342964494879808">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7001123921571408">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5518775117166177"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7984198267084399"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.589997748918583"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9090926292506987"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3375853495010508"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6989797410237508"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3176915300134713"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.21542618633650856"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7554405513632128"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7813210777357364"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8497011442198219"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.23935689626680867"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6011750088775145"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8220077114232127"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.43467368409507157"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.39455972246717574"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7902437150668735"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.11694034311800827"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1911680583483315"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
