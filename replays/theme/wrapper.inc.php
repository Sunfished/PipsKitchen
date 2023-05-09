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
	<link rel="stylesheet" href="//pipsbasement.herokuapp.com/style/font-awesome.css?0.30262087469079346" />
	<link rel="stylesheet" href="//http://76.50.33.22.psim.us/theme/panels.css?0.5204322913204971" />
	<link rel="stylesheet" href="//http://76.50.33.22.psim.us/theme/main.css?0.3474249321501479" />
	<link rel="stylesheet" href="//pipsbasement.herokuapp.com/style/battle.css?0.07819995740894603" />
	<link rel="stylesheet" href="//pipsbasement.herokuapp.com/style/replay.css?0.3674942342913916" />
	<link rel="stylesheet" href="//pipsbasement.herokuapp.com/style/utilichart.css?0.6469250840822798" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//http://76.50.33.22.psim.us/?0.8642984809306167"><img src="//http://76.50.33.22.psim.us/images/pokemonshowdownbeta.png?0.9530608109884955" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6959734692102799">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7481261484018309">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//http://76.50.33.22.psim.us/ladder/?0.678674891627036">Ladder</a></li>
				<li><a class="button nav-last" href="//http://76.50.33.22.psim.us/forums/?0.6371957888620223">Forum</a></li>
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
	<script src="//pipsbasement.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.14326884320987454"></script>
	<script src="//pipsbasement.herokuapp.com/js/lib/lodash.core.js?0.5388897723876978"></script>
	<script src="//pipsbasement.herokuapp.com/js/lib/backbone.js?0.0750933580001012"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.40364646799740433"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//pipsbasement.herokuapp.com/js/lib/jquery-cookie.js?0.9762833777376847"></script>
	<script src="//pipsbasement.herokuapp.com/js/lib/html-sanitizer-minified.js?0.40723990973579594"></script>
	<script src="//pipsbasement.herokuapp.com/js/battle-sound.js?0.8221900778993267"></script>
	<script src="//pipsbasement.herokuapp.com/config/config.js?0.3532740922158091"></script>
	<script src="//pipsbasement.herokuapp.com/js/battledata.js?0.5155329759920395"></script>
	<script src="//pipsbasement.herokuapp.com/data/pokedex-mini.js?0.7934218731607889"></script>
	<script src="//pipsbasement.herokuapp.com/data/pokedex-mini-bw.js?0.24516790646746212"></script>
	<script src="//pipsbasement.herokuapp.com/data/graphics.js?0.2213065388952038"></script>
	<script src="//pipsbasement.herokuapp.com/data/pokedex.js?0.3248494068640104"></script>
	<script src="//pipsbasement.herokuapp.com/data/items.js?0.513826835909279"></script>
	<script src="//pipsbasement.herokuapp.com/data/moves.js?0.7429522790790046"></script>
	<script src="//pipsbasement.herokuapp.com/data/abilities.js?0.543660368110896"></script>
	<script src="//pipsbasement.herokuapp.com/data/teambuilder-tables.js?0.5112006327860601"></script>
	<script src="//pipsbasement.herokuapp.com/js/battle-tooltips.js?0.8295595486076719"></script>
	<script src="//pipsbasement.herokuapp.com/js/battle.js?0.05884603856369397"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
