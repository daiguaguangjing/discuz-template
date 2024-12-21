<?php echo 'QQ:2039074300';exit;?>
<div class="zaobm bg0">
	<div class="bm_c bbda xg2">
		<!--{if $keyword}-->{lang search_result_keyword}<!--{else}-->{lang search_result}<!--{/if}-->
	</div>
	<div class="bm_c">
	<!--{ad/search/y mtw}-->
	<!--{if empty($articlelist)}-->
		<p class="xg2">{lang search_nomatch}</p>
	<!--{else}-->
		<div class="search_slst">
			<ul>
				<!--{loop $articlelist $article}-->
				<li class="cl">
					<div class="search_slst_icon">
						<a href="home.php?mod=space&uid=$article[uid]" target="_blank"><img src="uc_server/avatar.php?uid=$article[uid]&size=middle"></a>
					</div>
					<div class="search_slst_info">
						<h3 class="fic18"><a href="{echo fetch_article_url($article);}" target="_blank">$article[title]</a></h3>
						<p class="fic15 xg2 mtn">$article[summary]</p>
						<p class="xg2 mtn">
							<span>$article[dateline]</span>
							 -
							<span><a href="home.php?mod=space&uid=$article[uid]" target="_blank">$article[username]</a></span>
							<span class="y">$article[commentnum]{lang a_comment}</span>
							<span class="y">$article[viewnum]{lang a_visit}&nbsp;&nbsp;</span>
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