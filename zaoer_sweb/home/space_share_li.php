<?php echo 'QQ:2039074300';exit;?>
<!--{if empty($ajax_edit)}--><li id="share_$value[sid]_li"><!--{/if}-->
	<div class="h">
		<div class="y">
		<!--{if $value[uid] != $_G[uid] && $value[itemid] && helper_access::check_module('share')}-->
			<a href="home.php?mod=spacecp&ac=share&type=$value[type]&id=$value[itemid]" id="k_share" onclick="showWindow(this.id, this.href, 'get', 0);">{lang sharemetoo}</a>
			<span class="pipe">|</span>
		<!--{/if}-->
		<!--{hook/space_share_comment_op $k}-->
		<!--{if $value[sid]}--><a href="home.php?mod=space&uid=$value[uid]&do=share&id=$value[sid]" target="_blank">{lang comment}</a><!--{/if}-->
		<!--{if $value[uid]==$_G[uid]}-->
			<span class="pipe">|</span>
			<a href="home.php?mod=spacecp&ac=share&op=delete&sid=$value[sid]&handlekey=dellshk_{$value[sid]}" id="s_$value[sid]_delete" onclick="showWindow(this.id, this.href, 'get', 0);">{lang delete}</a>
		<!--{/if}-->
		</div>
		<a href="home.php?mod=space&uid=$value[uid]" c="1" target="_blank">$value[username]</a>
		<a href="home.php?mod=space&uid=$value[uid]&do=share&id=$value[sid]" target="_blank">$value[title_template]</a>
		<!--{if $value[status] == 1}--><span class="xgl">({lang moderate_need})<!--{/if}-->
		<span class="xg1"><!--{date($value['dateline'], 'u')}--></span>
	</div>
	<div class="ec cl">
		<!--{if $value['image']}-->
		<a href="$value[image_link]" target="_blank"><img src="$value[image]" class="tn" alt="" /></a>
		<!--{/if}-->
		<div class="d">
			$value[body_template]
		</div>
		<!--{if $value['type'] == 'video'}-->
			<!--{if !empty($value['body_data']['player'])}-->
			{$value['body_data']['player']}
			<!--{/if}-->
		<!--{elseif $value['type'] == 'music'}-->
			<!--{if !empty($value['body_data']['player'])}-->
			{$value['body_data']['player']}
			<!--{/if}-->
		<!--{elseif $value['type'] == 'flash'}-->
			<!--{if !empty($value['body_data']['player'])}-->
			{$value['body_data']['player']}
			<!--{/if}-->
		<!--{/if}-->
		<!--{if $value[body_general]}-->
		<div class="quote{if $value['image']} z{/if}"><blockquote id="quote_{$id}">$value[body_general]</blockquote></div>
		<!--{/if}-->
	</div>
<!--{if empty($ajax_edit)}--></li><!--{/if}-->