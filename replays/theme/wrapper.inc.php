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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.22700251404384741" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5990467179938364" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.15241307218670785" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7609698160397256" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4224618123487729" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.40845296088189564" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.808943128040122"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.29422127307950197" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5925272795928744">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.44309850669244333">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7549014275436028">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5117929220056916">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9465788230722316"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.863018116784309"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6129994030664832"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.43587329219373494"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2661552090906265"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.07968142620267216"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7461920898693315"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.25492559845390805"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.1265580496453289"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3496728207115787"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.14207212521587254"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2563938184062402"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.33333721042518705"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6998104638484877"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.25169165717306496"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.17850063693609308"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.23126534694330814"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5880530476800725"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.2714540850152254"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
