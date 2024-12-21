<?php echo 'QQ:2039074300';exit;?>
<div class="zaobm bg0">
	<div class="bm_c bbda xg2">
		<!--{if $keyword}-->{lang search_result_keyword}<!--{else}-->{lang search_result}<!--{/if}-->
	</div>
	<div class="bm_c">
	<!--{ad/search/y mtw}-->
	<!--{if empty($collectionlist)}-->
		<p class="xg2">{lang search_nomatch}</p>
	<!--{else}-->
		<div class="search_slst">
			<ul>
			<!--{loop $collectionlist $key $value}-->
			<li class="cl">
				<div class="search_slst_icon">
					<a href="home.php?mod=space&uid=$value['uid']" target="_blank"><img src="uc_server/avatar.php?uid=$value['uid']&size=middle"></a>
				</div>
				<div class="search_slst_info">
					<h3 class="fic18"><a href="forum.php?mod=collection&action=view&ctid=$value[ctid]" target="_blank">$value[name]</a></h3>
					<p class="fic15 xg2 mtn">$value[desc]</p>
					<p class="xg2 mtn">
						<span>{lang lastupdate} $value[lastupdate]</span>
						<span class="y">{lang threads}$value[threadnum]</span>
						<span class="y">{lang comment}$value[commentnum]&nbsp;&nbsp;</span>
						<span class="y">{lang subscribe}$value[follownum]&nbsp;&nbsp;</span>
					</p>
				</div>
			</li>
			<!--{/loop}-->
			</ul>
		</div>
		<!--{if !empty($multipage)}--><div class="pgs cl mbm">$multipage</div><!--{/if}-->
	<!--{/if}-->
	</div>
</div>