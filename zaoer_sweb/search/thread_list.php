<?php echo 'QQ:2039074300';exit;?>
<div class="zaobm bg0">
	<div class="bm_c bbda xg2">
		<!--{if $keyword}-->{lang search_result_keyword} <!--{if $modfid}--><a href="forum.php?mod=modcp&action=thread&fid=$modfid&keywords=$modkeyword&submit=true&do=search&page=$page" target="_blank">{lang goto_memcp}</a><!--{/if}--><!--{else}-->{lang search_result}<!--{/if}-->
	</div>
	<div class="bm_c">
		<!--{ad/search/y mtw}-->
		<!--{if empty($threadlist)}-->
			<p class="xg2">{lang search_nomatch}</p>
		<!--{else}-->
		
			<div class="search_slst" id="threadlist" {if $modfid} style="position: relative;"{/if}>
				<!--{if $modfid}-->
				<form method="post" autocomplete="off" name="moderate" id="moderate" action="forum.php?mod=topicadmin&action=moderate&fid=$modfid&infloat=yes&nopost=yes">
				<!--{/if}-->
				
				<ul>
					<!--{loop $threadlist $thread}-->
					<li class="cl" id="$thread[tid]">
						<div class="search_slst_icon">
							<!--{if $thread['authorid'] && $thread['author']}-->
								<a href="home.php?mod=space&uid=$thread[authorid]" target="_blank"><img src="<!--{avatar($thread['authorid'], 'middle', true)}-->"></a>
							<!--{else}-->
								<!--{if $_G['forum']['ismoderator']}-->
								<a href="home.php?mod=space&uid=$thread[authorid]" target="_blank"><img src="<!--{avatar($thread['authorid'], 'middle', true)}-->"></a>
								<!--{else}-->
								<a><img src="<!--{avatar($thread['0'], 'middle', true)}-->"></a>
								<!--{/if}-->
							<!--{/if}-->
						</div>
						<div class="search_slst_info">
							<h3 class="fic18">
								<!--{if $modfid}-->
									<!--{if $thread['fid'] == $modfid && ($thread['displayorder'] <= 3 || $_G['adminid'] == 1)}-->
										<input onclick="tmodclick(this)" type="checkbox" name="moderate[]" value="$thread[tid]" />&nbsp;
									<!--{else}-->
										<input type="checkbox" disabled="disabled" />&nbsp;
									<!--{/if}-->
								<!--{/if}-->
								<a href="forum.php?mod=viewthread&tid=$thread[realtid]&highlight=$index[keywords]" target="_blank" $thread[highlight]>$thread[subject]</a>
							</h3>
							<!--{if !$thread['price'] && !$thread['readperm']}-->
							<p class="fic15 xg2 mtn">$thread[message]</p>
							<!--{else}-->
							<p class="fic15 xg2 mtn">{lang thread_list_message1}</p>
							<!--{/if}-->
							<p class="xg2 mtn">
								<span>$thread[dateline]</span>
								 -
								<span>
									<!--{if $thread['authorid'] && $thread['author']}-->
										<a href="home.php?mod=space&uid=$thread[authorid]" target="_blank">$thread[author]</a>
									<!--{else}-->
										<!--{if $_G['forum']['ismoderator']}--><a href="home.php?mod=space&uid=$thread[authorid]" target="_blank">{lang anonymous}</a><!--{else}-->{lang anonymous}<!--{/if}-->
									<!--{/if}-->
								</span>
								 -
								<span><a href="forum.php?mod=forumdisplay&fid=$thread[fid]" target="_blank">$thread[forumname]</a></span>
								<span class="y">$thread[views]{lang a_visit}</span>
								<span class="y">$thread[replies]{lang a_comment_thread}&nbsp;&nbsp;</span>
							</p>
						</div>
					</li>
					<!--{/loop}-->
				</ul>
			<!--{if $modfid}-->
				<script type="text/javascript" src="{$_G[setting][jspath]}forum_moderate.js?{VERHASH}"></script>
				<!--{template forum/topicadmin_modlayer}-->
				</form>
			<!--{/if}-->
			</div>
		<!--{/if}-->
		<!--{if !empty($multipage)}--><div class="pgs cl mbm">$multipage</div><!--{/if}-->
	</div>
</div>