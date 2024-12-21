<?php echo 'QQ:2039074300';exit;?>
<div class="zaobm bg0">
	<div class="bm_c bbda xg2">
		<!--{if $keyword}-->{lang search_result_keyword}<!--{else}-->{lang search_result}<!--{/if}-->
	</div>
	<div class="bm_c">
	<!--{ad/search/y mtw}-->
	<!--{if empty($bloglist)}-->
		<p class="xg2">{lang search_nomatch}</p>
	<!--{else}-->
		<div class="search_slst">
			<ul>
				<!--{loop $bloglist $blog}-->
				<li class="cl">
					<div class="search_slst_icon">
						<a href="home.php?mod=space&uid=$blog[uid]" target="_blank"><img src="uc_server/avatar.php?uid=$blog[uid]&size=middle"></a>
					</div>
					<div class="search_slst_info">
						<h3 class="fic18"><a href="home.php?mod=space&uid=$blog[uid]&do=blog&id=$blog[blogid]"{if $blog[magiccolor]} class="magiccolor$blog[magiccolor]"{/if} target="_blank">$blog[subject]</a></h3>
						<p class="fic15 xg2 mtn">$blog[message]</p>
						<p class="xg2 mtn">
							<span>$blog[dateline]</span>
							 -
							<span><a href="home.php?mod=space&uid=$blog[uid]" target="_blank">$blog[username]</a></span>
							<span class="y">$blog[viewnum]{lang a_visit}</span>
							<span class="y">$blog[replynum]{lang a_comment}&nbsp;&nbsp;</span>
							<span class="y">$blog[hot]{lang heat}&nbsp;&nbsp;</span>
						</p>
					</div>
				</li>
				<!--{/loop}-->
			</ul>
		</div>
	<!--{/if}-->
	<!--{if !empty($multipage)}--><div class="pgs cl mbm">$multipage</div><!--{/if}-->
	</div>
</div>