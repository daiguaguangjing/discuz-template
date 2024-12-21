<?php echo 'QQ:2039074300';exit;?>
<!--{if $leftside['favorites']}-->
<div class="zaobm bg0 p15 mb10">
	<h2 class="mbn fic15"><a href="home.php?mod=space&do=favorite&type=forum">{lang favorite_forums}</a></h2>
	<dl id="lf_fav" class="fd_bdl_fav">
		<!--{loop $leftside['favorites'] $favfid $fdata}-->
		<dd>
		<!--{if !empty($_G['cache']['forums'][$favfid]['domain']) && !empty($_G['setting']['domain']['root']['forum'])}-->
			<a href="{$_G['scheme']}://{$_G['cache']['forums'][$favfid]['domain']}.{$_G['setting']['domain']['root']['forum']}" title="$fdata[0]">$fdata[0]</a>
		<!--{else}-->
			<a href="forum.php?mod=forumdisplay&fid=$favfid">$fdata[0]</a>
		<!--{/if}-->
		</dd>
		<!--{/loop}-->
	</dl>
</div>
<!--{else}-->
<div class="zaobm bg0 p15 mb10 fic15" style="display:none;">{lang forum_nav}</div>
<!--{/if}-->
<!--{loop $leftside['forums'] $upfid $gdata}-->
	<!--{if $gdata['sub']}-->
	<div class="zaobm bg0 p15 mb10">
		<dl class="{if $fgroupid == $upfid || $_G['setting']['leftsideopen']}a{/if}" id="lf_$upfid">
			<dt><h2 class="mbn fic15"><a href="javascript:;" hidefocus="true" onclick="leftside('lf_$upfid')" title="$gdata['name']">$gdata['name']</a></h2></dt>
			<!--{loop $gdata['sub'] $subfid $name}-->
			<dd{if $_G['fid'] == $subfid || $_G['forum']['fup'] == $subfid} class="light"{/if}>
				<!--{if !empty($_G['cache']['forums'][$subfid]['domain']) && !empty($_G['setting']['domain']['root']['forum'])}-->
					<a href="{$_G['scheme']}://{$_G['cache']['forums'][$subfid]['domain']}.{$_G['setting']['domain']['root']['forum']}" title="$name">$name</a>
				<!--{else}-->
					<a href="forum.php?mod=forumdisplay&fid=$subfid" title="$name">$name</a>
				<!--{/if}-->
			</dd>
			<!--{/loop}-->
		</dl>
	</div>
	<!--{/if}-->
<!--{/loop}-->