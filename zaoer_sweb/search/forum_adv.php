<?php echo 'QQ:2039074300';exit;?>
<!--{template search/header}-->
<div id="ct" class="cl w">
	<div class="searchmw">
		<form class="searchform" method="post" autocomplete="off" action="search.php?mod=forum" onsubmit="if($('scform_srchtxt')) searchFocus($('scform_srchtxt'));">
			<input type="hidden" name="formhash" value="{FORMHASH}" />

			<!--{subtemplate search/pubsearch}-->

			<!--{eval $policymsgs = $p = '';}-->
			<!--{loop $_G['setting']['creditspolicy']['search'] $id $policy}-->
			<!--{block policymsg}--><!--{if $_G['setting']['extcredits'][$id][img]}-->$_G['setting']['extcredits'][$id][img] <!--{/if}-->$_G['setting']['extcredits'][$id][title] $policy $_G['setting']['extcredits'][$id][unit]<!--{/block}-->
			<!--{eval $policymsgs .= $p.$policymsg;$p = ', ';}-->
			<!--{/loop}-->
			<!--{if $policymsgs}--><p>{lang search_credit_msg}</p><!--{/if}-->
		</form>

		<div class="zaobm bg0">
			<div class="bm_h mb10"><h2>{lang search_thread_higher}</h2></div>
			<div class="bm_c">
				<form method="post" autocomplete="off" action="search.php?mod=forum" onsubmit="if($('srchtxt_1')) searchFocus($('srchtxt_1'));">
					<input type="hidden" name="formhash" value="{FORMHASH}" />

					<table summary="{lang search}" cellspacing="0" cellpadding="0" class="tfm">
						<tr>
							<th>{lang keywords}</th>
							<td>
								<input type="text" name="srchtxt" id="srchtxt_1" class="px" size="25" maxlength="40" value="$keyword" />
								<!--{if ($_G['group']['allowsearch'] & 32)}--><label><input type="checkbox" name="srchtype" class="pc" value="fulltext" {$fulltextchecked}{if $posttableselect} onclick="if(this.checked){$('seltableid').style.display='';}else{$('seltableid').style.display='none';}"{/if}/>{lang search_fulltext}</label><!--{/if}-->
								<!--{if $posttableselect}-->&nbsp; $posttableselect<!--{/if}-->
								<script type="text/javascript">initSearchmenu('srchtxt_1');$('srchtxt_1').focus();</script>
							</td>
						</tr>

						<tr>
							<th>{lang author}</th>
							<td><input type="text" name="srchuname" id="srchname" class="px" size="25" maxlength="40" value="$srchuname" /></td>
						</tr>

					<tr>
							<th>{lang search_thread_range}</th>
							<td>
								<label class="lb"><input type="radio" class="pr" name="srchfilter" value="all" $srchfilterchecked[all]/>{lang search_thread_range_all}</label>
								<label class="lb"><input type="radio" class="pr" name="srchfilter" value="digest" $srchfilterchecked[digest]/>{lang search_thread_range_digest}</label>
								<label class="lb"><input type="radio" class="pr" name="srchfilter" value="top" $srchfilterchecked[top] />{lang search_thread_range_top}</label>
							</td>
						</tr>

						<tr>
							<th>{lang special_thread}</th>
							<td>
								<label class="lb"><input type="checkbox" class="pc" name="special[]" value="1"$specialchecked[1] />{lang special_poll}</label>
								<label class="lb"><input type="checkbox" class="pc" name="special[]" value="2"$specialchecked[2] />{lang special_trade}</label>
								<label class="lb"><input type="checkbox" class="pc" name="special[]" value="3"$specialchecked[3] />{lang special_reward}</label>
								<label class="lb"><input type="checkbox" class="pc" name="special[]" value="4"$specialchecked[4] />{lang special_activity}</label>
								<label class="lb"><input type="checkbox" class="pc" name="special[]" value="5"$specialchecked[5] />{lang special_debate}</label>
							</td>
						</tr>

						<tr>
							<th><label for="srchfrom">{lang search_time}</label></th>
							<td>
								<select id="srchfrom" name="srchfrom">
									<option value="0" $srchfromselected[0]>{lang search_any_date}</option>
									<option value="86400"$srchfromselected[86400]>{lang 1_days_ago}</option>
									<option value="172800"$srchfromselected[172800]>{lang 2_days_ago}</option>
									<option value="604800"$srchfromselected[604800]>{lang 7_days_ago}</option>
									<option value="2592000"$srchfromselected[2592000]>{lang 30_days_ago}</option>
									<option value="7776000"$srchfromselected[7776000]>{lang 90_days_ago}</option>
									<option value="15552000"$srchfromselected[15552000]>{lang 180_days_ago}</option>
									<option value="31536000"$srchfromselected[31536000]>{lang 365_days_ago}</option>
								</select>
								<label class="lb"><input type="radio" class="pr" name="before" value="" $beforechecked[0] />{lang search_newer}</label>
								<label class="lb"><input type="radio" class="pr" name="before" value="1" $beforechecked[1]/>{lang search_older}</label>
							</td>
						</tr>

						<tr>
							<th><label for="orderby">{lang search_orderby}</label></th>
							<td>
								<select id="orderby1" name="orderby" class="ps">
									<option value="lastpost" $orderbyselected[lastpost]>{lang order_lastpost}</option>
									<option value="dateline"$orderbyselected[dateline]>{lang order_starttime}</option>
									<option value="replies"$orderbyselected[replies]>{lang order_replies}</option>
									<option value="views"$orderbyselected[views]>{lang order_views}</option>
								</select>
								<select id="orderby2" name="orderby" class="ps" style="position: absolute; display: none" disabled="disabled">
									<option value="dateline" selected="selected">{lang dateline}</option>
									<option value="price">{lang post_trade_price}</option>
									<option value="expiration">{lang trade_remaindays}</option>
								</select>
								<label class="lb"><input type="radio" class="pr" name="ascdesc" value="asc"$ascchecked[asc] />{lang order_asc}</label>
								<label class="lb"><input type="radio" class="pr" name="ascdesc" value="desc"$ascchecked[desc] />{lang order_desc}</label>
							</td>
						</tr>

						<tr>
							<th valign="top"><label for="srchfid">{lang search_range}</label></th>
							<td>
								<select id="srchfid" name="srchfid[]" multiple="multiple" size="10" style="width: 26em;">
									<option value="all"{if !$srchfid} selected="selected"{/if}>{lang search_allforum}</option>
									$forumselect
								</select>
							</td>
						</tr>
						<tr>
							<th></th>
							<td>
								<input type="hidden" name="searchsubmit" value="yes" />
								<button type="submit" class="pn pnc"><strong>{lang search}</strong></button>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>

	</div>
</div>
<!--{template search/footer}-->