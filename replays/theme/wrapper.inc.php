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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6985553237199731" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4775585522382262" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.14526139839016827" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.4501030651577249" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7691826312786936" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.662942900508203" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6434867130087272"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4070061916657137" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.563305540357147">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9429281993771372">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9194309162132239">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7914049404896808">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9052446812718096"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.44375352409835656"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.432261940352346"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5649433804525033"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.794886017897281"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.41306247673467156"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.47963343190122565"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.04362238588129408"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6218796888427864"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8377358030643851"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.04601469752720733"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.10561809257321864"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.004478343724495071"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7362170993947355"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.33001469501742675"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4786347833084339"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.13652849759006025"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7402808545000479"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.22886438942457965"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
