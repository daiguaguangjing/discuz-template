<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->
<!--{if $_G['forum']['ismoderator']}-->
<script type="text/javascript" src="{$_G[setting][jspath]}forum_moderate.js?{VERHASH}"></script>
<!--{/if}-->
<style id="diy_style" type="text/css"></style>
<!--[diy=diynavtop]--><div id="diynavtop" class="area"></div><!--[/diy]-->
<div id="pt" class="bm cl">
	<div class="z">
		<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a><em>&raquo;</em><a href="forum.php">{$_G[setting][navs][2][navname]}</a>$navigation
	</div>
</div>

<!--{ad/text/wp a_t}-->
<div class="wp">
	<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>

<div class="boardnav">
	<div id="ct" class="wp cl{if $_G['forum']['allowside']} ct2{/if}"{if $leftside} style="margin-left:{$_G['leftsidewidth_mwidth']}px"{/if}>
		
		<!--{if $leftside}-->
		<div id="sd_bdl" class="fd_bdl" onmouseover="showMenu({'ctrlid':this.id, 'pos':'dz'});" style="width:{$_G['setting']['leftsidewidth']}px;margin-left:-{$_G['leftsidewidth_mwidth']}px">
			<!--{hook/forumdisplay_leftside_top}-->
			<!--[diy=diyleftsidetop]--><div id="diyleftsidetop" class="area"></div><!--[/diy]-->
			<div class="cl" id="forumleftside">
				<!--{subtemplate forum/forumdisplay_leftside}-->
			</div>
			<!--[diy=diyleftsidebottom]--><div id="diyleftsidebottom" class="area"></div><!--[/diy]-->
			<!--{hook/forumdisplay_leftside_bottom}-->
		</div>
		<!--{/if}-->

		<div class="mn">
			<!--{hook/forumdisplay_top}-->
			<div class="drag">
				<!--[diy=diy4]--><div id="diy4" class="area"></div><!--[/diy]-->
			</div>

			<!--{if !$_G['forum']['allowside']}-->
			
				<div class="fd-header zaobm bg0 mb10">
					<div class="fd-header-content">
						<div class="left-info">
							<div class="forum-photo">
								<!--{if $_G['forum']['icon']}-->
								<img src="<!--{echo get_forumimg($_G['forum']['icon'])}-->" alt="$_G['forum']['name']" />
								<!--{else}-->
								<img src="./template/zaoer_sweb/zaoer/forum-icon.png" alt="$_G['forum'][name]" />
								<!--{/if}-->
							</div>
							<div class="forum-desc">
								<div class="forum-desc-top">
									<div class="forum-desc-title"><a href="forum.php?mod=forumdisplay&fid=$_G[fid]">$_G['forum'][name]</a></div>
								</div>
								<div class="forum-desc-middle">
									<div class="forum-desc-follow-count">
										<!--{if !empty($forumarchive)}-->
										<a id="forumarchive" href="javascript:;" class="pr10 xg2" onmouseover="showMenu(this.id)"><!--{if $_GET['archiveid']}-->$forumarchive[$_GET['archiveid']]['displayname']<!--{else}-->{lang forum_archive}<!--{/if}--></a>
										<!--{/if}-->
										<!--{if helper_access::check_module('favorite')}-->
										<a href="home.php?mod=spacecp&ac=favorite&type=forum&id=$_G[fid]&handlekey=favoriteforum&formhash={FORMHASH}" id="a_favorite" class="pr10 xg2" onclick="showWindow(this.id, this.href, 'get', 0);"><span>{lang favorite}</span></a>
										<!--{/if}-->
										<!--{if $_G['forum']['ismoderator']}-->
										<!--{if $_G['forum']['ismoderator'] && !$_GET['archiveid']}-->
										<!--{if $_G['forum']['status'] != 3}-->
										<a href="forum.php?mod=modcp&fid=$_G[fid]" class="pr10 xg2">{lang manage}</a>
										<!--{else}-->
										<a href="forum.php?mod=group&action=manage&fid=$_G[fid]" class="pr10 xg2">{lang manage}</a>
										<!--{/if}-->
										<!--{/if}-->
										<!--{/if}-->
										<!--{if rssforumperm($_G['forum']) && $_G[setting][rssstatus] && !$_GET['archiveid'] && !$subforumonly}-->
										<a href="forum.php?mod=rss&fid=$_G[fid]&auth=$rssauth" class="pr10 xg2" target="_blank" title="RSS" style="display:none;">{lang rss_subscribe_this}</a>
										<!--{/if}-->
										<!--{hook/forumdisplay_forumaction}-->
										<!--{if $_G['forum']['ismoderator']}-->
										<!--{if $_G['forum']['recyclebin']}-->
										<a href="{if $_G['adminid'] == 1}admin.php?mod=forum&action=recyclebin&frames=yes{elseif $_G['forum']['ismoderator']}forum.php?mod=modcp&action=recyclebin&fid=$_G[fid]{/if}" class="pr10 xg2" target="_blank">{lang forum_recyclebin}</a>
										<!--{/if}-->
										<!--{hook/forumdisplay_modlink}-->
										<!--{/if}-->
									</div>
									<!--{if !empty($forumarchive)}-->
									<div id="forumarchive_menu" class="p_pop" style="display:none">
										<ul>
											<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]">{lang threads_all}</a></li>
											<!--{loop $forumarchive $id $info}-->
											<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&archiveid=$id">{$info['displayname']} ({$info['threads']})</a></li>
											<!--{/loop}-->
										</ul>
									</div>
									<!--{/if}-->
								</div>
							</div>
						</div>
						<!--{if !$subforumonly}-->
						<div class="right-info">
							<!--{if $_G[forum][rank]}-->
							<div class="desc-count" title="{lang previous_rank}:$_G[forum][oldrank]">
								<div class="count">$_G[forum][rank]</div>
								<div class="desc xg2">{lang rank}</div>
							</div>
							<div class="split"></div>
							<!--{/if}-->
							<div class="desc-count">
								<div class="count">$_G[forum][threads]</div>
								<div class="desc xg2">{lang index_threads}</div>
							</div>
							<div class="split"></div>
							<div class="desc-count">
								<div class="count">$_G[forum][todayposts]</div>
								<div class="desc xg2">{lang index_today}</div>
							</div>
							<!--{if helper_access::check_module('favorite')}-->
							<div class="split"></div>
							<div class="desc-count">
								<div class="count">$_G[forum][favtimes]</div>
								<div class="desc xg2">{lang favorite}</div>
							</div>
							<!--{/if}-->
						</div>
						<!--{/if}-->
					</div>
				</div>
				
				<!--{if (!empty($_G[forum][domain]) && !empty($_G['setting']['domain']['root']['forum'])) || $moderatedby || ($_G['page'] == 1 && $_G['forum']['rules'])}-->
				<div class="zaobm bg0 mb10">
					<div class="bm_c">
						<!--{if !empty($_G[forum][domain]) && !empty($_G['setting']['domain']['root']['forum'])}-->
						<div class="pbn">{lang forum_domain}: <a href="{$_G['scheme']}://{$_G[forum][domain]}.{$_G['setting']['domain']['root']['forum']}" id="group_link">{$_G['scheme']}://{$_G[forum][domain]}.{$_G['setting']['domain']['root']['forum']}</a></div>
						<!--{/if}-->
						<!--{if $moderatedby}-->
						<div>{lang forum_modedby}: <span class="xg2">$moderatedby</span></div>
						<!--{/if}-->
						<!--{if $_G['page'] == 1 && $_G['forum']['rules']}-->
						<div id="forum_rules_{$_G[fid]}">
							<div class="fic15">$_G['forum'][rules]</div>
						</div>
						<!--{/if}-->
					</div>
				</div>
				<!--{/if}-->
			
				<!--{if $subexists && $_G['page'] == 1}-->
					<!--{template forum/forumdisplay_subforum}-->
				<!--{/if}-->
				<!--{if !empty($_G['forum']['recommendlist'])}-->
					<div class="zaobm bg0 mb10">
						<div class="bm_h cl"><h2>{lang forum_recommend}</h2></div>
						<div class="bm_c fd_recombox cl">
							<!--{subtemplate forum/recommend}-->
						</div>
					</div>
				<!--{/if}-->
			<!--{/if}-->
			
			<!--{hook/forumdisplay_middle}-->

			<!--{if !$subforumonly}-->

				<!--{if $recommendgroups && !$_G['forum']['allowside']}-->
				<div class="bm bmw fl{if $_G['forum']['forumcolumns']} flg{/if}">
					<div class="bm_h cl">
						<span class="o"><em id="recommendgroups_{$_G[forum][fid]}_img" class="tg{$collapseicon[recommendgroups]}" title="{lang spread}" onclick="toggle_collapse('recommendgroups_{$_G[forum][fid]}');"></em></span>
						<h2>{lang recommended_groups}</h2>
					</div>
					<div class="bm_c" id="recommendgroups_{$_G[forum][fid]}" style="$collapse[recommendgroups]">
						<table cellspacing="0" cellpadding="0" class="fl_tb">
							<!--{loop $recommendgroups $key $group}-->
							<!--{if $_G['forum']['forumcolumns']}-->
								<!--{if $key && ($key % $_G['forum']['forumcolumns'] == 0)}-->
									</tr>
									<!--{if $key < $_G['forum']['forumcolumns']}-->
										<tr class="fl_row">
									<!--{/if}-->
								<!--{/if}-->
								<td class="fl_g">
									<div class="fl_icn_g">
										<a href="forum.php?mod=group&fid=$group[fid]" title="$group[name]" target="_blank"><img src="$group[icon]" alt="$group[name]" width="32" /></a>
									</div>
									<dl>
										<dt><a href="forum.php?mod=group&fid=$group[fid]" target="_blank">$group[name]</a><span class="xg1 xw0"> ($group[membernum] {lang activity_member_unit})</span>
										<dd><em>{lang forum_threads}: $group[threads]</em></dd>
										<dd>
											<!--{if is_array($group['lastpost'])}-->
												<!--{if $_G['forum']['forumcolumns'] < 3}-->
												<a href="forum.php?mod=redirect&tid=$group[lastpost][tid]&goto=lastpost#lastpost" class="xi2"><!--{echo cutstr($group[lastpost][subject], 30)}--></a> <cite>$group[lastpost][dateline] <!--{if $group['lastpost']['author']}--><a href="home.php?mod=space&username={$group[lastpost][encode_author]}">{$group[lastpost][author]}</a><!--{else}-->$_G[setting][anonymoustext]<!--{/if}--></cite>
												<!--{else}-->
													<a href="forum.php?mod=redirect&tid=$group[lastpost][tid]&goto=lastpost#lastpost" class="xi2">$group[lastpost][dateline]</a>
												<!--{/if}-->				<!--{else}-->
											{lang never}
											<!--{/if}-->
										</dd>
									</dl>
								</td>
							<!--{else}-->
								<tr {if $key != 0}class="fl_row"{/if}>
									<td class="fl_icn">
										<a href="forum.php?mod=group&fid=$group[fid]" title="$group[name]" target="_blank"><img src="$group[icon]" alt="$group[name]" width="32" /></a>
									</td>
									<td>
										<h2><a href="forum.php?mod=group&fid=$group[fid]" target="_blank">$group[name]</a><span class="xg1 xw0"> ($group[membernum] {lang activity_member_unit})</span></h2>
										<p><!--{echo cutstr($group[description], 100)}--></p>
									</td>
									<td class="fl_i">
										<span class="xi2">$group[threads] {lang index_threads}</span>
									</td>
									<td class="fl_by">
										<div>
											<!--{if is_array($group['lastpost'])}-->
											<a href="forum.php?mod=redirect&tid=$group[lastpost][tid]&goto=lastpost#lastpost" class="xi2"><!--{echo cutstr($group[lastpost][subject], 30)}--></a> <cite>$group[lastpost][dateline] <!--{if $group['lastpost']['author']}--><a href="home.php?mod=space&username={$group[lastpost][encode_author]}">{$group[lastpost][author]}</a><!--{else}-->$_G[setting][anonymoustext]<!--{/if}--></cite>
											<!--{else}-->
											{lang never}
											<!--{/if}-->
										</div>
									</td>
								</tr>
							<!--{/if}-->
							<!--{/loop}-->
						</table>
					</div>
				</div>
				<!--{/if}-->

				<!--{if !empty($threadmodcount)}--><div class="bm"><div class="ntc_l hm xi2"><strong>{lang forum_moderate_unhandled}</strong></div></div><!--{/if}-->

				<!--{if $livethread}-->
					<div id="livethread" class="tl mb10 p15 cl">
						<div class="livethreadtitle vm">
							<span class="replynumber xg1">{lang reply} <span id="livereplies" class="xi1">$livethread[replies]</span></span>
							<a href="forum.php?mod=viewthread&tid=$livethread[tid]" target="_blank">$livethread[subject]</a> <span class="liveicon">{lang admin_live}</span>
						</div>
						<div class="livethreadcon">$livemessage</div>
						<div id="livereplycontentout">
							<div id="livereplycontent">
							</div>
						</div>
						<div id="liverefresh">{lang forum_live_newreply_refresh}</div>
						<div id="livefastreply">
							<form id="livereplypostform" method="post" action="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$livethread[tid]&replysubmit=yes&infloat=yes&handlekey=livereplypost&inajax=1" onsubmit="return livereplypostvalidate(this)">
								<div id="livefastcomment">
									<textarea id="livereplymessage" name="message" style="color:gray;<!--{if !$liveallowpostreply}-->display:none;<!--{/if}-->">{lang forum_live_fastreply_notice}</textarea>
									<!--{if !$liveallowpostreply}-->
										<div>
											<!--{if !$_G[uid]}-->
												{lang login_to_reply} <a href="member.php?mod=logging&action=login" onclick="showWindow('login', this.href)" class="xi2">{lang login}</a> | <a href="member.php?mod={$_G[setting][regname]}" class="xi2">$_G['setting']['reglinkname']</a>
											<!--{elseif $_G['forum']['replyperm'] && !forumperm($_G['forum']['replyperm'])}-->
												{lang replyperm_nopermission}
											<!--{else}-->
												{lang no_permission_to_post}<a href="javascript:;" onclick="ajaxpost('livereplypostform', 'livereplypostreturn', 'livereplypostreturn', 'onerror', $('livereplysubmit'));" class="xi2">{lang click_to_show_reason}</a>
											<!--{/if}-->
										</div>
									<!--{/if}-->
								</div>
								<div id="livepostsubmit" style="display:none;">
								<!--{if $secqaacheck || $seccodecheck}-->
									<!--{block sectpl}--><sec> <span id="sec<hash>" onclick="showMenu(this.id)"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div><!--{/block}-->
									<div class="mtm sec" style="text-align:right;"><!--{subtemplate common/seccheck}--></div>
								<!--{/if}-->
								<p class="ptm pnpost" style="margin-bottom:10px;">
								<button type="submit" name="replysubmit" class="pn pnc vm" style="float:right;" value="replysubmit" id="livereplysubmit">
									<strong>{lang forum_live_post}</strong>
								</button>
								</p>
								</div>
								<input type="hidden" name="formhash" value="{FORMHASH}">
								<input type="hidden" name="subject" value="  ">
							</form>
						</div>
						<span id="livereplypostreturn"></span>
					</div>
					<script type="text/javascript">
						var postminchars = parseInt('$_G['setting']['minpostsize']');
						var postmaxchars = parseInt('$_G['setting']['maxpostsize']');
						var postminsubjectchars = parseInt('$_G['setting']['minsubjectsize']');
						var postmaxsubjectchars = parseInt('$_G['setting']['maxsubjectsize']');
						var disablepostctrl = parseInt('{$_G['group']['disablepostctrl']}');
						var replycontentlist = new Array();
						var addreplylist = new Array();
						var timeoutid = timeid = movescrollid = waitescrollid = null;
						var replycontentnum = 0;
						getnewlivepostlist(1);
						timeid = setInterval(getnewlivepostlist, 5000);
						$('livereplycontent').style.position = 'absolute';
						$('livereplycontent').style.width = ($('livereplycontentout').clientWidth - 50) + 'px';
						$('livereplymessage').onfocus = function() {
							if(this.style.color == 'gray') {
								this.value = '';
								this.style.color = 'black';
								$('livepostsubmit').style.display = 'block';
								this.style.height = '56px';
								$('livefastcomment').style.height = '57px';
							}
						};
						$('livereplymessage').onblur = function() {
							if(this.value == '') {
								this.style.color = 'gray';
								this.value = '{lang forum_live_fastreply_notice}';
							}
						};

						$('liverefresh').onclick = function() {
							$('livereplycontent').style.position = 'absolute';
							getnewlivepostlist();
							this.style.display = 'none';
						};

						$('livereplycontentout').onmouseover = function(e) {

							if($('livereplycontent').style.position == 'absolute' && $('livereplycontent').clientHeight > 215) {
								$('livereplycontent').style.position = 'static';
								this.scrollTop = this.scrollHeight;
							}

							if(this.scrollTop + this.clientHeight != this.scrollHeight) {
								clearInterval(timeid);
								clearTimeout(timeoutid);
								clearInterval(movescrollid);
								timeid = timeoutid = movescrollid = null;

								if(waitescrollid == null) {
									waitescrollid = setTimeout(function() {
										$('liverefresh').style.display = 'block';
									}, 60000 * 10);
								}
							} else {
								clearTimeout(waitescrollid);
								waitescrollid = null;
							}
						};

						$('livereplycontentout').onmouseout = function(e) {
							if(this.scrollTop + this.clientHeight == this.scrollHeight) {
								$('livereplycontent').style.position = 'absolute';
								clearInterval(timeid);
								timeid = setInterval(getnewlivepostlist, 10000);
							}
						};

						function getnewlivepostlist(first) {
							var x = new Ajax('JSON');
							x.getJSON('forum.php?mod=misc&action=livelastpost&fid=$livethread[fid]', function(s, x) {
								var count = s.data.count;
								$('livereplies').innerHTML = count;
								var newpostlist = s.data.list;
								for(i in newpostlist) {
									var postid = i;
									var postcontent = '';
									postcontent += newpostlist[i].authorid ? '<dt><a href="home.php?mod=space&uid=' + newpostlist[i].authorid + '" target="_blank">' + newpostlist[i].avatar + '</a></dt>' : '<dt></dt>';
									postcontent += newpostlist[i].authorid ? '<dd><a href="home.php?mod=space&uid=' + newpostlist[i].authorid + '" target="_blank">' + newpostlist[i].author + '</a></dd>' : '<dd>' + newpostlist[i].author + '</dd>';
									postcontent += '<dd>' + htmlspecialchars(newpostlist[i].message) + '</dd>';
									postcontent += '<dd class="dateline">' + newpostlist[i].dateline + '</dd>';
									if(replycontentlist[postid]) {
										$('livereply_' + postid).innerHTML = postcontent;
										continue;
									}
									addreplylist[postid] = '<dl id="livereply_' + postid + '">' + postcontent + '</dl>';
								}
								if(first) {
									for(i in addreplylist) {
										replycontentlist[i] = addreplylist[i];
										replycontentnum++;
										var div = document.createElement('div');
										div.innerHTML = addreplylist[i];
										$('livereplycontent').appendChild(div);
										delete addreplylist[i];
									}
								} else {
									livecontentfacemove();
								}
							});
						}

						function livecontentfacemove() {
							//note 从队列中取出数据
							var reply = '';
							for(i in addreplylist) {
								reply = replycontentlist[i] = addreplylist[i];
								replycontentnum++;
								delete addreplylist[i];
								break;
							}
							if(reply) {
								var div = document.createElement('div');
								div.innerHTML = reply;
								var oldclientHeight = $('livereplycontent').clientHeight;
								$('livereplycontent').appendChild(div);
								$('livereplycontentout').style.overflowY = 'hidden';
								$('livereplycontent').style.bottom = oldclientHeight - $('livereplycontent').clientHeight + 'px';

								if(replycontentnum > 20) {
									$('livereplycontent').removeChild($('livereplycontent').firstChild);
									for(i in replycontentlist) {
										delete replycontentlist[i];
										break;
									}
									replycontentnum--;
								}

								if(!movescrollid) {
									movescrollid = setInterval(function() {
										if(parseInt($('livereplycontent').style.bottom) < 0) {
											$('livereplycontent').style.bottom =
												((parseInt($('livereplycontent').style.bottom) + 5) > 0 ? 0 : (parseInt($('livereplycontent').style.bottom) + 5)) + 'px';
										} else {
											$('livereplycontentout').style.overflowY = 'auto';
											clearInterval(movescrollid);
											movescrollid = null;
											timeoutid = setTimeout(livecontentfacemove, 1000);
										}
									}, 100);
								}
							}
						}

						function livereplypostvalidate(theform) {
							var s;
							if(theform.message.value == '' || $('livereplymessage').style.color == 'gray') {
								s = '{lang forum_live_nocontent_error}';
							}
							if(!disablepostctrl && ((postminchars != 0 && mb_strlen(theform.message.value) < postminchars) || (postmaxchars != 0 && mb_strlen(theform.message.value) > postmaxchars))) {
								s = {lang forum_live_nolength_error};
							}
							if(s) {
								showError(s);
								doane();
								$('livereplysubmit').disabled = false;
								return false;
							}
							$('livereplysubmit').disabled = true;
							theform.message.value = theform.message.value.replace(/([^>=\]"'\/]|^)((((https?|ftp):\/\/)|www\.)([\w\-]+\.)*[\w\-\u4e00-\u9fa5]+\.([\.a-zA-Z0-9]+|\u4E2D\u56FD|\u7F51\u7EDC|\u516C\u53F8)((\?|\/|:)+[\w\.\/=\?%\-&~`@':+!]*)+\.(jpg|gif|png|bmp|webp))/ig, '$1[img]$2[/img]');
							theform.message.value = parseurl(theform.message.value);
							ajaxpost('livereplypostform', 'livereplypostreturn', 'livereplypostreturn', 'onerror', $('livereplysubmit'));
							return false;
						}

						function succeedhandle_livereplypost(url, msg, param) {
							$('livereplymessage').value = '';
							$('livereplycontent').style.position = 'absolute';
							if(param['sechash']) {
								updatesecqaa(param['sechash']);
								updateseccode(param['sechash']);
							}
							getnewlivepostlist();
						}
					</script>
				<!--{/if}-->

				<div id="pgt" class="bw0 pgs cl" style="display:none;">
					<span id="fd_page_top">$multipage</span>
					<span class="pgb y" {if $_G[setting][visitedforums]}id="visitedforums" onmouseover="$('visitedforums').id = 'visitedforumstmp';this.id = 'visitedforums';showMenu({'ctrlid':this.id,'pos':'34'})"{/if} ><a href="forum.php">{lang return_index}</a></span>
					<!--{if !$_GET['archiveid']}--><a href="javascript:;" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})"{if !$_G['forum']['allowspecialonly'] && empty($_G['forum']['picstyle']) && empty($_G['forum']['threadsorts']['required'])} onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=$_G[fid]')"{else} onclick="location.href='forum.php?mod=post&action=newthread&fid=$_G[fid]';return false;"{/if} title="{lang send_posts}" class="pgsbtn showmenu">{lang send_posts}</a><!--{/if}-->
					<!--{hook/forumdisplay_postbutton_top}-->
				</div>
				
				<!--{if ($_G['forum']['threadtypes'] && $_G['forum']['threadtypes']['listable']) || (isset($_G['forum']['threadsorts']['types']) && is_array($_G['forum']['threadsorts']['types']) && count($_G['forum']['threadsorts']['types']) > 0)}-->
					<ul id="thread_types" class="ttp cl">
						<!--{hook/forumdisplay_threadtype_inner}-->
						<li id="ttp_all" {if !$_GET['typeid'] && !$_GET['sortid']}class="xw1 a"{/if}><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_G['forum']['threadsorts']['defaultshow']}&filter=sortall&sortall=1{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang forum_viewall}</a></li>
						<!--{if $_G['forum']['threadtypes']}-->
							<!--{loop $_G['forum']['threadtypes']['types'] $id $name}-->
								<!--{if $_GET['typeid'] == $id}-->
								<li class="xw1 a"><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['sortid']}&filter=sortid&sortid=$_GET['sortid']{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}"><!--{if $_G[forum][threadtypes][icons][$id] && $_G['forum']['threadtypes']['prefix'] == 2}--><img class="vm" src="$_G[forum][threadtypes][icons][$id]" alt="" /> <!--{/if}-->$name<!--{if $showthreadclasscount[typeid][$id]}--><span class="xg1 num">$showthreadclasscount[typeid][$id]</span><!--{/if}--></a></li>
								<!--{else}-->
								<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=typeid&typeid=$id$forumdisplayadd[typeid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}"><!--{if $_G[forum][threadtypes][icons][$id] && $_G['forum']['threadtypes']['prefix'] == 2}--><img class="vm" src="$_G[forum][threadtypes][icons][$id]" alt="" /> <!--{/if}-->$name<!--{if $showthreadclasscount[typeid][$id]}--><span class="xg1 num">$showthreadclasscount[typeid][$id]</span><!--{/if}--></a></li>
								<!--{/if}-->
							<!--{/loop}-->
						<!--{/if}-->

						<!--{if $_G['forum']['threadsorts']}-->
							<!--{if $_G['forum']['threadtypes']}--><li><span class="pipe">|</span></li><!--{/if}-->
							<!--{loop $_G['forum']['threadsorts']['types'] $id $name}-->
								<!--{if $_GET['sortid'] == $id}-->
								<li class="xw1 a"><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['typeid']}&filter=typeid&typeid=$_GET['typeid']{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">$name<!--{if $showthreadclasscount[sortid][$id]}--><span class="xg1 num">$showthreadclasscount[sortid][$id]</span><!--{/if}--></a></li>
								<!--{else}-->
								<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=sortid&sortid=$id$forumdisplayadd[sortid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">$name<!--{if $showthreadclasscount[sortid][$id]}--><span class="xg1 num">$showthreadclasscount[sortid][$id]</span><!--{/if}--></a></li>
								<!--{/if}-->
							<!--{/loop}-->
						<!--{/if}-->
						<!--{hook/forumdisplay_filter_extra}-->
					</ul>
					<script type="text/javascript">showTypes('thread_types');</script>
				<!--{/if}-->
				<!--{hook/forumdisplay_threadtype_extra}-->
				<!--{if empty($_G['forum']['sortmode'])}-->
					<!--{subtemplate forum/forumdisplay_list}-->
				<!--{else}-->
					<!--{subtemplate forum/forumdisplay_sort}-->
				<!--{/if}-->
			<!--{/if}-->
			<!--[diy=diyfastposttop]--><div id="diyfastposttop" class="area"></div><!--[/diy]-->
			<!--{if $fastpost}-->
				<!--{template forum/forumdisplay_fastpost}-->
			<!--{/if}-->

			<!--{hook/forumdisplay_bottom}-->
			<!--[diy=diyforumdisplaybottom]--><div id="diyforumdisplaybottom" class="area"></div><!--[/diy]-->
		</div>

		<!--{if $_G['forum']['allowside']}-->
		<div class="sd">
			<!--{hook/forumdisplay_side_top}-->
			<div class="zaobm bg0 mb10">
				<div class="fd_header_sd">
					<div class="top">
						<!--{if $_G['forum']['icon']}-->
						<img src="<!--{echo get_forumimg($_G['forum']['icon'])}-->" alt="$_G['forum']['name']" />
						<!--{else}-->
						<img src="./template/zaoer_sweb/zaoer/forum-icon.png" alt="$_G['forum'][name]" />
						<!--{/if}-->
						<h1 class="fic18">$_G['forum']['name']</h1>
						<!--{if $_G['page'] == 1 && $_G['forum']['rules']}-->
						<div id="forum_rules_{$_G[fid]}" class="mt10 xg2">$_G['forum'][rules]</div>
						<!--{/if}-->
					</div>
					<!--{if !$subforumonly}-->
					<div class="footer">
						<table style="width:100%;">
							<tbody>
								<tr align="center">
									<td>
										<b class="fic15">$_G[forum][rank]</b><br>
										<span class="xg2 fic10">{lang rank}</span>
									</td>
									<td>
										<b class="fic15">$_G[forum][threads]</b><br>
										<span class="xg2 fic10">{lang index_threads}</span>
									</td>
									<td>
										<b class="fic15">$_G[forum][todayposts]</b><br>
										<span class="xg2 fic10">{lang index_today}</span>
									</td>
									<td>
										<b class="fic15">$_G[forum][favtimes]</b><br>
										<span class="xg2 fic10"><a href="home.php?mod=spacecp&ac=favorite&type=forum&id=$_G[fid]&handlekey=favoriteforum&formhash={FORMHASH}" id="a_favorite" onclick="showWindow(this.id, this.href, 'get', 0);">{lang favorite}</a></span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!--{/if}-->
				</div>
			</div>
			
			<!--{if $subexists && $_G['page'] == 1}-->
				<!--{template forum/forumdisplay_subforum_sd}-->
			<!--{/if}-->
			
			<!--{if !empty($_G['forum']['recommendlist'])}-->
			<div class="zaobm bg0 mb10">
				<div class="bm_h cl"><h2>{lang forum_recommend}</h2></div>
				<div class="bm_c fd_recombox cl">
					<!--{subtemplate forum/recommend_sd}-->
				</div>
			</div>
			<!--{/if}-->
			
			<!--{if !$subforumonly}-->
				<div class="zaobm bg0 mb10">
					<div class="bm_h">
						<h2>{lang their}: <!--{eval echo cutstr($_G['cache']['forums'][$_G['forum']['fup']]['name'], 22, '')}--></h2>
					</div>
					<div class="bm_c">
						<ul class="xl xl2 cl">
						<!--{loop $_G['cache']['forums'] $bforum}-->
							<!--{if $bforum['fup'] == $_G['forum']['fup'] && $bforum['status']}-->
							<li><a href="forum.php?mod=forumdisplay&fid=$bforum[fid]">$bforum['name']</a></li>
							<!--{/if}-->
						<!--{/loop}-->
						</ul>
					</div>
				</div>
				<!--{if $recommendgroups}-->
				<div class="zaobm bg0 mb10">
					<div class="bm_h cl"><h2>{lang recommended_groups}</h2></div>
					<div class="bm_c cl">
						<ul class="ml mls cl">
						<!--{loop $recommendgroups $key $group}-->
						<li>
							<a href="forum.php?mod=group&fid=$group[fid]" title="$group[name]" target="_blank" class="avt"><img src="$group[icon]" alt="$group[name]"></a>
							<p><a href="forum.php?mod=group&fid=$group[fid]" target="_blank">$group[name]</a></p>
						</li>
						<!--{/loop}-->
						</ul>
					</div>
				</div>
				<!--{/if}-->
				<!--{if !($_G['forum']['simple'] & 1) && $_G[setting][whosonlinestatus]}-->
				<div class="zaobm bg0 mb10">
					<!--{if $detailstatus}-->
					<div class="bm_h cl">
						<span class="o y" style="display:none;"><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&page=$page&showoldetails=no#online"><em class="tg_no"></em></a></span>
						<h2>{lang forum_activeusers}<i class="fic10 xg2">$onlinenum</i></h2>
					</div>
					<div class="bm_c">
						<ul class="ml mls cl">
						<!--{loop $whosonline $key $online}-->
						<li>
							<a href="home.php?mod=space&uid=$online[uid]" class="avt"><!--{avatar($online['uid'], 'middle')}--></a>
							<!--{if $online['uid']}-->
								<p><a href="home.php?mod=space&uid=$online[uid]">$online[username]</a></p>
							<!--{else}-->
								<p>$online[username]</p>
							<!--{/if}-->
							<span class="grey">$online[lastactivity]{LF}</span>
						</li>
						<!--{/loop}-->
						</ul>
					</div>
					<!--{else}-->
					<div class="bm_h cl">
						<span class="o y"><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&page=$page&showoldetails=yes#online" class="nobdr"><em class="tg_yes"></em></a></span>
						<h2>{lang forum_activeusers} ($onlinenum)</h2>
					</div>
					<!--{/if}-->
				</div>
				<!--{/if}-->
			<!--{/if}-->
			<div class="drag">
				<!--[diy=diy2]--><div id="diy2" class="area"></div><!--[/diy]-->
			</div>
			<!--{hook/forumdisplay_side_bottom}-->
		</div>
		<!--{/if}-->
	</div>
</div>

<!--{if $_G['group']['allowpost'] && ($_G['group']['allowposttrade'] || $_G['group']['allowpostpoll'] || $_G['group']['allowpostreward'] || $_G['group']['allowpostactivity'] || $_G['group']['allowpostdebate'] || $_G['setting']['threadplugins'] || $_G['forum']['threadsorts'])}-->
	<ul class="p_pop" id="newspecial_menu" style="display: none">
		<!--{if !$_G['forum']['allowspecialonly']}--><li><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]">{lang post_newthread}</a></li><!--{/if}-->
		<!--{if $_G['forum']['threadsorts'] && !$_G['forum']['allowspecialonly']}-->
			<!--{loop $_G['forum']['threadsorts']['types'] $id $threadsorts}-->
				<!--{if $_G['forum']['threadsorts']['show'][$id]}-->
				<li class="popupmenu_option"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&extra=$extra&sortid=$id">$threadsorts</a></li>
				<!--{/if}-->
			<!--{/loop}-->
		<!--{/if}-->
		<!--{if $_G['group']['allowpostpoll']}--><li class="poll"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=1">{lang post_newthreadpoll}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowpostreward']}--><li class="reward"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=3">{lang post_newthreadreward}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowpostdebate']}--><li class="debate"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=5">{lang post_newthreaddebate}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowpostactivity']}--><li class="activity"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=4">{lang post_newthreadactivity}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowposttrade']}--><li class="trade"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=2">{lang post_newthreadtrade}</a></li><!--{/if}-->
		<!--{if $_G['setting']['threadplugins']}-->
			<!--{loop $_G['forum']['threadplugin'] $tpid}-->
				<!--{if array_key_exists($tpid, $_G['setting']['threadplugins']) && is_array($_G['group']['allowthreadplugin']) && in_array($tpid, $_G['group']['allowthreadplugin'])}-->
				<li class="popupmenu_option"{if $_G['setting']['threadplugins'][$tpid][icon]} style="background-image:url(source/plugin/$tpid/$_G[setting][threadplugins][$tpid][icon])"{/if}><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&specialextra=$tpid">{$_G[setting][threadplugins][$tpid][name]}</a></li>
				<!--{/if}-->
			<!--{/loop}-->
		<!--{/if}-->
	</ul>
