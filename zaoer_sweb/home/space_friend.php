<?php echo 'QQ:2039074300';exit;?>
<!--{if empty($diymode)}-->
<!--{template common/header}-->
<div id="pt" class="bm cl">
	<div class="z">
		<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
		<a href="home.php?mod=space&do=friend">{lang friends}</a> <em>&rsaquo;</em>
		{lang friend_list}
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
			<!--{if $space[self]}-->
				<h1 class="mt"><i class="fico-group fic4 fc-p vm"></i>{lang friend_list}</h1>
				<ul class="tb cl">
					<li{$a_actives[me]}><a href="home.php?mod=space&do=friend">{lang all_friend_list}</a></li>
					<!--{if empty($_G['setting']['sessionclose'])}-->
					<li{$a_actives[onlinefriend]}><a href="home.php?mod=space&do=friend&view=online&type=friend">{lang online_friend}</a></li>
					<li{$a_actives[onlinemember]}><a href="home.php?mod=space&do=friend&view=online&type=member">{lang online_member}</a></li>
					<!--{/if}-->
					<li{$a_actives[onlinenear]}><a href="home.php?mod=space&do=friend&view=online&type=near">{lang online_near}</a></li>
					<li{$a_actives[visitor]}><a href="home.php?mod=space&do=friend&view=visitor">{lang my_visitor}</a></li>
					<li{$a_actives[trace]}><a href="home.php?mod=space&do=friend&view=trace">{lang my_trace}</a></li>
					<li{$a_actives[blacklist]}><a href="home.php?mod=space&do=friend&view=blacklist">{lang my_blacklist}</a></li>
				</ul>
				<div class="tbmu cl">
					<!--{if $_GET['view']=='blacklist'}-->
						{lang blacklist_message}
					<!--{elseif $_GET['view']=='me'}-->
						<p class="y">
							{lang count_member}
						<!--{if $maxfriendnum}-->
							({lang max_friend_num})
							<!--{if $_G['setting']['magicstatus'] && $_G[setting][magics][friendnum]}-->
								<img src="{STATICURL}image/magic/friendnum.small.gif" alt="friendnum" class="vm" />
								<a id="a_magic_friendnum" href="home.php?mod=magic&mid=friendnum" onmousemove="showTip(this)" tip="{lang expansion_friend_message}" onclick="showWindow('magics', this.href, 'get', 0);return false;">{lang expansion_friend}</a>
							<!--{/if}-->
						<!--{/if}-->
						</p>
						<p class="z">
							{lang friend_message}
						</p>
					<!--{elseif $_GET['view']=='online'}-->
						<!--{if $_GET['type'] == 'friend'}-->
							{lang online_friend_visit}
						<!--{elseif $_GET['type']=='near'}-->
							{lang near_friend_visit}
						<!--{else}-->
							{lang view_online_friend}
						<!--{/if}-->
					<!--{elseif $_GET['view']=='visitor'}-->
						{lang visitor_list}
					<!--{elseif $_GET['view']=='trace'}-->
						{lang trace_list}
					<!--{/if}-->
				</div>

				<!--{if $_GET['view']=='blacklist'}-->
				<h2 class="mtw xs2">{lang add_blacklist}</h2>
				<div class="bm bmn mtm cl">
					<form method="post" autocomplete="off" name="blackform" action="home.php?mod=spacecp&ac=friend&op=blacklist&start=$_GET[start]">
						<table cellpadding="0" cellspacing="0" class="tfm">
							<tr>
								<th>{lang username}</th>
								<td>
									<input type="text" name="username" value="" size="15" class="px vm" />
									<button type="submit" name="blacklistsubmit_btn" id="moodsubmit_btn" value="true" class="pn vm"><em>{lang add}</em></button>
								</td>
							</tr>
						</table>
						<input type="hidden" name="blacklistsubmit" value="true" />
						<input type="hidden" name="formhash" value="{FORMHASH}" />
					</form>
				</div>
				<!--{/if}-->
			<!--{/if}-->
