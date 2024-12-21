<?php echo 'QQ:2039074300';exit;?>
<!--{if $list['threadcount']}-->
	<!--{loop $list['threadlist'] $key $thread}-->
		<tbody id="$thread[id]">
			<tr>
				<!--{if !$thread['author']}-->
				<td class="tl_avatar"><a><img src="<!--{avatar($thread['0'], 'middle', true)}-->"></a></td>
				<!--{else}-->
				<td class="tl_avatar"><a href="home.php?mod=space&uid={$thread['authorid']}&do=profile"><img src="<!--{avatar($thread['authorid'], 'middle', true)}-->"></a></td>
				<!--{/if}-->
				<th style="width:100%;">
					<div class="tl_tit cl">
						<!--{if !$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])}-->
							<!--{eval $thread['tid']=$thread['closed'];}-->
						<!--{/if}-->
						$thread[typehtml] $thread[sorthtml]
						<!--{if $thread['moved']}-->
							{lang thread_moved}:<!--{eval $thread['tid']=$thread['closed'];}-->
						<!--{/if}-->
						<a href="forum.php?mod=viewthread&tid=$thread[tid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra"{$thread[highlight]} target="_blank" class="xst" >$thread[subject]</a><!--{if $_G['setting']['threadhidethreshold'] && $thread['hidden'] >= $_G['setting']['threadhidethreshold']}-->&nbsp;<span class="xg1">{lang hidden}</span>&nbsp;<!--{/if}--><!--{if $view == 'hot'}-->&nbsp;<span class="xi1">$thread['heats']{lang guide_attend}</span>&nbsp;<!--{/if}-->
						<a href="forum.php?mod=viewthread&tid=$thread[icontid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra" title="{if $thread['displayorder'] == 1}{lang thread_type1} - {/if}
							{if $thread['displayorder'] == 2}{lang thread_type2} - {/if}
							{if $thread['displayorder'] == 3}{lang thread_type3} - {/if}
							{if $thread['displayorder'] == 4}{lang thread_type4} - {/if}
							{if $thread[folder] == 'lock'}{lang closed_thread} - {/if}
							{if $thread['special'] == 1}{lang thread_poll} - {/if}
							{if $thread['special'] == 2}{lang thread_trade} - {/if}
							{if $thread['special'] == 3}{lang thread_reward} - {/if}
							{if $thread['special'] == 4}{lang thread_activity} - {/if}
							{if $thread['special'] == 5}{lang thread_debate} - {/if}
							{if $thread[folder] == "new"}{lang have_newreplies} - {/if}
							{lang target_blank}" target="_blank">
						<!--{if $thread[folder] == 'lock'}-->
							<i class="fico-lock fic4 fc-s"></i>
						<!--{elseif $thread['special'] == 1}-->
							<i class="fico-vote fic4 fc-n"></i>
						<!--{elseif $thread['special'] == 2}-->
							<i class="fico-cart fic4 fc-n"></i>
						<!--{elseif $thread['special'] == 3}-->
							<i class="fico-reward fic4 fc-n"></i>
						<!--{elseif $thread['special'] == 4}-->
							<i class="fico-group fic4 fc-n"></i>
						<!--{elseif $thread['special'] == 5}-->
							<i class="fico-vs fic4 fc-n"></i>
						<!--{elseif in_array($thread['displayorder'], array(1, 2, 3, 4))}-->
						<!--{else}-->
						<!--{/if}-->
						</a>
						<!--{if $thread[icon] >= 0}-->
							<img src="{STATICURL}image/stamp/{$_G[cache][stamps][$thread[icon]][url]}" alt="{$_G[cache][stamps][$thread[icon]][text]}" class="vm" />
						<!--{/if}-->
						<!--{if $thread['rushreply']}-->
							<span class="tbox rushrep">{lang rushreply}</span>
						<!--{/if}-->
						<!--{if $stemplate && $sortid}-->$stemplate[$sortid][$thread[tid]]<!--{/if}-->
						<!--{if $thread['readperm']}--> - [{lang readperm} <span class="xw1">$thread[readperm]</span>]<!--{/if}-->
						<!--{if $thread['price'] > 0}-->
							<!--{if $thread['special'] == '3'}-->
							- <span class="xi1">[{lang thread_reward} <span class="xw1">$thread[price]</span> {$_G[setting][extcredits][$_G['setting']['creditstransextra'][2]][unit]}{$_G[setting][extcredits][$_G['setting']['creditstransextra'][2]][title]}]</span>
							<!--{else}-->
							- [{lang price} <span class="xw1">$thread[price]</span> {$_G[setting][extcredits][$_G['setting']['creditstransextra'][1]][unit]}{$_G[setting][extcredits][$_G['setting']['creditstransextra'][1]][title]}]
							<!--{/if}-->
						<!--{elseif $thread['special'] == '3' && $thread['price'] < 0}-->
							- [{lang reward_solved}]
						<!--{/if}-->
						<!--{if $thread['attachment'] == 2}-->
							<i class="fico-image fic4 fc-p fnmr vm xg2" title="{lang attach_img}"></i>
						<!--{elseif $thread['attachment'] == 1}-->
							<i class="fico-attachment fic4 fc-p fnmr vm xg2" title="{lang attachment}"></i>
						<!--{/if}-->
						<!--{if $thread['digest'] > 0 && $filter != 'digest'}-->
							<span class="tbox tdigest">{lang thread_digest}$thread[digest]</span>
						<!--{/if}-->
						<!--{if $thread['displayorder'] == 0}-->
							<!--{if $thread[recommendicon] && $filter != 'recommend'}-->
								<span class="tbox trecic" title="{lang thread_recommend} $thread[recommends]">{lang thread_recommend_icon}</span>
							<!--{/if}-->
							<!--{if $thread[heatlevel]}-->
								<span class="tbox theatlevel" title="$thread[heatlevel] {lang heats}">{lang heats_icon}{if $thread[heatlevel]>1}..{/if}{if $thread[heatlevel]>2}.{/if}</span>
							<!--{/if}-->
							<!--{if $thread['rate'] > 0}-->
								<i class="fico-thumbup fic4 fc-l fnmr vm" title="{lang rate_credit_add}"></i>
							<!--{elseif $thread['rate'] < 0}-->
								<i class="fico-thumbdown fic4 fc-a fnmr vm" title="{lang posts_deducted}"></i>
							<!--{/if}-->
						<!--{/if}-->
						<!--{if $thread['replycredit'] > 0}-->
							- <span class="xi1">[{lang replycredit} <strong> $thread['replycredit']</strong> ]</span>
						<!--{/if}-->
						<!--{if $thread[multipage]}-->
							<span class="tps">$thread[multipage]</span>
						<!--{/if}-->
						<!--{if $thread['weeknew']}-->
							<a href="forum.php?mod=redirect&tid=$thread[tid]&goto=lastpost#lastpost" class="xi1">New</a>
						<!--{/if}-->
						<!--{if !$thread['forumstick'] && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])}-->
							<!--{if $thread['related_group'] == 0 && $thread['closed'] > 1}-->
								<!--{eval $thread['tid']=$thread['closed'];}-->
							<!--{/if}-->
						<!--{/if}-->
					</div>
					<div class="tl_txt cl">
						<!--{if $thread['authorid'] && $thread['author']}-->
							<a href="home.php?mod=space&uid=$thread[authorid]" c="1">$thread[author]</a>
							<!--{if !empty($verify[$thread['authorid']])}--> $verify[$thread[authorid]]<!--{/if}-->
						<!--{else}-->
							$_G[setting][anonymoustext]
						<!--{/if}-->
						<span class="xg2">&nbsp;$thread[dateline]</span>
						<span class="y">
							<a href="forum.php?mod=forumdisplay&fid=$thread[fid]" target="_blank">$list['forumnames'][$thread[fid]]['name']</a>
							<i style="margin-left:10px;">{lang reply}$thread[replies]</i>
							<i style="margin-left:10px;">{lang views}<!--{if $thread['isgroup'] != 1}-->$thread[views]<!--{else}-->{$groupnames[$thread[tid]][views]}<!--{/if}--></i>
						</span>
					</div>
				</th>
			</tr>
		</tbody>
		<!--{if $view == 'my' && $viewtype=='reply' && !empty($tids[$thread[tid]])}-->
			<tbody class="bw0_all">
				<tr>
					<td class="icn">&nbsp;</td>
					<th colspan="5">
						<!--{loop $tids[$thread[tid]] $pid}-->
						<!--{eval $post = $posts[$pid];}-->
						<div class="tl_reply pbm xg1"><a href="forum.php?mod=redirect&goto=findpost&ptid=$thread[tid]&pid=$pid" target="_blank"><!--{if $post[message]}-->{$post[message]}<!--{else}-->...<!--{/if}--></a></div>
						<!--{/loop}-->
					</th>
				</tr>
			</tbody>
			<tr><td colspan="6"></td></tr>
		<!--{/if}-->
		<!--{if $view == 'my' && $viewtype=='postcomment'}-->
			<tr>
				<td class="icn">&nbsp;</td>
				<th colspan="5" class="xg1">$thread[comment]</th>
			</tr>
		<!--{/if}-->
	<!--{/loop}-->
<!--{else}-->
	<tbody class="bw0_all"><tr><th colspan="5"><p class="emp">{lang guide_nothreads}</p></th></tr></tbody>
<!--{/if}-->