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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6193437606049779" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.534750313165572" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7788905878794681" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.19740778069772458" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.44355553592446495" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5373159398007201" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.4529493506803679"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5424556064678487" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8970680369750388">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.48043812323492885">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5030011085898394">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9216877304908666">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.897204465509394"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9361748555487275"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9041665706052286"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.399401120320253"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.19707962276127122"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3943778503329578"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4298717046804381"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6038674788704435"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9921859546530041"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7730619472271909"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5600065846302726"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.873567650607473"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9771408638252506"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8689271192812771"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7073969325283798"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5666462156995828"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5711315526531391"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9466955593683704"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.02422409055852115"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
