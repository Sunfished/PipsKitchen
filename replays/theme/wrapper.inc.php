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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7396128950425682" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3462066233903547" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.30793209892621376" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5092013572272129" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4242038280196947" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4000849168080123" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.39176338106693653"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5400220789589398" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.06978034957331514">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8075873057200318">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6726897299924857">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.17035094326867073">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.14154906737842698"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8571655549160768"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9091974606615831"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6581947336989298"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4408620821235376"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.27279050530126003"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.1291452739505976"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.41447485180293175"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.09075884343372631"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8565104782547157"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.889932177810377"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.38559798622791996"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3829057083390772"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.27233281965719214"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.49973694624952847"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.43114868738944967"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9101191727906521"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9428244195858102"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.14271870123112884"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
