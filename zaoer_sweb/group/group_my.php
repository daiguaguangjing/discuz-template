<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->

<div id="pt" class="bm cl">
	<div class="z">
		<a href="./" class="nvhm" title="{lang home}">$_G[setting][bbname]</a><em>&rsaquo;</em><a href="group.php?mod=index">{lang group}</a><em>&rsaquo;</em><a href="group.php?mod=my">{$_G[username]}{lang somebody_group}</a>
	</div>
</div>

<!--{hook/my_header}-->

<style id="diy_style" type="text/css"></style>
<div class="wp">
	<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>

<div id="ct" class="ct2 wp cl">
	<div class="mn">
		<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
		<div class="tb cl" style="margin-top: 0;">
			<ul>
				<li $actives[groupthread]><a href="group.php?mod=my&view=groupthread">{lang group_thread}</a></li>
				<li $actives[mythread]><a href="group.php?mod=my&view=mythread">{lang my_thread}</a></li>
				<li $actives[join]><a href="group.php?mod=my&view=join">{lang my_join}</a></li>
				<li $actives[manager]><a href="group.php?mod=my&view=manager">{lang my_manage}</a></li>
				<li class="y"><a href="group.php?mod=index" class="groupbtn xi2"><span>{lang all_group}&nbsp;&rsaquo;</span></a></li>

				<li class="y">
                	<a onclick="showWindow('attentiongroup', 'group.php?mod=attentiongroup', 'get', 0);" class="groupbtn xi2"><span>{lang attention_group}</span></a>
                </li>
				<script language="javascript">
					function succeedhandle_attentiongroup(locationhref) {
						hideWindow('attentiongroup');
						location.href = locationhref;
					} 
				</script>

			</ul>
		</div>
		<!--{if $view == 'groupthread' || $view == 'mythread'}-->
		<ul class="ttp cl">
			<li id="ttp_all"{if empty($typeid)} class="xw1 a"{/if}><a href="group.php?mod=my&view=$view">{lang all}</a></li>
			<!--{loop $usergroups['grouptype'] $type}-->
				<li{if $typeid == $type['fid']} class="xw1 a"{/if}><a href="group.php?mod=my&view=$view{if $typeid != $type['fid']}&typeid=$type[fid]{/if}">$type[name]</a></li>
			<!--{/loop}-->
		</ul>

		<!--{if $attentionthread}-->
			<!--{loop $attentionthread $groupid $threads}-->
				<div class="bm tl">
					<div class="th">
						<table cellspacing="0" cellpadding="0" class="th">
							<tr>
								<td colspan="2"><a href="forum.php?mod=group&fid=$groupid" target="_blank" class="xw1">{$usergroups['groups'][$groupid]}</a></td>
								<td class="num">{lang replies}</td>
								<td class="by">{lang last_post}</td>
							</tr>
						</table>
					</div>
					<div class="bm_c">
						<table cellspacing="0" cellpadding="0">
						<!--{loop $threads $tid $thread}-->
						<tr>
							<td class="icn">
								<a href="forum.php?mod=viewthread&tid=$tid" title="{lang open_new_window}" target="_blank">
								<!--{if $thread[folder] == 'lock'}-->
									<i class="fico-lock fic6 fc-s"></i>
								<!--{elseif in_array($thread['displayorder'], array(1, 2, 3, 4))}-->
									<i class="tpin tpin{$thread[displayorder]}" alt="$_G[setting][threadsticky][3-$thread[displayorder]]"><svg width="18" height="18"><path d="M9 0l9 9H14v9H4V9H0z"></path></svg></i>
								<!--{else}-->
									<i class="fico-thread fic6 {if $thread[folder]=='new'}fc-l{else}fc-n{/if}"></i>
								<!--{/if}-->
								</a>
							</td>
							<td><a href="forum.php?mod=viewthread&tid=$tid" target="_blank">$thread[subject]</a></td>
							<td class="num">
								<a href="forum.php?mod=viewthread&tid=$tid" class="xi2">$thread[replies]</a>
								<em>$thread[views]</em>
							</td>
							<td class="by">
								<cite><!--{if $thread['lastposter']}--><a href="home.php?mod=space&username=$thread[lastposter]">$thread[lastposter]</a><!--{else}-->{lang anonymous}<!--{/if}--></cite>
								<em><a href="forum.php?mod=viewthread&tid=$tid&page={echo max(1, $thread[pages]);}">$thread[lastpost]</a></em>
							</td>
						</tr>
						<!--{/loop}-->
						</table>
						<div class="ptm"><a href="forum.php?mod=group&fid=$groupid" class="xi2">{lang more}...</a></div>
					</div>
				</div>
			<!--{/loop}-->
		<!--{/if}-->

		<div class="bm tl">
			<div class="th">
				<table cellpadding="0" cellspacing="0" class="th">
					<tr>
						<td colspan="2">
							<!--{if $view == 'groupthread'}-->{lang last_topic_in_group}<!--{else}-->{lang my_last_topic_in_group}<!--{/if}-->
						</td>
						<td class="by">{lang group}</td>
						<td class="num">{lang replies}</td>
						<td class="by">{lang last_post}</td>
					</tr>
				</table>
			</div>
			<div class="bm_c">
				<table cellspacing="0" cellpadding="0">
				<!--{if $groupthreadlist}-->
					<!--{loop $groupthreadlist $tid $thread}-->
						<tr>
							<td class="icn">
								<a href="forum.php?mod=viewthread&tid=$tid" title="{lang open_new_window}" target="_blank">
								<!--{if $thread[folder] == 'lock'}-->
									<i class="fico-lock fic6 fc-s"></i>
								<!--{elseif in_array($thread['displayorder'], array(1, 2, 3, 4))}-->
									<i class="tpin tpin{$thread[displayorder]}" alt="$_G[setting][threadsticky][3-$thread[displayorder]]"><svg width="18" height="18"><path d="M9 0l9 9H14v9H4V9H0z"></path></svg></i>
								<!--{else}-->
									<i class="fico-thread fic6 {if $thread[folder]=='new'}fc-l{else}fc-n{/if}"></i>
								<!--{/if}-->
								</a>
							</td>
							<td><a href="forum.php?mod=viewthread&tid=$tid" target="_blank">$thread[subject]</a></td>
							<td class="by"><a href="forum.php?mod=group&fid=$thread[fid]" target="_blank" class="xg1">$thread[groupname]</a></td>
							<td class="num">
								<a href="forum.php?mod=viewthread&tid=$tid" class="xi2">$thread[replies]</a>
								<em>$thread[views]</em>
							</td>
							<td class="by">
								<cite><!--{if $thread['lastposter']}--><a href="home.php?mod=space&username=$thread[lastposter]">$thread[lastposter]</a><!--{else}-->{lang anonymous}<!--{/if}--></cite>
								<em><a href="forum.php?mod=viewthread&tid=$tid&page={echo max(1, $thread[pages]);}">$thread[lastpost]</a></em>
							</td>
						</tr>
					<!--{/loop}-->
				<!--{else}-->
					<tr><td colspan="4"><div class="emp">{lang no_related_posts}</div></td></tr>
				<!--{/if}-->
			</table>
		</div>
	</div>

	<!--{if $multipage}--><div class="pgs cl">$multipage</div><!--{/if}-->

	<!--{elseif $view == 'manager' || $view == 'join'}-->
		<!--{if $grouplist}-->
			<div class="bm bml bw0">
				<div class="bm_h cl">
					<h2><!--{if $view == 'manager'}-->{lang my_manage_group} <!--{elseif $view == 'join'}-->{lang my_join_group} <!--{/if}--></h2>
				</div>
				<div class="bm_c">
					<ul class="ml mls cl">
						<!--{loop $grouplist $groupid $group}-->
						<li>
							<a href="forum.php?mod=group&fid=$groupid" title="$group[name]" class="avt"><img src="$group[icon]" alt="$group[name]" /></a>
							<p><!--{if $group['flevel'] == '-1'}-->({lang group_wait_mod})<!--{/if}--><a href="forum.php?mod=group&fid=$groupid" title="$group[name]">$group[name]</a></p>
						</li>
						<!--{/loop}-->
					</ul>
				</div>
			</div>
			<!--{if $multipage}--><div class="pgs">$multipage</div><!--{/if}-->
		<!--{else}-->
			<div class="emp"><!--{if $view == 'manager'}-->{lang no_group_create_now} <!--{elseif $view == 'join'}-->{lang no_group_join} <!--{/if}--></div>
		<!--{/if}-->
	<!--{/if}-->
	<!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]-->
	<!--{hook/my_bottom}-->

	</div>
	<div class="sd">
		<div class="drag">
			<!--[diy=diysidebtntop]--><div id="diysidebtntop" class="area"></div><!--[/diy]-->
		</div>
		<!--{if helper_access::check_module('group')}-->
		<div class="hm pbm">
			<a href="forum.php?mod=group&action=create" id="create_group_btn" class="pgsbtn">{lang group_create}</a>
		</div>
		<!--{/if}-->
		<div class="drag">
			<!--[diy=diysidetop]--><div id="diysidetop" class="area"></div><!--[/diy]-->
		</div>
		<!--{hook/my_side_top}-->
		<!--{if $randgroup}-->
			<div class="bm">
				<div class="bm_h cl">
					<h2>{lang hot_group}</h2>
				</div>
				<div class="bm_c">
					<ul class="ml mls cl">
						<!--{loop $randgroup $key $group}-->
						<li>
							<a href="forum.php?mod=group&fid=$group[fid]" title="$group[name]" class="avt" target="_blank"><img src="$group[icon]" alt="$group[name]" /></a>
							<p><a href="forum.php?mod=group&fid=$group[fid]" title="$group[name]" target="_blank">$group[name]</a></p>
						</li>
						<!--{/loop}-->
					</ul>
				</div>
			</div>
		<!--{/if}-->
		<div class="drag">
			<!--[diy=diysidemiddle]--><div id="diysidemiddle" class="area"></div><!--[/diy]-->
		</div>
		<div class="bm">
			<div class="bm_h cl">
				<h2>{lang friend_join_group}</h2>
			</div>
			<div class="bm_c">
				<ul class="ml mls cl">
					<!--{loop $friendgrouplist $groupid $group}-->
					<li>
						<a href="forum.php?mod=group&fid=$groupid" title="$group[name]" class="avt" target="_blank"><img src="$group[icon]" alt="$group[name]" /></a>
						<p><a href="forum.php?mod=group&fid=$groupid" title="$group[name]" target="_blank">$group[name]</a></p>
					</li>
					<!--{/loop}-->
				</ul>
			</div>
		</div>
		<div class="drag">
			<!--[diy=diysidebottom]--><div id="diysidebottom" class="area"></div><!--[/diy]-->
		</div>
		<!--{hook/my_side_bottom}-->
	</div>
</div>

<div class="wp mtn">
	<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>

<!--{template common/footer}-->