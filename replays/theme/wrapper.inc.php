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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6885058610876451" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.30013212037288794" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.1429521851466904" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9033743809237216" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9432437655687316" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8458897837987802" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.886911129100274"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7871950799692518" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8116928214477268">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1751671035768212">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.37703865934090497">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.0907804199653115">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.01807551975135291"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.0950433070705794"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.29529217976244215"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8333447606323308"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6951605301439134"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7680288107324345"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.07136337793672931"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.06854805691797172"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5609039721892211"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.32228014460183463"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9916153106850796"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9065186117290889"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9095289693758837"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6023351675646189"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.09848230137569147"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9809206091328844"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8159823654277105"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.33258503622707014"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.839503207785347"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
