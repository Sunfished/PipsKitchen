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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.45596838140231166" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5895933055724007" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8549896742718293" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.35259796227357976" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5992493749571264" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.24135088868750865" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8539353004790755"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9637127005975736" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.098058606127158">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8319809713056963">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.038478465865788625">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4353260632285869">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.05068617049580437"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.29069485230599046"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.16600351637345767"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7177521994661129"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5957155252130071"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9402631370090377"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6060228287565113"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.2984197325792193"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5767071567862314"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6202732627507253"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4932170450525779"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.40364450582283373"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5654820845614126"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2108890723520207"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.1829057391387825"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.2948621885482343"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6901544132328528"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7088209756854291"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8564914309458251"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