<!--{else}-->
	<!--{if $_G[setting][homepagestyle]}-->
		<!--{subtemplate home/space_header}-->
		<div id="ct" class="ct2 wp cl">
			<div class="mn">
				<div class="bm">
					<div class="bm_h">
						<h1 class="mt">{lang friends}</h1>
					</div>
				<div class="bm_c">
	<!--{else}-->
		<!--{template common/header}-->
		<div id="pt" class="bm cl">
			<div class="z">
				<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
				<a href="home.php?mod=space&uid=$space[uid]">{$space[username]}</a> <em>&rsaquo;</em>
				<a href="home.php?mod=space&uid=$space[uid]&do=friend&view=me">{lang friends}</a>
			</div>
		</div>
		<style id="diy_style" type="text/css"></style>
		<div class="wp">
			<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
		</div>
		<!--{template home/space_menu}-->
		<div id="ct" class="ct1 wp cl">
			<div class="mn">
				<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
				<div class="bm bw0">
					<div class="bm_c">
	<!--{/if}-->

<!--{/if}-->
			<!--{if $space[self]}-->
				<!--{if $groups}-->
					<div class="cl" style="padding-right: 263px;">
						<div style="float: right; margin-right: -263px; width: 263px; display: inline;">
							<div class="bm mtm">
								<div class="bm_h">
									<h3>{lang search_friend}</h3>
								</div>
								<div class="bm_c">
									<form method="get" autocomplete="off" action="home.php" class="pns">
										<input type="hidden" name="mod" value="space" />
										<input type="hidden" name="do" value="friend" />
										<input type="hidden" name="searchmode" value="1" />
										<input type="hidden" name="searchsubmit" value="1" />
										<input type="text" name="searchkey" class="px vm" size="20" value="" onclick="if(this.value=='{lang search_friend}')this.value='';" />&nbsp;<button type="submit" class="pn vm"><em>{lang search}</em></button>
									</form>
								</div>
							</div>							

							<div class="bm mtm">
								<div class="bm_h cl">
									<a href="home.php?mod=spacecp&ac=friend&op=group" class="y xi2">{lang volume_group}</a>
									<h3>{lang set_friend_group}</h3>
								</div>
								<div class="bm_c">
									<ul class="buddy_group">
										<li{if $_GET['group'] == -1} class="a"{/if}><a href="home.php?mod=space&do=friend&group=-1">{lang all_friends}</a></li>
										<!--{loop $groups $key $value}-->
										<li{$groupselect[$key]}>
											<a href="home.php?mod=spacecp&ac=friend&op=groupignore&group=$key&handlekey=ignorehk_{$key}" id="c_ignore_$key" onclick="showWindow('ignoregroup', this.href, 'get', 0);" title="{lang ignore_group_feed}" class="b"><!--{if isset($space['privacy']['filter_gid'][$key])}-->{lang cancel}<!--{else}-->{lang shield}<!--{/if}--></a>
											<!--{if $key}-->
												<a href="home.php?mod=spacecp&ac=friend&op=groupname&group=$key&handlekey=edithk_{$key}" id="c_edit_$key" onclick="showWindow(this.id, this.href, 'get', 0);" title="{lang edit_group_name}" class="o">{lang edit}</a>
											<!--{/if}-->
											<a href="home.php?mod=space&do=friend&group=$key" id="friend_groupname_$key" groupname="$value"><!--{if isset($space['privacy']['filter_gid'][$key])}--><span class="xg1">[{lang shield}]</span><!--{/if}-->$value</a>
										</li>
										<!--{/loop}-->
									</ul>
								</div>
							</div>
							<script type="text/javascript">
								function succeedhandle_ignoregroup(url, msg, values) {
									var liObj = $('friend_groupname_'+values['group']);
									var prefix = '';
									if(values['ignore']) {
										prefix = '<span class="xg1">[{lang shield}]</span>';
									}
									$('c_ignore_'+values['group']).innerHTML = values['ignore'] ? '{lang cancel}' : '{lang shield}';
									liObj.innerHTML = prefix + liObj.getAttribute('groupname');
								}
							</script>
						</div>
						<div>
				<!--{/if}-->
						<!--{if $list}-->
							<div id="friend_ul">
								<ul class="buddy cl">
								<!--{loop $list $key $value}-->
									<li id="friend_{$value[uid]}_li">
									<!--{if $value[username] == ''}-->
										<div class="avt"><img src="{STATICURL}image/magic/hidden.gif" alt="{lang anonymity}" /></div>
										<h4>{lang anonymity}</h4>
									<!--{else}-->
										<div class="avt">
											<a href="home.php?mod=space&uid=$value[uid]" c="1">
												<!--{if $ols[$value[uid]]}--><em class="gol" title="{lang online} {date($ols[$value['uid']], 'H:i')}"></em><!--{/if}-->
												<!--{avatar($value['uid'], 'small')}-->
											</a>
										</div>
										<h4>
											<span class="xg1 xw0 y">
											<!--{if $_GET['view'] == 'blacklist'}-->
												<a href="home.php?mod=spacecp&ac=friend&op=blacklist&subop=delete&uid=$value[uid]&start=$_GET[start]">{lang delete_blacklist}</a>
											<!--{elseif $_GET['view'] == 'visitor' || $_GET['view'] == 'trace'}-->
												<!--{date($value['dateline'], 'n{lang month}j{lang day}')}-->
											<!--{elseif $_GET['view'] == 'online'}-->
												<!--{date($ols[$value['uid']], 'H:i')}-->
											<!--{else}-->
												<a href="home.php?mod=spacecp&ac=friend&op=changenum&uid=$value[uid]&handlekey=hotuserhk_{$value[uid]}" id="friendnum_$value[uid]" onclick="showWindow(this.id, this.href, 'get', 0);" title="{lang hot}">{lang hot}(<span id="spannum_$value[uid]">$value[num]</span>)</a>
											<!--{/if}-->
											</span>
											<a href="home.php?mod=space&uid=$value[uid]"{eval g_color($value['groupid']);}>$value[username]</a>
											<!--{eval g_icon($value['groupid']);}-->
											<!--{if $space[self]}-->
												<span id="friend_note_$value[uid]" class="note xw0" title="$value[note]">$value[note]</span>
											<!--{/if}-->
										</h4>
										<p class="maxh">$value[recentnote]</p>
									<!--{/if}-->
										<div class="xg1">
											<!--{if isset($value['follow']) && $key != $_G['uid'] && $value[username] != ''}-->
											<a href="home.php?mod=spacecp&ac=follow&op={if $value['follow']}del{else}add{/if}&fuid=$value[uid]&hash={FORMHASH}&from=a_followmod_" id="a_followmod_$key" onclick="showWindow('followmod', this.href, 'get', 0)"><!--{if $value['follow']}-->{lang follow_del}<!--{else}-->{lang follow_add}TA<!--{/if}--></a>
											<!--{/if}-->
											<!--{if $value[uid] != $_G['uid'] && $value[username] != ''}-->
											<span class="pipe">|</span><a href="javascript:;" id="interaction_$value[uid]" onmouseover="showMenu(this.id);" class="showmenu">{lang interactive}</a>
											<!--{/if}-->
											<!--{if !$value[isfriend] && $value[username] != ''}-->
											<span class="pipe">|</span><a href="home.php?mod=spacecp&ac=friend&op=add&uid=$value[uid]&handlekey=adduserhk_{$value[uid]}" id="a_friend_$key" onclick="showWindow(this.id, this.href, 'get', 0);" title="{lang add_friend}">{lang add_friend}</a>
											<!--{elseif !in_array($_GET['view'], array('blacklist', 'visitor', 'trace', 'online'))}-->
											<span class="pipe">|</span><a href="javascript:;" id="opfrd_$value[uid]" onmouseover="showMenu(this.id);" class="showmenu">{lang manage}</a>
											<!--{/if}-->
										</div>
										<!--{if $value[isfriend] && !in_array($_GET['view'], array('blacklist', 'visitor', 'trace', 'online'))}-->
											<div id="opfrd_$value[uid]_menu" class="p_pop" style="display: none; width: 80px;">
												<p><a href="home.php?mod=spacecp&ac=friend&op=changegroup&uid=$value[uid]&handlekey=editgrouphk_{$value[uid]}" id="friend_group_$value[uid]" onclick="showWindow(this.id, this.href, 'get', 0);" title="{lang set_friend_group}">{lang set_friend_group}</a></p>
												<p><a href="home.php?mod=spacecp&ac=friend&op=editnote&uid=$value[uid]&handlekey=editnote_{$value[uid]}" id="friend_editnote_$value[uid]" onclick="showWindow(this.id, this.href, 'get', 0);" title="{lang friend_editnote}">{lang friend_editnote}</a></p>
												<p><a href="home.php?mod=spacecp&ac=friend&op=ignore&uid=$value[uid]&handlekey=delfriendhk_{$value[uid]}" id="a_ignore_$key" onclick="showWindow(this.id, this.href, 'get', 0);" title="{lang delete}">{lang delete}</a></p>
											</div>
										<!--{/if}-->
										<!--{if $value[uid] != $_G['uid'] && $value[username] != ''}-->
										<div id="interaction_$value[uid]_menu" class="p_pop" style="display: none; width: 80px;">
											<p><a href="home.php?mod=space&uid=$value[uid]&do=profile" target="_blank" title="{lang view_profile}">{lang view_profile}</a></p>
											<p><a href="home.php?mod=space&uid=$value[uid]" target="_blank" title="{lang visit_friend}">{lang visit_friend}</a></p>
											<p><a href="home.php?mod=spacecp&ac=poke&op=send&uid=$value[uid]" id="a_poke_$key" onclick="showWindow(this.id, this.href, 'get', 0);" title="{lang say_hi}">{lang say_hi}</a></p>
											<p><a href="home.php?mod=spacecp&ac=pm&op=showmsg&handlekey=showmsg_$value[uid]&touid=$value[uid]&pmid=0&daterange=2" id="a_sendpm_$key" onclick="showWindow('showMsgBox', this.href, 'get', 0)" title="{lang send_pm}">{lang send_pm}</a></p>
											<!--{hook/space_interaction_extra}-->
										</div>
										<!--{/if}-->
									</li>
								<!--{/loop}-->
								</ul>
							</div>
							<!--{if $multi}--><div class="pgs cl mtm">$multi</div><!--{/if}-->
						<!--{else}-->
		                	<!--{if $_GET['view'] == 'me' && !$friendnum}-->
		                    	<!--{if $specialuser_list}-->
		                            <div id="friend_ul">
		                            	<h2 class="mtw">{lang recommend_friend}</h2>
		                                <ul class="buddy cl">
		                                	<!--{loop $specialuser_list $key $value}-->
		                                    	<li id="friend_{$value[uid]}_li">
		                                        	<div class="avt">
		                                                <a href="home.php?mod=space&uid=$value[uid]" c="1">
		                                                    <!--{if $ols[$value[uid]]}--><em class="gol" title="{lang online} {date($ols[$value['uid']], 'H:i')}"></em><!--{/if}-->
		                                                    <!--{avatar($value['uid'], 'small')}-->
		                                                </a>
		                                            </div>
		                                            <h4>
		                                                <a href="home.php?mod=space&uid=$value[uid]">$value[username]</a>
		                                            </h4>
		                                            <p class="maxh">$value[reason]</p>
		                                            <div class="xg1">
		                                            <!--{if isset($value['follow']) && $key != $_G['uid'] && $value[username] != ''}-->
													<a href="home.php?mod=spacecp&ac=follow&op={if $value['follow']}del{else}add{/if}&fuid=$value[uid]&hash={FORMHASH}&from=a_specialuser_" id="a_specialuser_$key" onclick="showWindow('followmod', this.href, 'get', 0)"><!--{if $value['follow']}-->{lang follow_del}<!--{else}-->{lang follow_add}TA<!--{/if}--></a>
													<span class="pipe">|</span>
													<!--{/if}-->
													<a href="home.php?mod=spacecp&ac=friend&op=add&uid=$value[uid]&handlekey=adduserhk_{$value[uid]}" id="a_friend_$key" onclick="showWindow(this.id, this.href, 'get', 0);" title="{lang add_friend}">{lang add_friend}</a></div>
		                                        </li>
		                                    <!--{/loop}-->
		                                </ul>
		                            </div>
		                        <!--{/if}-->
		                        <!--{if $online_list}-->
		                        	<div id="friend_ul">
		                            	<h2 class="mtw">{lang online_member}</h2>
		                                <ul class="buddy cl">
		                                	<!--{loop $online_list $key $value}-->
		                                    	<li id="friend_{$value[uid]}_li">
		                                        	<div class="avt">
		                                                <a href="home.php?mod=space&uid=$value[uid]" c="1">
		                                                    <!--{if $ols[$value[uid]]}--><em class="gol" title="{lang online} {date($ols[$value['uid']], 'H:i')}"></em><!--{/if}-->
		                                                    <!--{avatar($value['uid'], 'small')}-->
		                                                </a>
		                                            </div>
		                                            <h4>
		                                                <a href="home.php?mod=space&uid=$value[uid]">$value[username]</a>
		                                            </h4>
		                                            <p class="maxh">$value[recentnote]</p>
		                                            <div class="xg1">
		                                            <!--{if isset($value['follow']) && $key != $_G['uid'] && $value[username] != '' && helper_access::check_module('follow')}-->
													<a href="home.php?mod=spacecp&ac=follow&op={if $value['follow']}del{else}add{/if}&fuid=$value[uid]&hash={FORMHASH}&from=a_online_" id="a_online_$key" onclick="showWindow('followmod', this.href, 'get', 0)"><!--{if $value['follow']}-->{lang follow_del}<!--{else}-->{lang follow_add}TA<!--{/if}--></a>
													<span class="pipe">|</span>
													<!--{/if}-->
													<a href="home.php?mod=spacecp&ac=friend&op=add&uid=$value[uid]&handlekey=adduserhk_{$value[uid]}" id="a_friend_$key" onclick="showWindow(this.id, this.href, 'get', 0);" title="{lang add_friend}">{lang add_friend}</a></div>
		                                        </li>
		                                    <!--{/loop}-->
		                                </ul>
		                            </div>
		                        <!--{/if}-->
		                    <!--{else}-->
								<div class="emp">{lang no_friend_list}</div>
		                    <!--{/if}-->
						<!--{/if}-->
						<script type="text/javascript">
							function succeedhandle_followmod(url, msg, values) {
								var fObj = $(values['from']+values['fuid']);
								if(values['type'] == 'add') {
									fObj.innerHTML = '{lang follow_del}';
									fObj.className = 'flw_btn_unfo';
									fObj.href = 'home.php?mod=spacecp&ac=follow&op=del&fuid='+values['fuid']+'&from='+values['from'];
								} else if(values['type'] == 'del') {
									fObj.innerHTML = '{lang follow_add}TA';
									fObj.className = 'flw_btn_fo';
									fObj.href = 'home.php?mod=spacecp&ac=follow&op=add&hash={FORMHASH}&fuid='+values['fuid']+'&from='+values['from'];
								}
							}
						</script>
				<!--{if $groups}-->
						</div>
					</div>
				<!--{/if}-->
			<!--{else}-->
				<p class="tbmu">{lang count_member}</p>
				<!--{template home/space_list}-->
			<!--{/if}-->
<!--{if empty($diymode)}-->
</div>
	<!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]-->
	</div>

	<div class="appl">
		<!--{subtemplate home/space_friend_nav}-->
		<div class="drag">
			<!--[diy=diy2]--><div id="diy2" class="area"></div><!--[/diy]-->
		</div>
	</div>
</div>
</div>

<div class="wp mtn">
	<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>
<!--{else}-->
		</div>
	</div>
</div>
<!--{if $_G[setting][homepagestyle]}-->
<div class="sd"><!--{subtemplate home/space_userabout}--></div>
<!--{/if}-->

<!--{/if}-->
<!--{template common/footer}-->