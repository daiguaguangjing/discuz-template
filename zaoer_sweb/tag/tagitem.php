<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->
<!--{if $tagname}-->
<div id="pt" class="bm cl">
	<div class="z">
		<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
		<a href="misc.php?mod=tag">{lang tag}</a>
		<em>&rsaquo;</em>
		<a href="misc.php?mod=tag&id=$id">$tagname</a>
		<!--{if $showtype == 'thread'}-->
			<em>&rsaquo;</em> {lang related_thread}
		<!--{/if}-->
		<!--{if $showtype == 'blog'}-->
			<em>&rsaquo;</em> {lang related_blog}
		<!--{/if}-->
	</div>
</div>

<div id="ct" class="wp cl">
	<h1 class="mt"><i class="fico-tag fic12 xg2" alt="tag"></i> {lang tag}: $tagname</h1>
	<!--{if empty($showtype) || $showtype == 'thread'}-->
		<div class="bm tl zao-tdlist">
			<div class="th zao-tdlist-th">
				<table cellspacing="0" cellpadding="0">
					<tr>
						<th><h2>{lang related_thread}</h2></th>
						<td class="by">{lang forum}</td>
						<td class="by">{lang author}</td>
						<td class="num">{lang replies}</td>
						<td class="by">{lang lastpost}</td>
					</tr>
				</table>
			</div>
			<div class="bm_c">
				<!--{if $threadlist}-->
					<table cellspacing="0" cellpadding="0">
						<!--{loop $threadlist $thread}-->
							<tr>
								<td class="icn">
									<a href="forum.php?mod=viewthread&tid=$thread[tid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" title="{lang target_blank}" target="_blank">
									<!--{if $thread[folder] == 'lock'}-->
										<i class="fico-lock fic6 fc-s"></i>
									<!--{elseif $thread['special'] == 1}-->
										<i class="fico-vote fic6 fc-n"></i>
									<!--{elseif $thread['special'] == 2}-->
										<i class="fico-cart fic6 fc-n"></i>
									<!--{elseif $thread['special'] == 3}-->
										<i class="fico-reward fic6 fc-n"></i>
									<!--{elseif $thread['special'] == 4}-->
										<i class="fico-group fic6 fc-n"></i>
									<!--{elseif $thread['special'] == 5}-->
										<i class="fico-vs fic6 fc-n"></i>
									<!--{elseif in_array($thread['displayorder'], array(1, 2, 3, 4))}-->
										<i class="tpin tpin{$thread[displayorder]}"><svg width="18" height="18"><path d="M9 0l9 9H14v9H4V9H0z"></path></svg></i>
									<!--{else}-->
										<i class="fico-thread fic6 fc-n"></i>
									<!--{/if}-->
									</a>
								</td>
								<th>
									<a href="forum.php?mod=viewthread&tid=$thread[tid]" target="_blank" $thread[highlight]>$thread['subject']</a>
									<!--{if $thread['readperm']}--> - [{lang readperm} <span class="xw1">$thread[readperm]</span>]<!--{/if}-->
									<!--{if $thread['price'] > 0}-->
										<!--{if $thread['special'] == '3'}-->
										- <span style="color: #C60">[{lang thread_reward} <span class="xw1">$thread[price]</span> {$_G[setting][extcredits][$_G['setting']['creditstransextra'][2]][unit]}{$_G[setting][extcredits][$_G['setting']['creditstransextra'][2]][title]}]</span>
										<!--{else}-->
										- [{lang price} <span class="xw1">$thread[price]</span> {$_G[setting][extcredits][$_G['setting']['creditstransextra'][1]][unit]}{$_G[setting][extcredits][$_G['setting']['creditstransextra'][1]][title]}]
										<!--{/if}-->
									<!--{elseif $thread['special'] == '3' && $thread['price'] < 0}-->
										- [{lang reward_solved}]
									<!--{/if}-->
									<!--{if $thread['attachment'] == 2}-->
										<i class="fico-image fic4 fc-p fnmr vm" title="{lang attach_img}"></i>
									<!--{elseif $thread['attachment'] == 1}-->
										<i class="fico-attachment fic4 fc-p fnmr vm" title="{lang attachment}"></i>
									<!--{/if}-->
									<!--{if $thread['digest'] > 0 && $filter != 'digest'}-->
										<span class="tbox tdigest">{lang thread_digest}$thread[digest]</span>
									<!--{/if}-->
								</th>
								<td class="by"><a href="forum.php?mod=forumdisplay&fid=$thread[fid]">$thread['forumname']</a></td>
								<td class="by">
									<cite>
										<!--{if $thread['authorid'] && $thread['author']}-->
											<a href="home.php?mod=space&uid=$thread[authorid]" c="1">$thread[author]</a>
										<!--{else}-->
											{lang anonymous}
										<!--{/if}-->
									</cite>
									<em><span{if $thread['istoday']} class="xi1"{/if}>$thread[dateline]</span></em>
								</td>
								<td class="num">
									<a href="forum.php?mod=viewthread&tid=$thread[tid]" class="xi2">$thread[replies]</a>
									<em>$thread[views]</em>
								</td>
								<td class="by">
									<cite><!--{if $thread['lastposter']}--><a href="{if $thread[digest] != -2}home.php?mod=space&username=$thread[lastposterenc]{else}forum.php?mod=viewthread&tid=$thread[tid]&page={echo max(1, $thread[pages]);}{/if}" c="1">$thread[lastposter]</a><!--{else}-->$_G[setting][anonymoustext]<!--{/if}--></cite>
									<em><a href="{if $thread[digest] != -2}forum.php?mod=redirect&tid=$thread[tid]&goto=lastpost$highlight#lastpost{else}forum.php?mod=viewthread&tid=$thread[tid]&page={echo max(1, $thread[pages]);}{/if}">$thread[lastpost]</a></em>
								</td>
							</tr>
						<!--{/loop}-->
					</table>
					<!--{if empty($showtype)}-->
						<div class="ptm">
							<a class="xi2" href="misc.php?mod=tag&id=$id&type=thread">{lang more}...</a>
						</div>
					<!--{else}-->
						<!--{if $multipage}--><div class="pgs mtm cl">$multipage</div><!--{/if}-->
					<!--{/if}-->
				<!--{else}-->
					<p class="emp">{lang no_content}</p>
				<!--{/if}-->
			</div>
		</div>
	<!--{/if}-->

	<!--{if helper_access::check_module('blog') && (empty($showtype) || $showtype == 'blog')}-->
		<div class="zaobm bg0">
			<div class="bm_h"><h2>{lang related_blog}</h2></div>
			<div class="bm_c">
				<!--{if $bloglist}-->
					<div class="xld xlda">
						<!--{loop $bloglist $blog}-->
							<dl class="bbda">
								<dd class="m">
									<div class="avt"><a href="home.php?mod=space&uid=$blog[uid]" target="_blank" c="1"><!--{avatar($blog['uid'], 'middle')}--></a></div>
								</dd>
								<dt class="xs2">
									<!--{if helper_access::check_module('share')}-->
									<a href="home.php?mod=spacecp&ac=share&type=blog&id=$blog[blogid]&handlekey=lsbloghk_{$blog[blogid]}" id="a_share_$blog[blogid]" onclick="showWindow(this.id, this.href, 'get', 0);" class="oshr xs1 xw0">{lang share}</a>
									<!--{/if}-->
									<a href="home.php?mod=space&uid=$blog[uid]&do=blog&id=$blog[blogid]" target="_blank">$blog['subject']</a>
								</dt>
								<dd>
									<!--{if $blog['hot']}--><span class="hot">{lang hot} <em>$blog[hot]</em> </span><!--{/if}-->
									<a href="home.php?mod=space&uid=$blog[uid]" target="_blank">$blog[username]</a> <span class="xg1">$blog[dateline]</span>
								</dd>
								<dd class="cl" id="blog_article_$blog[blogid]">
									<!--{if $blog[pic]}--><div class="atc"><a href="home.php?mod=space&uid=$blog[uid]&do=blog&id=$blog[blogid]" target="_blank"><img src="$blog[pic]" alt="$blog[subject]" class="tn" /></a></div><!--{/if}-->
									$blog[message]
								</dd>
								<dd class="xg1">
									<!--{if $blog[classname]}-->{lang personal_category}: <a href="home.php?mod=space&uid=$blog[uid]&do=blog&classid=$blog[classid]&view=me" target="_blank">{$blog[classname]}</a><span class="pipe">|</span><!--{/if}-->
									<!--{if $blog[viewnum]}--><a href="home.php?mod=space&uid=$blog[uid]&do=blog&id=$blog[blogid]" target="_blank">$blog[viewnum] {lang blog_read}</a><span class="pipe">|</span><!--{/if}-->
									<a href="home.php?mod=space&uid=$blog[uid]&do=blog&id=$blog[blogid]#comment" target="_blank"><span id="replynum_$blog[blogid]">$blog[replynum]</span> {lang blog_replay}</a>
								</dd>
							</dl>
						<!--{/loop}-->
					</div>
					<!--{if empty($showtype)}-->
						<div class="ptm">
							<a class="xi2" href="misc.php?mod=tag&id=$id&type=blog">{lang more}...</a>
						</div>
					<!--{else}-->
						<!--{if $multipage}--><div class="pgs mtm cl">$multipage</div><!--{/if}-->
					<!--{/if}-->
				<!--{else}-->
					<p class="emp">{lang no_content}</p>
				<!--{/if}-->
			</div>
		</div>
	<!--{/if}-->
</div>

<!--{else}-->

<div id="ct" class="wp cl">
	<h1 class="mt"><i class="fico-tag fic12 xg2" alt="tag"></i> {lang tag}: $searchtagname</h1>
	<div class="zaobm bg0">
		<div class="bm_c">
			<form method="post" action="misc.php?mod=tag" class="pns">
				<input type="text" name="name" class="px vm" size="30" />&nbsp;
				<button type="submit" class="pn vm"><em>{lang search}</em></button>
			</form>
			<div class="taglist mtm mbm"><p class="emp">{lang empty_tags}</p></div>
		</div>
	</div>
</div>

<!--{/if}-->

<!--{template common/footer}-->