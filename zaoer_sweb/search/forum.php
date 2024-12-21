<?php echo 'QQ:2039074300';exit;?>
<!--{subtemplate search/header}-->
<div id="ct" class="cl w">
	<div class="searchmw">
		<form class="searchform" method="post" autocomplete="off" action="search.php?mod=forum" onsubmit="if($('scform_srchtxt')) searchFocus($('scform_srchtxt'));">
			<input type="hidden" name="formhash" value="{FORMHASH}" />

			<!--{subtemplate search/pubsearch}-->
			<!--{hook/forum_top}-->

			<!--{eval $policymsgs = $p = '';}-->
			<!--{loop $_G['setting']['creditspolicy']['search'] $id $policy}-->
			<!--{block policymsg}--><!--{if $_G['setting']['extcredits'][$id][img]}-->$_G['setting']['extcredits'][$id][img] <!--{/if}-->$_G['setting']['extcredits'][$id][title] $policy $_G['setting']['extcredits'][$id][unit]<!--{/block}-->
			<!--{eval $policymsgs .= $p.$policymsg;$p = ', ';}-->
			<!--{/loop}-->
			<!--{if $policymsgs}--><p>{lang search_credit_msg}</p><!--{/if}-->
		</form>
		
		<!--{if $_G['basescript'] == 'search' && $_GET['mod'] == 'forum'}-->
		<!--{if $_G['setting']['forumstatus'] && $_G['setting']['srchhotkeywords'] && empty($searchid)}-->
		<div class="zaobm bg0">
			<div class="p15">
				<div class="mb10 xg2">{lang hot_search}</div>
				<div class="zaohotsearch">
				<!--{loop $_G['setting']['srchhotkeywords'] $val}-->
				<!--{if $val=trim($val)}-->
					<!--{eval $valenc=rawurlencode($val);}-->
					<!--{block srchhotkeywords[]}-->
						<!--{if !empty($searchparams['url'])}-->
						<a href="$searchparams['url']?q=$valenc&source=hotsearch{$srchotquery}" target="_blank">$val</a>
						<!--{else}-->
						<a href="search.php?mod=forum&srchtxt=$valenc&formhash={FORMHASH}&searchsubmit=true&source=hotsearch" target="_blank">$val</a>
						<!--{/if}-->
					<!--{/block}-->
				<!--{/if}-->
				<!--{/loop}-->
				<!--{echo implode('', $srchhotkeywords);}-->
				</div>
			</div>
		</div>
		<!--{/if}-->
		<!--{/if}-->
		
		<!--{if !empty($searchid) && submitcheck('searchsubmit', 1)}-->
			<!--{subtemplate search/thread_list}-->
		<!--{/if}-->

	</div>
</div>
<!--{hook/forum_bottom}-->

<!--{subtemplate search/footer}-->