<!--{/if}-->

<!--{if $_G['setting']['visitedforums'] && $_G['forum']['status'] != 3}-->
	<div id="visitedforums_menu" class="p_pop blk cl" style="display:none;">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<td id="v_forums">
					<h3 class="mbn pbn bbda xg1">{lang viewed_forums}</h3>
					<ul class="xl xl1">
						$_G['setting']['visitedforums']
					</ul>
				</td>
			</tr>
		</table>
	</div>
<!--{/if}-->
<!--{if $_G['setting']['threadmaxpages'] > 1 && $page && !$subforumonly}-->
<script type="text/javascript">document.onkeyup = function(e){keyPageScroll(e, <!--{if $page > 1}-->1<!--{else}-->0<!--{/if}-->, <!--{if $page < $_G['setting']['threadmaxpages'] && isset($_G['page_next']) && $page < $_G['page_next']}-->1<!--{else}-->0<!--{/if}-->, 'forum.php?mod=forumdisplay&fid={$_G[fid]}&filter={$filter}&orderby={$_GET[orderby]}{$forumdisplayadd[page]}&{$multipage_archive}', $page);}</script>
<!--{/if}-->

<!--{if empty($_G['forum']['picstyle']) && $_GET['orderby'] == 'lastpost' && empty($_GET['filter']) }-->
<script type="text/javascript">checkForumnew_handle = setTimeout(function () {checkForumnew($_G[fid], lasttime);}, checkForumtimeout);</script>
<!--{/if}-->
<div class="wp mtn">
	<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>
<!--{if empty($_G['setting']['disfixednv_forumdisplay']) }--><script>fixed_top_nv();</script><!--{/if}-->
<!--{template common/footer}-->