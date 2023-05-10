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
	<link rel="stylesheet" href="//pipsbasement.herokuapp.com/style/font-awesome.css?0.25783319192184795" />
	<link rel="stylesheet" href="//http://76.50.33.22.psim.us/theme/panels.css?0.3327503713257436" />
	<link rel="stylesheet" href="//http://76.50.33.22.psim.us/theme/main.css?0.22394051331930687" />
	<link rel="stylesheet" href="//pipsbasement.herokuapp.com/style/battle.css?0.764190278879638" />
	<link rel="stylesheet" href="//pipsbasement.herokuapp.com/style/replay.css?0.5035951706198796" />
	<link rel="stylesheet" href="//pipsbasement.herokuapp.com/style/utilichart.css?0.8859755552931532" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//http://76.50.33.22.psim.us/?0.806142172069853"><img src="//http://76.50.33.22.psim.us/images/pokemonshowdownbeta.png?0.06528892933930375" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.44879992867470997">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5604373128929565">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//http://76.50.33.22.psim.us/ladder/?0.26594885882715213">Ladder</a></li>
				<li><a class="button nav-last" href="//http://76.50.33.22.psim.us/forums/?0.3828368975884213">Forum</a></li>
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
	<script src="//pipsbasement.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9088709125052266"></script>
	<script src="//pipsbasement.herokuapp.com/js/lib/lodash.core.js?0.04043453976183731"></script>
	<script src="//pipsbasement.herokuapp.com/js/lib/backbone.js?0.25990827403984884"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9860691673812974"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//pipsbasement.herokuapp.com/js/lib/jquery-cookie.js?0.2006211940859577"></script>
	<script src="//pipsbasement.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6606476782267034"></script>
	<script src="//pipsbasement.herokuapp.com/js/battle-sound.js?0.02984161574593691"></script>
	<script src="//pipsbasement.herokuapp.com/config/config.js?0.3600438771100394"></script>
	<script src="//pipsbasement.herokuapp.com/js/battledata.js?0.4298184167143928"></script>
	<script src="//pipsbasement.herokuapp.com/data/pokedex-mini.js?0.6380224905263505"></script>
	<script src="//pipsbasement.herokuapp.com/data/pokedex-mini-bw.js?0.6544747850096762"></script>
	<script src="//pipsbasement.herokuapp.com/data/graphics.js?0.21444704487086463"></script>
	<script src="//pipsbasement.herokuapp.com/data/pokedex.js?0.6527339473622247"></script>
	<script src="//pipsbasement.herokuapp.com/data/items.js?0.8428110211346813"></script>
	<script src="//pipsbasement.herokuapp.com/data/moves.js?0.3112737235869556"></script>
	<script src="//pipsbasement.herokuapp.com/data/abilities.js?0.40837930929787936"></script>
	<script src="//pipsbasement.herokuapp.com/data/teambuilder-tables.js?0.538541994512068"></script>
	<script src="//pipsbasement.herokuapp.com/js/battle-tooltips.js?0.3476240307427023"></script>
	<script src="//pipsbasement.herokuapp.com/js/battle.js?0.6321161319250754"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
