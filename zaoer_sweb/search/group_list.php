<?php echo 'QQ:2039074300';exit;?>
<div class="zaobm bg0">
	<div class="bm_c bbda xg2">
		<!--{if $keyword && empty($searchstring[2])}-->{lang search_group_result_keyword}  <!--{if empty($viewgroup) && !empty($grouplist)}--><a href="search.php?mod=group&searchid=$searchid&orderby=$orderby&ascdesc=$ascdesc&searchsubmit=yes&viewgroup=1" target="_blank">{lang search_group_viewgroup}</a><!--{/if}--><!--{elseif $viewgroup}-->{lang search_group_result}<!--{else}-->{lang search_result}<!--{/if}-->
	</div>
	<div class="bm_c">
	<!--{ad/search/y mtw}-->
	<!--{if $viewgroup}-->
		<!--{if empty($grouplist)}-->
			<p class="xg2">{lang search_nomatch}</p>
		<!--{else}-->
			<div class="search_slst mb15 bbda">
				<ul>
					<!--{loop $grouplist $group}-->
					<li class="cl">
						<div class="search_slst_icon">
							<a href="forum.php?mod=group&fid=$group[fid]" target="_blank"><img src="$group[icon]" /></a>
						</div>
						<div class="search_slst_info">
							<h3 class="fic18"><a href="forum.php?mod=group&fid=$group[fid]" target="_blank">$group[name]</a></h3>
							<p class="fic15 xg2 mtn">$article[summary]</p>
							<p class="xg2 mtn">
								<span>{lang creating_time} $group[dateline]</span>
								<!--{if $group['gviewperm'] == 1}--><span> - {lang public}</span><!--{/if}-->
								<span class="y">{lang member}$group[membernum]</span>
								<span class="y">{lang threads}$group[threads]&nbsp;&nbsp;</span>
								<span class="y">{lang credits}$group[commoncredits]&nbsp;&nbsp;</span>
							</p>
						</div>
					</li>
					<!--{/loop}-->
				</ul>
			</div>
			<!--{if !empty($multipage)}--><div class="pgs cl mbm">$multipage</div><!--{/if}-->
		<!--{/if}-->
	<!--{else}-->
		<!--{if !empty($grouplist) && $page < 2}-->
			<div class="search_slst mb15 bbda">
				<ul>
					<!--{loop $grouplist $group}-->
					<li class="cl">
						<div class="search_slst_icon">
							<a href="forum.php?mod=group&fid=$group[fid]" target="_blank"><img src="$group[icon]" /></a>
						</div>
						<div class="search_slst_info">
							<h3 class="fic18"><a href="forum.php?mod=group&fid=$group[fid]" target="_blank">$group[name]</a></h3>
							<p class="fic15 xg2 mtn">$article[summary]</p>
							<p class="xg2 mtn">
								<span>{lang creating_time} $group[dateline]</span>
								<!--{if $group['gviewperm'] == 1}--><span> - {lang public}</span><!--{/if}-->
								<span class="y">{lang member}$group[membernum]</span>
								<span class="y">{lang threads}$group[threads]&nbsp;&nbsp;</span>
								<span class="y">{lang credits}$group[commoncredits]&nbsp;&nbsp;</span>
							</p>
						</div>
					</li>
					<!--{/loop}-->
				</ul>
			</div>
		<!--{/if}-->
		<!--{if !empty($threadlist)}-->
			<div class="search_slst">
				<ul>
					<!--{loop $threadlist $thread}-->
					<li class="cl">
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
							<h3 class="fic18"><a href="forum.php?mod=viewthread&tid=$thread[tid]&highlight=$index[keywords]" target="_blank" $thread[highlight]>$thread[subject]</a></h3>
							<p class="fic15 xg2 mtn">$thread[message]</p>
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
								<span><a href="forum.php?mod=forumdisplay&fid=$thread[fid]" target="_blank" class="xi1">$thread[forumname]</a></span>
								<span class="y">$thread[replies] {lang a_comment_thread}</span>
								<span class="y">$thread[views] {lang a_visit}&nbsp;&nbsp;</span>
							</p>
						</div>
					</li>
					<!--{/loop}-->
				</ul>
			</div>
		<!--{/if}-->
		<!--{if !empty($multipage)}--><div class="pgs cl mbm">$multipage</div><!--{/if}-->
	<!--{/if}-->
	</div>
</div>