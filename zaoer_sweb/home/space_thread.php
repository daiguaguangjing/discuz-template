<?php echo 'QQ:2039074300';exit;?>
{eval
	$space_uid = $space['uid'];
	$filter = array( 'common' => '{lang have_posted}', 'save' => '{lang draft}', 'close' => '{lang closed}', 'aduit' => '{lang pending}', 'ignored' => '{lang ignored}', 'recyclebin' => '{lang recyclebin}');
	$_G['home_tpl_spacemenus'][] = "<a href=\"home.php?mod=space&uid=$space_uid&do=thread&view=me\">{lang they_thread}</a>";
}

<!--{if $diymode}-->
	<!--{if $_G[setting][homepagestyle]}-->
		<!--{subtemplate home/space_header}-->
		<div id="ct" class="ct2 wp cl">
			<div class="mn">
				<div class="bm">
					<div class="bm_h">
						<!--{if $space[self]}--><span class="xi2 y"><a href="forum.php?mod=misc&action=nav" onclick="showWindow('nav', this.href, 'get', 0)" class="addnew">{lang posted}</a></span><!--{/if}-->
						<h1 class="mt">
							<!--{if $_GET[type] == 'reply'}-->
							<span class="xs1 xw0"><a href="home.php?mod=space&do=thread&view=me&type=thread&uid=$space[uid]&from=space">{lang topic}</a><span class="pipe">|</span></span>{lang reply}
							<!--{else}-->
							{lang topic}<span class="xs1 xw0"><span class="pipe">|</span><a href="home.php?mod=space&do=thread&view=me&type=reply&uid=$space[uid]&from=space">{lang reply}</a></span>
							<!--{/if}-->
						</h1>
					</div>
				<div class="bm_c">
	<!--{else}-->
		<!--{template common/header}-->
		<div id="pt" class="bm cl">
			<div class="z">
				<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
				<a href="home.php?mod=space&uid=$space[uid]">{$space[username]}</a> <em>&rsaquo;</em>
				<a href="home.php?mod=space&uid=$space[uid]&do=blog&view=me">{lang thread}</a>
			</div>
		</div>
		<style id="diy_style" type="text/css"></style>
		<div class="wp">
			<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
		</div>
		<!--{template home/space_menu}-->
		<div id="ct" class="ct1 wp cl">
			<div class="mn bg0">
				<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
				<div class="bm bw0">
					<div class="bm_c">
	<!--{/if}-->
<!--{else}-->
	<!--{template common/header}-->
	<div id="pt" class="bm cl">
		<div class="z">
			<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
			<!--{if $_G[setting][homestyle] && isset($_G[setting][navs][4])}--><a href="home.php">$_G[setting][navs][4][navname]</a> <em>&rsaquo;</em> <!--{/if}-->
			<a href="home.php?mod=space&do=blog">{lang thread}</a>
		</div>
	</div>
	<style id="diy_style" type="text/css"></style>
	<div class="wp">
		<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
	</div>
	
	<div class="bg0 zaobm">
	<div id="ct" class="ct2_a wp cl">
	<!--{if $_G[setting][homestyle]}-->
		<div class="appl">
			<!--{subtemplate common/userabout}-->
		</div>
		<div class="mn pbw">
			<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
			<div class="bm bw0">
				<ul class="tb cl">
					<!--{if $_G['setting']['friendstatus']}--><li$actives[we]><a href="home.php?mod=space&do=thread&view=we">{lang friend_post}</a></li><!--{/if}-->
					<li$actives[me]><a href="home.php?mod=space&do=thread&view=me">{lang my_post}</a></li>
				</ul>
			</div>
	<!--{else}-->
		<div class="appl">
			<div class="tbn">
				<h2 class="mt bbda">{lang thread}</h2>
				<ul>
					<!--{if $_G['setting']['friendstatus']}--><li$actives[we]><a href="home.php?mod=space&do=thread&view=we">{lang friend_post}</a></li><!--{/if}-->
					<li$actives[me]><a href="home.php?mod=space&do=thread&view=me">{lang my_post}</a></li>
				</ul>
			</div>
		</div>
		<div class="mn pbw">
		<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
	<!--{/if}-->
