<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->
<div id="pt" class="bm cl">
	<div class="z">
		<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
		<a href="misc.php?mod=ranklist">{lang ranklist}</a> <em>&rsaquo;</em>
		{lang ranklist_thread}
	</div>
</div>

<style id="diy_style" type="text/css"></style>

<!--[diy=diyranklisttop]--><div id="diyranklisttop" class="area"></div><!--[/diy]-->

<div class="bg0 zaobm">
<div class="ct2_a wp cl">
	<div class="mn">
		<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
		<div class="bm bw0">
			<h1 class="mt">{lang ranklist_thread}</h1>
			<ul class="tb cl">
				<li{if $_GET[view] == 'replies'} class="a"{/if}><a href="misc.php?mod=ranklist&type=thread&view=replies&orderby=$orderby">{lang ranklist_reply}</a></li>
				<li{if $_GET[view] == 'views'} class="a"{/if}><a href="misc.php?mod=ranklist&type=thread&view=views&orderby=$orderby">{lang visit_ranklist}</a></li>
				<li{if $_GET[view] == 'sharetimes'} class="a"{/if}><a href="misc.php?mod=ranklist&type=thread&view=sharetimes&orderby=$orderby">{lang ranklist_share}</a></li>
				<li{if $_GET[view] == 'favtimes'} class="a"{/if}><a href="misc.php?mod=ranklist&type=thread&view=favtimes&orderby=$orderby">{lang ranklist_favorite}</a></li>
				<li{if $_GET[view] == 'heats'} class="a"{/if}><a href="misc.php?mod=ranklist&type=thread&view=heats&orderby=$orderby">{lang ranklist_hot}</a></li>
			</ul>
			<p id="before" class="tbmu{if $threadlist} bw0{/if}">
				<a href="misc.php?mod=ranklist&type=thread&view=$_GET[view]&orderby=thisweek" id="604800" {if $orderby == 'thisweek'}class="a"{/if} />{lang ranklist_week}</a><span class="pipe">|</span>
				<a href="misc.php?mod=ranklist&type=thread&view=$_GET[view]&orderby=thismonth" id="2592000" {if $orderby == 'thismonth'}class="a"{/if} />{lang ranklist_month}</a><span class="pipe">|</span>
				<a href="misc.php?mod=ranklist&type=thread&view=$_GET[view]&orderby=today" id="86400" {if $orderby == 'today'}class="a"{/if} />{lang ranklist_today}</a><span class="pipe">|</span>
				<a href="misc.php?mod=ranklist&type=thread&view=$_GET[view]&orderby=all" id="all" {if $orderby == 'all'}class="a"{/if} />{lang all}</a>
			</p>
			<!--{if $threadlist}-->
				<div class="tl">
					<table cellspacing="0" cellpadding="0">
						<tbody>
							<tr class="th">
								<td class="icn">&nbsp;</td>
								<th>{lang thread}</th>
								<td class="frm">{lang forum}</td>
								<td class="by">{lang author}</td>
								<td width="60">
									<!--{if $_GET[view] == 'views'}-->{lang ranklist_thread_view}
									<!--{elseif $_GET[view] == 'sharetimes'}-->{lang ranklist_thread_share}
									<!--{elseif $_GET[view] == 'favtimes'}-->{lang ranklist_thread_favorite}
									<!--{elseif $_GET[view] == 'heats'}-->{lang ranklist_thread_heat}
									<!--{else}-->{lang ranklist_thread_reply}<!--{/if}-->
								</td>
							</tr>
						</tbody>
						<!--{loop $threadlist $thread}-->
							<tr>
								<td class="icn"><span class="ranks{if $thread['rank'] <= 3} ranks_$thread['rank']{/if}">$thread['rank']</span></td>
								<th><a href="forum.php?mod=viewthread&tid={$thread['tid']}" target="_blank">$thread['subject']</a></th>
								<td class="frm"><a href="forum.php?mod=forumdisplay&fid={$thread['fid']}" class="xg1" target="_blank">$thread['forum']</a></td>
								<td class="by">
									<cite><a href="home.php?mod=space&uid={$thread['authorid']}" target="_blank">$thread['author']</a></cite>
									<em>$thread['dateline']</em>
								</td>
								<td>
									<!--{if $_GET[view] == 'views'}--><a href="forum.php?mod=viewthread&tid={$thread['tid']}" class="xi2" target="_blank">$thread['views']</a>
									<!--{elseif $_GET[view] == 'sharetimes'}--><a href="forum.php?mod=viewthread&tid={$thread['tid']}" class="xi2" target="_blank">$thread['sharetimes']</a>
									<!--{elseif $_GET[view] == 'favtimes'}--><a href="forum.php?mod=viewthread&tid={$thread['tid']}" class="xi2" target="_blank">$thread['favtimes']</a>
									<!--{elseif $_GET[view] == 'heats'}--><a href="forum.php?mod=viewthread&tid={$thread['tid']}" class="xi2" target="_blank">$thread['heats']</a>
									<!--{else}--><a href="forum.php?mod=viewthread&tid={$thread['tid']}" class="xi2" target="_blank">$thread['replies']</a><!--{/if}-->
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