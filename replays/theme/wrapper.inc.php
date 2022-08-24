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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5491106905766858" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3952734741364359" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.48235923929622393" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9227552350837522" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9400207288112168" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7217398455238855" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.08287708336417499"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9957168489118378" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8876533549866383">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3255825408330322">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.22093648133741595">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4525067918027783">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.08113913220150093"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.23340312988609724"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6071229821131459"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.47050307359055"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.018876660520408706"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.13400809416201698"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4464785255681434"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7729026777068038"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.024823390780633003"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.49376317759926946"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.581360927276803"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.33711132267452104"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.39104517107458525"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8916599555317266"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.28740546563401903"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8968723156896083"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5402686774128926"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.025629807892952883"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5988429885130757"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
