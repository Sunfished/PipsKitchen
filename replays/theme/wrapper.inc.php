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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7589490548306288" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5899190912599208" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9132660313142349" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.14466015797996024" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.34935219105134174" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.845011668377587" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.33687732694736905"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.34223793165364524" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5347804470333115">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7224009519351564">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4103571591061357">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.654773528915445">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7700582797133049"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.13362804080126311"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9868840108172572"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9780291490923043"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3865576256958143"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.724503890575225"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8102268077910628"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.29267349699248624"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7345632582650192"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.38762171094213094"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.35480624711546094"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9849415746476018"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8978342130605004"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8225166552823022"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7692762555804462"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.2996821826250893"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3210153404924856"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3819902536122628"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5811957899372111"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
