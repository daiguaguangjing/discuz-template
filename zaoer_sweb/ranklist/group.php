<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->
<div id="pt" class="bm cl">
	<div class="z">
		<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
		<a href="misc.php?mod=ranklist">{lang ranklist}</a> <em>&rsaquo;</em>
		{lang ranklist_group}
	</div>
</div>

<style id="diy_style" type="text/css"></style>

<!--[diy=diyranklisttop]--><div id="diyranklisttop" class="area"></div><!--[/diy]-->

<div class="bg0 zaobm">
<div class="ct2_a wp cl">
	<div class="mn">
		<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
		<div class="bm bw0">
			<h1 class="mt">{lang ranklist_group}</h1>
			<ul class="tb cl">
				<li{if $_GET[view] == 'credit'} class="a"{/if}><a href="misc.php?mod=ranklist&type=group&view=credit">{lang credit_ranking}</a></li>
				<li{if $_GET[view] == 'member'} class="a"{/if}><a href="misc.php?mod=ranklist&type=group&view=member">{lang ranklist_member_num}</a></li>
				<li{if $_GET[view] == 'threads'} class="a"{/if}><a href="misc.php?mod=ranklist&type=group&view=threads">{lang ranklist_post}</a></li>
				<li{if $_GET[view] == 'posts'} class="a"{/if}><a href="misc.php?mod=ranklist&type=group&view=posts">{lang ranklist_reply}</a></li>
				<li{if $_GET[view] == 'today'} class="a"{/if}><a href="misc.php?mod=ranklist&type=group&view=today">{lang ranklist_post_day}</a></li>
			</ul>
			<!--{if $groupsrank}-->
				<div class="tl">
					<table cellspacing="0" cellpadding="0">
						<tr>
							<td class="icn" height="36">&nbsp;</td>
							<th>{lang group}<!--{if $_GET[view] == 'credit'}-->({lang ranklist_group_credit})<!--{/if}--></th>
							<td width="100">
								<!--{if $_GET[view] == 'today'}-->{lang ranklist_forum_day_post}
								<!--{elseif $_GET[view] == 'posts'}-->{lang reply}
								<!--{elseif $_GET[view] == 'thismonth'}-->{lang ranklist_forum_month_post}
								<!--{elseif $_GET[view] == 'credit'}-->{lang credit_num}
								<!--{elseif $_GET[view] == 'member'}-->{lang member_num}
								<!--{else}-->{lang ranklist_forum_post}<!--{/if}-->
							</td>
						</tr>
						<!--{loop $groupsrank $forum}-->
							<tr>
								<td class="icn" height="36"><span class="ranks{if $forum['rank'] <= 3} ranks_$forum['rank']{/if}">$forum['rank']</span></td>
								<th><a href="forum.php?mod=forumdisplay&fid=$forum['fid']" target="_blank">$forum['name']</a></th>
								<td>
									<!--{if $_GET[view] == 'credit'}-->$forum['commoncredits']
									<!--{elseif $_GET[view] == 'member'}-->$forum['membernum']
									<!--{else}-->$forum['posts']<!--{/if}-->
								</td>
							</tr>
						<!--{/loop}-->
					</table>
				</div>
			<!--{else}-->
				<div class="emp">{lang none_data}</div>
			<!--{/if}-->
			<div class="notice">{lang ranklist_update}</div>
		</div>
		<!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]-->
	</div>

	<div class="appl">
		<!--[diy=diysidetop]--><div id="diysidetop" class="area"></div><!--[/diy]-->
		<!--{subtemplate ranklist/side_left}-->
		<!--[diy=diysidebottom]--><div id="diysidebottom" class="area"></div><!--[/diy]-->
	</div>
</div>
</div>

<!--[diy=diyranklistbottom]--><div id="diyranklistbottom" class="area"></div><!--[/diy]-->

<!--{template common/footer}-->