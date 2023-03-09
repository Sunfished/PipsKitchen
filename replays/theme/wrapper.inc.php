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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5426401382851662" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8740243321272287" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3943871491880844" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.2639492715915215" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9007810065470898" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.0895003918023296" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3678166486091179"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.33108760230658474" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.946288343906232">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.37693366711608434">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3403254474370867">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.2739264300348143">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2677269381062166"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.05306018108343169"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8699355831643563"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.790275227944794"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5704634818003764"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9585550637665277"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7407210892814533"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5685243427120883"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3105937706244426"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4277261139191566"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4650268954873582"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9985153553676236"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3022666899263313"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9542688460592617"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.3293827685877093"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9275483253496035"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.022890536576316567"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3294473574373227"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5346171675883893"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
