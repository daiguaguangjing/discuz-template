<?php echo 'QQ:2039074300';exit;?>
<!--{eval
	$space_uid = $space['uid'];
	$_G['home_tpl_spacemenus'][] = "<a href=\"home.php?mod=space&uid=$space_uid&do=debate&view=me\">{lang they_debate}</a>";
}-->
<!--{template common/header}-->

<div id="pt" class="bm cl">
	<div class="z">
		<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
		<a href="home.php?mod=space&do=thread">{lang post}</a> <em>&rsaquo;</em>
		<a href="home.php?mod=space&uid=$space[uid]&do=debate&view=me">{lang debate}</a>
	</div>
</div>

<style id="diy_style" type="text/css"></style>
<div class="wp">
	<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>

<div class="bg0 zaobm">
<div id="ct" class="ct2_a wp cl">
	<div class="mn">
		<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
		<div class="bm bw0">
		<!--{if (!$_G['uid'] && !$space[uid]) || $space[self]}-->
			<h1 class="mt"><i class="fico-vs fic4 fc-p vm"></i>{lang debate}</h1>
		<!--{/if}-->
		<!--{if $space[self]}-->
			<ul class="tb cl">
				<li$actives[we]><a href="home.php?mod=space&do=debate&view=we">{lang friend_debate}</a></li>
				<li$actives[me]><a href="home.php?mod=space&do=debate&view=me">{lang my_debate}</a></li>
				<!--{if $_G[group][allowpostdebate]}-->
					<li class="o">
						<!--{if $_G[setting][debateforumid]}-->
						<a href="forum.php?mod=post&action=newthread&fid=$_G[setting][debateforumid]&special=5">{lang create_new_debate}</a>
						<!--{else}-->
						<a href="forum.php?mod=misc&action=nav&special=5" onclick="showWindow('nav', this.href)">{lang create_new_debate}</a>
						<!--{/if}-->
					</li>
				<!--{/if}-->
			</ul>
		<!--{else}-->
			<!--{template home/space_menu}-->
		<!--{/if}-->

		<!--{if $_GET[view] == 'me'}-->
			<p class="tbmu">
				<a href="home.php?mod=space&do=debate&view=me"$typeactives[orig]>{lang my_create_debate}</a><span class="pipe">|</span>
				<a href="home.php?mod=space&do=debate&view=me&type=reply"$typeactives[reply]>{lang my_join_debate}</a>
			</p>
		<!--{/if}-->

		<!--{if $userlist}-->
			<p class="tbmu">
				{lang view_by_friend}
				<select name="fuidsel" onchange="fuidgoto(this.value);" class="ps">
					<option value="">{lang all_friends}</option>
					<!--{loop $userlist $value}-->
					<option value="$value[fuid]"{$fuid_actives[$value[fuid]]}>$value[fusername]</option>
					<!--{/loop}-->
				</select>
			</p>
		<!--{/if}-->

		<!--{if $count}-->
			<!--{loop $special $tid $thread}-->
			<div class="ds bbda mbw">
				<h3 class="ph mbn"><a href="forum.php?mod=viewthread&tid=$thread[tid]" class="xi2" target="_blank">$thread[subject]</a></h3>
				<p class="xg2 mbw hm">$thread[message]</p>
				<table summary="{lang debate_all_point}" cellspacing="0" cellpadding="0">
					<tr>
						<td class="si_1">
							<div class="point">
								<strong>{lang affirm_votes} ($thread[affirmvotes])</strong>
								<p>$thread[affirmpoint]</p>
							</div>
						</td>
						<td class="sc_1">
							<div class="point_chart cur1" title="{lang chart_support}" href="forum.php?mod=misc&action=debatevote&tid=$thread[tid]&stand=1" id="affirmbutton_$thread[tid]" onclick="ajaxmenu(this);doane(event);" >
								<div class="chart" style="height: $thread[affirmvotesheight];" title="{lang debate_square} ($thread[affirmvotes])"></div>
							</div>
						</td>
						<th><div>VS</div></th>
						<td class="sc_2">
							<div class="point_chart cur1" title="{lang chart_support}" href="forum.php?mod=misc&action=debatevote&tid=$thread[tid]&stand=2" id="negabutton_$thread[tid]" onclick="ajaxmenu(this);doane(event);">
								<div class="chart" style="height: $thread[negavotesheight];" title="{lang debate_opponent} ($thread[negavotes])"></div>
							</div>
						</td>
						<td class="si_2">
							<div class="point">
								<strong>{lang nega_votes} ($thread[negavotes])</strong>
								<p>$thread[negapoint]</p>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<!--{/loop}-->

			<div class="tl">
				<!--{if $list}-->
				<table cellspacing="0" cellpadding="0">
					<tr>
						<td class="icn">&nbsp;</td>
						<th>&nbsp;</th>
						<td class="num">{lang affirm}</td>
						<td class="num">{lang nega}</td>
						<td class="num">{lang popularity}</td>
						<td width="55">{lang rate}</td>
					</tr>
					<!--{loop $list $tid $thread}-->
					<tr>
						<td>
							<a href="forum.php?mod=viewthread&tid=$thread[tid]" title="{lang open_new_window}" target="_blank">
								<!--{if $thread['special'] == 5}-->
									<i class="fico-vs fic6 fc-n"></i>
								<!--{elseif in_array($thread['displayorder'], array(1, 2, 3, 4))}-->
									<i class="tpin tpin{$thread[displayorder]}"><svg width="18" height="18"><path d="M9 0l9 9H14v9H4V9H0z"></path></svg></i>
								<!--{else}-->
									<i class="fico-thread fic6 fc-s"></i>
								<!--{/if}-->
							</a>
						</td>
						<th height="45">
							<a href="forum.php?mod=viewthread&tid=$thread[tid]" class="xi2" target="_blank">$thread[subject]</a>
							<!--{if $thread['digest'] > 0}-->
								<span class="tbox tdigest">{lang digest}$thread[digest]</span>
							<!--{/if}-->
							<!--{if $thread['attachment'] == 2}-->
								<i class="fico-image fic4 fc-p fnmr vm" title="{lang photo_accessories}"></i>
							<!--{elseif $thread['attachment'] == 1}-->
								<i class="fico-attachment fic4 fc-p fnmr vm" title="{lang accessory}"></i>
							<!--{/if}-->
							<!--{if $thread[multipage]}--><span class="tps">$thread[multipage]</span><!--{/if}-->
						</th>
						<td class="xi1">$thread[affirmvotes]</td>
						<td class="xi2">$thread[negavotes]</td>
						<td>$thread[replies]</td>
						<td><!--{if !$thread[closed]}-->{lang ongoing}<!--{else}--><!--{if $thread[winner]}--><!--{if $thread[winner]==1}-->{lang affirm}<!--{else}-->{lang nega}<!--{/if}-->{lang win}<!--{else}-->{lang draw}<!--{/if}--><!--{/if}--></td>
					</tr>
					<!--{/loop}-->
				</table>
				<!--{/if}-->
				<!--{if $hiddennum}-->
					<p class="mtm">{lang hide_debate}</p>
				<!--{/if}-->
			</div>

			<!--{if $multi}--><div class="pgs cl mtm">$multi</div><!--{/if}-->
		<!--{else}-->
			<div class="emp">{lang no_debate}</div>
		<!--{/if}-->
		</div>
		<!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]-->
	</div>
	<div class="appl">
		<!--{subtemplate home/space_thread_nav}-->
		<div class="drag">
			<!--[diy=diy2]--><div id="diy2" class="area"></div><!--[/diy]-->
		</div>
	</div>
</div>
</div>

<div class="wp mtn">
	<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>

<script type="text/javascript">
	function fuidgoto(fuid) {
		var parameter = fuid != '' ? '&fuid='+fuid : '';
		window.location.href = 'home.php?mod=space&do=debate&view=we'+parameter;
	}
</script>

<!--{template common/footer}-->