<!--{/if}-->
		
		<!--{if !$diymode && $space[self]}-->
			<!--{if $_GET['view'] == 'me'}-->
			<p class="tbmu bw0">
				<!--{if $viewtype != 'postcomment'}-->
					<span class="y">
					<a href="home.php?mod=space&uid=$space[uid]&do=thread&view=me&type=$viewtype&from=$_GET[from]&filter=" {if !$_GET[filter]}class="a"{/if}>{lang all}</a>
					<!--{loop $filter $key $name}--><span class="pipe">|</span><a href="home.php?mod=space&do=thread&view=me&type=$viewtype&from=$_GET[from]&filter=$key" {if $key == $_GET[filter]}class="a"{/if}>$name</a><!--{/loop}--> &nbsp;
						<select name="forumlist" id="forumlist" class="ps vm" onchange="viewforumthread(this.value);" style="width: 120px; word-wrap: normal;">
							<option value="0">{lang follow_select_forum}</option>
							$forumlist
						</select>
					</span>
				<!--{/if}-->
				<a href="home.php?mod=space&do=thread&view=me&type=thread" $orderactives[thread]>{lang topic}</a><span class="pipe">|</span>
				<a href="home.php?mod=space&do=thread&view=me&type=reply" $orderactives[reply]>{lang reply}</a><span class="pipe">|</span>
				<a href="home.php?mod=space&do=thread&view=me&type=postcomment" $orderactives[postcomment]>{lang post_comment}</a>
				<!--{if $viewtype != 'reply' && $viewtype != 'postcomment'}-->&nbsp; <input type="text" id="searchmypost" class="px vm" size="15" /> <button class="pn vm" onclick="searchpostbyusername($('searchmypost').value, '$_G[username]');"><em>{lang search}</em></button><!--{/if}-->
			</p>
			<!--{elseif $_GET['view'] == 'all'}-->
			<p class="tbmu bw0">
				<a href="home.php?mod=space&do=thread&view=all&order=dateline" $orderactives[dateline]>{lang newest_thread}</a><span class="pipe">|</span>
				<a href="home.php?mod=space&do=thread&view=all&order=hot" $orderactives[hot]>{lang top_thread}</a>
			</p>
			<!--{/if}-->
		<!--{/if}-->
		
		<!--{if $diymode && !$_G[setting][homepagestyle] }-->
			<p class="tbmu">
				<a href="home.php?mod=space&uid=$space[uid]&do=thread&view=me&from=space&type=thread" $orderactives[thread]>{lang topic}</a>
				<span class="pipe">|</span>
				<a href="home.php?mod=space&uid=$space[uid]&do=thread&view=me&from=space&type=reply" $orderactives[reply]>{lang reply}</a>
			</p>
		<!--{/if}-->
		
		<!--{if $userlist}-->
			<p class="tbmu bw0">
				{lang view_by_friend}
				<select name="fuidsel" onchange="fuidgoto(this.value);" class="ps">
					<option value="">{lang all_friends}</option>
					<!--{loop $userlist $value}-->
					<option value="$value[fuid]"{$fuid_actives[$value[fuid]]}>$value[fusername]</option>
					<!--{/loop}-->
				</select>
			</p>
		<!--{/if}-->
		<div class="tl">
			<form method="post" autocomplete="off" name="delform" id="delform" action="home.php?mod=space&do=thread&view=all&order=dateline" onsubmit="showDialog('{lang del_select_thread_confirm}', 'confirm', '', '$(\'delform\').submit();'); return false;">
					<input type="hidden" name="formhash" value="{FORMHASH}" />
					<input type="hidden" name="delthread" value="true" />

					<table cellspacing="0" cellpadding="0">
						<tr class="th">
							<td class="icn">&nbsp;</td>
							<!--{if $_GET['view'] == 'all' && $pruneperm && !$_GET['archiveid']}-->
								<td class="o">&nbsp;</td>
							<!--{/if}-->
							<th><!--{if $viewtype == 'reply' || $viewtype == 'postcomment'}-->{lang post}<!--{else}-->{lang topic}<!--{/if}--></th>
							<td class="frm">{lang forum}<!--{if $actives[me] && $space['uid'] == $_G['uid']}-->/{lang group}<!--{/if}--></td>
							<!--{if $viewtype != 'postcomment'}-->
								<!--{if !$actives[me]}-->
								<td class="by">{lang author}</td>
								<!--{/if}-->
								<td class="num">{lang replies}</td>
								<!--{if $actives[me]}-->
								<td class="by"><cite>{lang last_post}</cite></td>
								<!--{/if}-->
							<!--{/if}-->
						</tr>

					<!--{if $list}-->
						<!--{loop $list $stid $thread}-->
						<tr{if $actives[me] && $viewtype=='reply' || $viewtype=='postcomment'} class="bw0_all"{/if}>
							<td class="icn">
								<a href="forum.php?mod=viewthread&tid=$thread[tid]&highlight=$index[keywords]" title="{lang open_new_window}" target="_blank">
								<!--{if $thread[folder] == 'lock'}-->
									<i class="fico-lock fic6 fc-s"></i>
								<!--{elseif $thread['special'] == 1}-->
									<i class="fico-vote fic6 fc-n" alt="{lang poll}"></i>
								<!--{elseif $thread['special'] == 2}-->
									<i class="fico-cart fic6 fc-n" alt="{lang trade}"></i>
								<!--{elseif $thread['special'] == 3}-->
									<i class="fico-reward fic6 fc-n" alt="{lang reward}"></i>
								<!--{elseif $thread['special'] == 4}-->
									<i class="fico-group fic6 fc-n" alt="{lang activity}"></i>
								<!--{elseif $thread['special'] == 5}-->
									<i class="fico-vs fic6 fc-n" alt="{lang debate}"></i>
								<!--{elseif in_array($thread['displayorder'], array(1, 2, 3, 4))}-->
									<i class="tpin tpin{$thread[displayorder]}"><svg width="18" height="18"><path d="M9 0l9 9H14v9H4V9H0z"></path></svg></i>
								<!--{else}-->
									<i class="fico-thread fic6 fc-n"></i>
								<!--{/if}-->
								</a>
							</td>
							<!--{if $_GET['view'] == 'all' && $pruneperm && !$_GET['archiveid']}-->
								<td class="o">
									<!--{if $thread['digest'] == 0}-->
										<!--{if $thread['displayorder'] == 0}-->
											<input type="checkbox" name="moderate[]" value="$thread[tid]" class="pc" />
										<!--{else}-->
											<input type="checkbox" class="pc" disabled="disabled" />
										<!--{/if}-->
									<!--{else}-->
										<input type="checkbox" class="pc" disabled="disabled" />
									<!--{/if}-->
								</td>
							<!--{/if}-->
							<th>
								<!--{if $viewtype == 'reply' || $viewtype == 'postcomment'}-->
									<a href="forum.php?mod=redirect&goto=findpost&ptid=$thread[tid]&pid=$thread[pid]" target="_blank">$thread[subject]</a>
								<!--{else}-->
									<a href="forum.php?mod=viewthread&tid=$thread[tid]" target="_blank" {if $thread['displayorder'] == -1}class="recy"{/if}>$thread[subject]</a>
								<!--{/if}-->
								<!--{if $thread['digest'] > 0}-->
									<span class="tbox tdigest">{lang digest}$thread[digest]</span>
								<!--{/if}-->
								<!--{if $thread['attachment'] == 2}-->
									<i class="fico-image fic4 fc-p fnmr vm" title="{lang photo_accessories}"></i>
								<!--{elseif $thread['attachment'] == 1}-->
									<i class="fico-attachment fic4 fc-p fnmr vm" title="{lang accessory}"></i>
								<!--{/if}-->
								<!--{if $thread[multipage]}--><span class="tps">$thread[multipage]</span><!--{/if}-->
								<!--{if !$_GET['filter']}-->
									<!--{if $thread[$statusfield] == -1}--><span class="xg1">$filter[recyclebin]</span>
									<!--{elseif $thread[$statusfield] == -2}--><span class="xg1">$filter[aduit]</span>
									<!--{elseif $thread[$statusfield] == -3 && $thread[displayorder] != -4}--><span class="xg1">$filter[ignored]</span>
									<!--{elseif $thread[displayorder] == -4}--><span class="xg1">$filter[save]</span>
									<!--{elseif $thread['closed'] == 1}--><span class="xg1">$filter[close]</span>
									<!--{/if}-->
								<!--{/if}-->
							</th>
							<td>
								<a href="forum.php?mod=forumdisplay&fid=$thread[fid]" class="xg1" target="_blank">$forums[$thread[fid]]</a>
							</td>
							<!--{if $viewtype != 'postcomment'}-->
								<!--{if !$actives[me]}-->
								<td>
									<cite><a href="home.php?mod=space&uid=$thread[authorid]" target="_blank">$thread[author]</a></cite>
									<em>$thread[dateline]</em>
								</td>
								<!--{/if}-->

								<td class="num">
									<a href="forum.php?mod=viewthread&tid=$thread[tid]" class="xi2" target="_blank">$thread[replies]</a>
									<em>$thread[views]</em>
								</td>

								<!--{if $actives[me]}-->
								<td class="by">
									<cite><a href="home.php?mod=space&username=$thread[lastposterenc]" target="_blank">$thread[lastposter]</a></cite>
									<em><a href="forum.php?mod=redirect&tid=$thread[tid]&goto=lastpost#lastpost" target="_blank">$thread[lastpost]</a></em>
								</td>
								<!--{/if}-->
							<!--{/if}-->
						</tr>
						<!--{if $actives[me] && $viewtype=='reply'}-->
							<!--{loop $tids[$stid] $pid}-->
							<!--{eval $post = $posts[$pid];}-->
							<tr>
								<td colspan="5" class="xg1">&nbsp;<svg width="15" height="14" class="vm"><path fill="#ddd" d="M6 8v5H1V8C1 5 4 .5 6 .5V3C5 3 3.5 6 3.5 8zm8 0v5H9V8c0-3 3-7.5 5-7.5V3c-1 0-2.5 3-2.5 5z" /></svg> <a href="forum.php?mod=redirect&goto=findpost&ptid=$thread[tid]&pid=$pid" target="_blank"><!--{if $post['message'] || is_numeric($post['message'])}-->{$post[message]}<!--{else}-->......<!--{/if}--></a> <svg width="15" height="14" class="vm"><path fill="#ddd" d="M9 6V1h5v5c0 3-3 7.5-5 7.5V11c1 0 2.5-3 2.5-5zM1 6V1h5v5c0 3-3 7.5-5 7.5V11c1 0 2.5-3 2.5-5z" /></svg></td>
							</tr>
							<!--{/loop}-->
						<!--{/if}-->
						<!--{if $actives[me] && $viewtype=='postcomment'}-->
						<tr>
							<td class="icn">&nbsp;</td>
							<td colspan="2" class="xg1">$thread[comment]</td>
						</tr>
						<!--{/if}-->
						<!--{/loop}-->
					<!--{else}-->
						<tr>
							<td colspan="{if $viewtype != 'postcomment'}{if ($_GET['view'] == 'all' && $pruneperm && !$_GET['archiveid'])}6{else}5{/if}{else}3{/if}"><p class="emp">{lang no_related_posts}</p></td>
						</tr>
					<!--{/if}-->
					</table>

					<!--{if $_GET['view'] == 'all' && $pruneperm && !$_GET['archiveid'] && $list}-->
						<p class="mtm pns">
							<label for="chkall" onclick="checkall(this.form, 'moderate')"><input type="checkbox" name="chkall" id="chkall" class="pc vm" />{lang select_all}</label>
							<button type="submit" name="delsubmit" value="true" class="pn vm"><em>{lang del_select_thread}</em></button>
						</p>
					<!--{/if}-->
				</form>

				<!--{if $hiddennum}-->
					<p class="mtm">{lang hide_thread}</p>
				<!--{/if}-->
			</div>
			<!--{if $multi}--><div class="pgs cl mtm">$multi</div><!--{/if}-->		
		
		<script type="text/javascript">
		function fuidgoto(fuid) {
			window.location.href = 'home.php?mod=space&do=thread&view=we&fuid='+fuid;
		}
		function viewforumthread(fid) {
			window.location.href = '{$forumurl}&fid='+fid;
		}
		</script>
		
		<!--{if !$_G[setting][homepagestyle]}--><!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]--><!--{/if}-->

		<!--{if $diymode}-->
					</div>
				</div>
			<!--{if $_G[setting][homepagestyle]}-->
			</div>
			<div class="sd">
				<!--{subtemplate home/space_userabout}-->
			<!--{/if}-->
		<!--{/if}-->
		</div>
	</div>
	</div>

<!--{if !$_G[setting][homepagestyle]}-->
	<div class="wp mtn">
		<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
	</div>
<!--{/if}-->

    		  	  		  	  		     	  	 			    		   		     		       	   	 		    		   		     		       	   	 		    		   		     		       	   				    		   		     		       	   	 	    		   		     		       	 	        		   		     		       	 	        		   		     		       	  			     		   		     		       	  		 	    		   		     		       	  		      		   		     		       	 	   	    		   		     		       	  	 	     		   		     		       	  	       		   		     		       	 	   	    		   		     		       	  	       		   		     		       	  	 		    		   		     		       	 	   	    		   		     		       	  		      		   		     		       	  		 	    		   		     		       	 	        		 	      	  		  	  		     	
<!--{template common/footer}-->