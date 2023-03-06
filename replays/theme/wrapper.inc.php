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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5527706529722574" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.26783621336387076" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6733950848892003" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.4149997843459061" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5372599735115839" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5059282044826476" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8556152372707533"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.19271092668480172" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.23040387810001972">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8366777736786806">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.790365356308314">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5252103330890403">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4961674451583289"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.05751227950094129"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.1834394183389485"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8316693253085146"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5494986133238093"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.030432149553218713"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8823806543412132"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9704873703167001"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.1251528531291115"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.38535639404474176"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.678466073709171"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7064589838616793"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8169802167978741"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.06559806559534742"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.06111834118841886"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6715958959025674"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.20467538394780038"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8558423838405604"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4405368118215527"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
