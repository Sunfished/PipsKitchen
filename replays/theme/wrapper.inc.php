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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6985477179314437" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2765986559715179" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8901462666616782" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.852404772814986" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3707459453703077" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.10197265388823551" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8576941040266823"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.16282020888640947" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.955916646187347">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8071826788282783">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8753183903203494">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3799600973477226">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3094620473737706"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7107544669595505"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.533770137658756"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24783074954917583"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8519943271692927"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6982421091853932"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.22876767171512324"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7291563984595117"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.09842271778872025"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.08598646037104585"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.14278020511158873"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5658111136125199"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.22464138913984755"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.35056888353633364"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.777885037997647"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6576298730355583"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.45856906199680125"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8620218045903048"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.05901213307971642"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
