<?php echo 'QQ:2039074300';exit;?>
<div class="zaobm bg0 cl">
	<div class="bm_c bbda xg2">
		<!--{if $keyword}-->{lang search_result_keyword}<!--{else}-->{lang search_result}<!--{/if}-->
	</div>
	<div class="bm_c cl">
	<!--{ad/search/y mtw}-->
	<!--{if empty($albumlist)}-->
		<p class="xg2">{lang search_nomatch}</p>
	<!--{else}-->
		<div class="search_album_list">
		<ul>
			<!--{loop $albumlist $key $value}-->
			<li>
				<a href="home.php?mod=space&uid=$value['uid']&do=album&id=$value['albumid']" target="_blank">
					<!--{if $value['pic']}--><img src="$value['pic']" /><!--{/if}-->
					<p>$value['albumname']</p>
				</a>
			</li>
			<!--{/loop}-->
		</ul>
		</div>
		<!--{if !empty($multipage)}--><div class="pgs cl mbm">$multipage</div><!--{/if}-->
	<!--{/if}-->
	</div>
</div>