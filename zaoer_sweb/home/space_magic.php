<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->
<div id="pt" class="bm cl">
	<div class="z">
		<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
		<a href="home.php?mod=magic">{lang magic}</a>
	</div>
</div>
<div class="bg0 zaobm">
<div id="ct" class="ct2_a wp cl">
	<div class="mn">
		<div class="bm bw0">
			<h1 class="mt">
				<!--{if $action == 'shop'}-->{lang magics_shop}
				<!--{elseif $action == 'mybox'}-->{lang magics_user}
				<!--{elseif $action == 'log'}-->{lang magics_log}
				<!--{else}-->{lang magics_title}<!--{/if}-->
			</h1>
			<!--{if !$_G['setting']['magicstatus'] && $_G['adminid'] == 1}-->
				<div class="emp">{lang magics_tips}</div>
			<!--{/if}-->

			<!--{if $action == 'shop'}-->
				<!--{subtemplate home/space_magic_shop}-->
			<!--{elseif $action == 'mybox'}-->
				<!--{subtemplate home/space_magic_mybox}-->
			<!--{elseif $action == 'log'}-->
				<!--{subtemplate home/space_magic_log}-->
			<!--{/if}-->
		</div>
	</div>
	<div class="appl">
		<div class="tbn">
			<h2 class="mt bbda">{lang magic}</h2>
			<ul>
				<!--{if $_G['group']['allowmagics']}--><li$actives[shop]><a href="home.php?mod=magic&action=shop">{lang magics_shop}</a></li><!--{/if}-->
				<li$actives[mybox]><a href="home.php?mod=magic&action=mybox">{lang magics_user}</a></li>
				<li$actives[log]><a href="home.php?mod=magic&action=log&operation=uselog">{lang magics_log}</a></li>
				<!--{hook/magic_nav_extra}-->
			</ul>
		</div>
	</div>
</div>
</div>
<!--{template common/footer}-->