<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->
<div id="pt" class="bm cl">
	<div class="z">
		<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
		<a href="misc.php?mod=ranklist">{lang ranklist}</a> <em>&rsaquo;</em>
		{lang ranklist_poll}
	</div>
</div>

<style id="diy_style" type="text/css"></style>

<!--[diy=diyranklisttop]--><div id="diyranklisttop" class="area"></div><!--[/diy]-->

<div class="bg0 zaobm">
<div class="ct2_a wp cl">
	<div class="mn">
		<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
		<div class="bm bw0">
			<h1 class="mt">{lang ranklist_poll}</h1>
			<ul class="tb cl">
				<li{if $_GET[view] == 'heats'} class="a"{/if}><a href="misc.php?mod=ranklist&type=poll&view=heats&orderby=$orderby">{lang ranklist_hot}</a></li>
				<li{if $_GET[view] == 'favtimes'} class="a"{/if}><a href="misc.php?mod=ranklist&type=poll&view=favtimes&orderby=$orderby">{lang ranklist_favorite}</a></li>
				<li{if $_GET[view] == 'sharetimes'} class="a"{/if}><a href="misc.php?mod=ranklist&type=poll&view=sharetimes&orderby=$orderby">{lang ranklist_share}</a></li>
			</ul>
			<p id="before" class="tbmu">
				<a href="misc.php?mod=ranklist&type=poll&view=$_GET[view]&orderby=thisweek" id="604800" {if $orderby == 'thisweek'}class="a"{/if} />{lang ranklist_week}</a><span class="pipe">|</span>
				<a href="misc.php?mod=ranklist&type=poll&view=$_GET[view]&orderby=thismonth" id="2592000" {if $orderby == 'thismonth'}class="a"{/if} />{lang ranklist_month}</a><span class="pipe">|</span>
				<a href="misc.php?mod=ranklist&type=poll&view=$_GET[view]&orderby=today" id="86400" {if $orderby == 'today'}class="a"{/if} />{lang ranklist_today}</a><span class="pipe">|</span>
				<a href="misc.php?mod=ranklist&type=poll&view=$_GET[view]&orderby=all" id="all" {if $orderby == 'all'}class="a"{/if} />{lang all}</a>
			</p>
			<!--{if $polllist}-->
				<ul class="el pll">
				<!--{loop $polllist $poll}-->
					<li>
						<div class="t"><span class="ranks{if $poll['rank'] <= 3} ranks_$poll['rank']{/if}">$poll['rank']</span></div>
						<div class="cl">
							<div class="u z">
								<a href="home.php?mod=space&uid=$poll['authorid']" class="avt" target="_blank">$poll['avatar']</a>
								<p class="mtn"><a href="home.php?mod=space&uid=$poll['authorid']" target="_blank">$poll['author']</a></p>
							</div>
							<div class="s y">
								<a href="forum.php?mod=viewthread&tid=$poll['tid']" class="joins" target="_blank">
									<span>$poll['voters']</span>{lang people_join}
								</a>
								<a href="forum.php?mod=viewthread&tid=$poll['tid']" class="go" target="_blank">{lang to_poll}</a>
							</div>
							<div class="c">
								<h4 class="h"><a href="forum.php?mod=viewthread&tid=$poll['tid']" target="_blank">$poll['subject']</a></h4>
								<ol>
									<!--{loop $poll['pollpreview'] $item}-->
									<li>$item</li>
									<!--{/loop}-->
									<li style="list-style-type: none;">...</li>
								</ol>
								<div class="mtn xg1">
									<!--{if $_GET[view] == 'favtimes'}-->{lang ranklist_thread_favorite} $poll['favtimes']
									<!--{elseif $_GET[view] == 'sharetimes'}-->{lang ranklist_thread_share} $poll['sharetimes']
									<!--{else}-->{lang hot} $poll['heats']<!--{/if}-->
									<span class="pipe">|</span>
									$poll['dateline']
								</div>
							</div>
						</div>
					</li>
				<!--{/loop}-->
				</ul>
				<div class="pgs cl mtm">$multi</div>
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