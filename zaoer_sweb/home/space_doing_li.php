<?php echo 'QQ:2039074300';exit;?>
<!--{if $list}-->
<ul>
<!--{loop $list $value}-->
	<!--{if $value[uid]}-->
	<li class="ptn pbn{$value['class']}" style="$value[style]">
		<a href="home.php?mod=space&uid=$value[uid]" class="xg1">$value[username]: </a>$value[message] <span class="xg1">(<!--{date($value['dateline'], 'n-j H:i')}-->)</span>
		<!--{if $_G[uid] && helper_access::check_module('doing')}-->
			<a href="javascript:;" onclick="docomment_form($value[doid], $value[id], '$_GET[key]');" class="xg1 fic10">{lang reply}</a>
		<!--{/if}-->
		<!--{if $value[uid]==$_G[uid] || $dv['uid']==$_G[uid] || checkperm('managedoing')}-->
			 <a href="home.php?mod=spacecp&ac=doing&op=delete&doid=$value[doid]&id=$value[id]&handlekey=doinghk_{$value[doid]}_$value[id]" id="{$_GET[key]}_doing_delete_{$value[doid]}_{$value[id]}" onclick="showWindow(this.id, this.href, 'get', 0);" class="xg1 fic10">{lang delete}</a>
		<!--{/if}-->
		<!--{if checkperm('managedoing')}-->
		<span class="xg1 xw0" style="display: none;">IP: $value[ip]:$value[port]</span>
		<!--{/if}-->
		<div id="{$_GET[key]}_form_{$value[doid]}_{$value[id]}"></div>
	</li>
	<!--{/if}-->
<!--{/loop}-->
</ul>
<!--{/if}-->
<div class="tri"></div>