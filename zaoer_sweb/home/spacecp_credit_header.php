<?php echo 'QQ:2039074300';exit;?>
<ul class="tb cl">
	<li {$opactives[base] or ''}><a href="home.php?mod=spacecp&ac=credit&op=base">{lang my_credits}</a></li>
	<!--{if ($_G[setting][ec_ratio] && $is_enable_pay) || $_G['setting']['card']['open']}-->
	<li $opactives[buy]><a href="home.php?mod=spacecp&ac=credit&op=buy">{lang buy_credits}</a></li>
	<!--{/if}-->
	<!--{if $_G[setting][transferstatus] && $_G['group']['allowtransfer']}-->
	<li {$opactives[transfer] or ''}><a href="home.php?mod=spacecp&ac=credit&op=transfer">{lang transfer_credits}</a></li>
	<!--{/if}-->
	<!--{if $_G[setting][exchangestatus]}-->
	<li $opactives[exchange]><a href="home.php?mod=spacecp&ac=credit&op=exchange">{lang exchange_credits}</a></li>
	<!--{/if}-->
	<li {$opactives[log] or ''}><a href="home.php?mod=spacecp&ac=credit&op=log">{lang memcp_credits_log}</a></li>
	<li {$opactives[rule] or ''}><a href="home.php?mod=spacecp&ac=credit&op=rule">{lang credit_rule}</a></li>
	<!--{if !empty($_G['setting']['plugins']['spacecp_credit'])}-->
		<!--{loop $_G['setting']['plugins']['spacecp_credit'] $id $module}-->
			<!--{if in_array($module['adminid'], array(0, -1)) || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])}--><li{if $_GET[id] == $id} class="a"{/if}><a href="home.php?mod=spacecp&ac=plugin&op=credit&id=$id">$module[name]</a></li><!--{/if}-->
		<!--{/loop}-->
	<!--{/if}-->
	<!--{if $op == 'rule'}-->
		<li class="y">
			<select onchange="location.href='home.php?mod=spacecp&ac=credit&op=rule&fid='+this.value"><option value="">{lang credit_rule_global}</option>$select</select>
		</li>
	<!--{/if}-->
</ul>