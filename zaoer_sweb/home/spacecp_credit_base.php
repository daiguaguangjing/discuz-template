<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->
	<!--{subtemplate home/spacecp_header}-->
		<!--{hook/spacecp_credit_top}-->
		<!--{subtemplate home/spacecp_credit_header}-->

		<!--{if in_array($_GET['op'], array('base', 'buy', 'transfer', 'exchange'))}-->
			<ul class="creditl mtm bbda cl">
			<!--{eval $creditid=0;}-->
			<!--{if $_GET['op'] == 'base' && $_G['setting']['creditstrans']}-->
				<!--{eval $creditid=$_G['setting']['creditstrans'];}-->
				<!--{if $_G['setting']['extcredits'][$creditid]}-->
				<!--{eval $credit=$_G['setting']['extcredits'][$creditid]; }-->
				<li class="xi1 cl">
					<em><!--{if $credit[img]}--> {$credit[img]}<!--{/if}--> {$credit[title]}: </em><!--{echo getuserprofile('extcredits'.$creditid);}--> {$credit[unit]} &nbsp; <!--{if ($_G['setting']['ec_ratio'] && $is_enable_pay) || $_G['setting']['card']['open']}--><a href="home.php?mod=spacecp&ac=credit&op=buy" class="xi2">{lang card_use}&raquo;</a><!--{/if}--></li>
				<!--{/if}-->
			<!--{/if}-->
			<!--{loop $_G['setting']['extcredits'] $id $credit}-->
				<!--{if $id!=$creditid}-->
				<li><em><!--{if $credit[img]}--> {$credit[img]}<!--{/if}--> {$credit[title]}: </em><!--{echo getuserprofile('extcredits'.$id);}--> {$credit[unit]}</li>
				<!--{/if}-->
			<!--{/loop}-->
			<!--{if  $_GET['op'] == 'base'}-->
				<li class="cl"><em>{lang credits}: </em>$_G['member']['credits'] <span class="xg1">( $creditsformulaexp )</span></li>
			<!--{/if}-->
			<!--{hook/spacecp_credit_extra}-->
			</ul>
		<!--{/if}-->
		<!--{if $_GET['op'] == 'base'}-->
			<table summary="{lang memcp_credits_log_transaction}" cellspacing="0" cellpadding="0" class="dt mtm">
				<caption>
					<h2 class="mbm xs2">
						<a href="home.php?mod=spacecp&ac=credit&op=log" class="xi2 xs1 xw0 y">{lang viewmore}&raquo;</a>{lang memcp_credits_log}
					</h2>
				</caption>
				<tr>
					<th width="80">{lang operation}</th>
					<th width="80">{lang logs_credit}</th>
					<th>{lang detail}</th>
					<th width="100">{lang changedateline}</th>
				</tr>
			<!--{if $loglist}-->
				<!--{loop $loglist $value}-->
				<!--{eval $value = makecreditlog($value, $otherinfo);}-->
				<tr>
					<td><!--{if $value['operation']}--><a href="home.php?mod=spacecp&ac=credit&op=log&optype=$value['operation']">$value['optype']</a><!--{else}-->$value['title']<!--{/if}--></td>
					<td>$value['credit']</td>
					<td><!--{if $value['operation']}-->$value['opinfo']<!--{else}-->$value['text']<!--{/if}--></td>
					<td>$value['dateline']</td>
				</tr>
				<!--{/loop}-->
			<!--{else}-->
				<tr><td colspan="4"><p class="emp">{lang memcp_credits_log_none}</p></td></tr>
			<!--{/if}-->
			</table>

		<!--{elseif $_GET['op'] == 'buy'}-->

			<!--{if $_G[setting][ec_ratio] && $is_enable_pay}-->
			<form id="addfundsbuyform" name="addfundsbuyform" method="post" autocomplete="off" action="home.php?mod=spacecp&ac=credit&op=buy" onsubmit="ajaxpost(this.id, 'return_addfundsbuyform');">
				<input type="hidden" name="formhash" value="{FORMHASH}" />
				<input type="hidden" name="addfundsbuyform" value="true" />
				<input type="hidden" name="handlekey" value="buycredit" />
				<table cellspacing="0" cellpadding="0" class="tfm mtn">
					<tr id="paybox">
						<th>{lang memcp_credits_addfunds}</th>
						<td class="pns">
							<input type="text" size="5" class="px" style="width: auto;" id="addfundamount" name="addfundamount" value="0" onkeyup="addcalcredit()" />
							&nbsp;{$_G[setting][extcredits][$_G[setting][creditstrans]][title]}&nbsp;
							{lang credits_need}&nbsp;{lang memcp_credits_addfunds_caculate_radio}
						</td>
						<td width="300" class="d">
							{lang memcp_credits_addfunds_rules_ratio} =  <strong>$_G[setting][ec_ratio]</strong> {$_G[setting][extcredits][$_G[setting][creditstrans]][unit]}{$_G[setting][extcredits][$_G[setting][creditstrans]][title]}
							<!--{if $_G[setting][ec_mincredits]}--><br />{lang memcp_credits_addfunds_rules_min}  <strong>$_G[setting][ec_mincredits]</strong> {$_G[setting][extcredits][$_G[setting][creditstrans]][unit]}{$_G[setting][extcredits][$_G[setting][creditstrans]][title]}<!--{/if}-->
							<!--{if $_G[setting][ec_maxcredits]}--><br />{lang memcp_credits_addfunds_rules_max}  <strong>$_G[setting][ec_maxcredits]</strong> {$_G[setting][extcredits][$_G[setting][creditstrans]][unit]}{$_G[setting][extcredits][$_G[setting][creditstrans]][title]}<!--{/if}-->
							<!--{if $_G[setting][ec_maxcreditspermonth]}--><br />{lang memcp_credits_addfunds_rules_month}  <strong>$_G[setting][ec_maxcreditspermonth]</strong> {$_G[setting][extcredits][$_G[setting][creditstrans]][unit]}{$_G[setting][extcredits][$_G[setting][creditstrans]][title]}<!--{/if}-->
						</td>
					</tr>
					<tr>
						<th>&nbsp;</th>
						<td colspan="2">
							<button type="submit" name="addfundsbuysubmit_btn" class="pn" id="addfundsbuysubmit_btn" value="true"><em>{lang memcp_credits_addfunds}</em></button>
						</td>
					</tr>
				</table>
			</form>
			<span style="display: none" id="return_addfundsbuyform"></span>
			<script type="text/javascript">
				function addcalcredit() {
					var addfundamount = $('addfundamount').value.replace(/^0/, '');
					var addfundamount = parseInt(addfundamount);
					$('desamount').innerHTML = !isNaN(addfundamount) ? Math.ceil(((addfundamount / $_G[setting][ec_ratio]) * 100)) / 100 : 0;
				}
			</script>
			<!--{/if}-->
			<!--{if $_G[setting][card][open]}-->
			<form id="addfundscardform" name="addfundscardform" method="post" autocomplete="off" action="home.php?mod=spacecp&ac=credit&op=buy" onsubmit="ajaxpost(this.id, 'return_addfundscardform');">
				<input type="hidden" name="formhash" value="{FORMHASH}" />
				<input type="hidden" name="addfundscardsubmit" value="true" />
				<input type="hidden" name="handlekey" value="buycredit" />
				<table cellspacing="0" cellpadding="0" class="tfm mtn">
					<tr id="cardbox">
						<th>{lang card}</th>
						<td colspan="2">
							<input type="text" class="px" id="cardid" name="cardid" />
						</td>
					</tr>
					<!--{if $seccodecheck || $secqaacheck}-->
				</table>
				<!--{block sectpl}--><table id="card_box_sec" cellspacing="0" cellpadding="0" class="tfm mtn"><tr><th><sec></th><td colspan="2"><span id="sec<hash>" onclick="showMenu({'ctrlid':this.id,'win':'{$_GET[handlekey]}'})"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div></td></tr></table><!--{/block}-->
				<!--{subtemplate common/seccheck}-->
				<table cellspacing="0" cellpadding="0" class="tfm mtn">
					<!--{/if}-->
					<tr>
						<th>&nbsp;</th>
						<td colspan="2">
							<button type="submit" name="addfundscardsubmit_btn" class="pn" id="addfundscardsubmit_btn" value="true"><em>{lang memcp_credits_addfunds}</em></button>
						</td>
					</tr>

				</table>
			</form>
			<span style="display: none" id="return_addfundscardform"></span>
			<!--{/if}-->
		<!--{elseif $_GET['op'] == 'transfer'}-->

			<!--{if $_G[setting][transferstatus] && $_G['group']['allowtransfer']}-->
			<form id="transferform" name="transferform" method="post" autocomplete="off" action="home.php?mod=spacecp&ac=credit&op=transfer" onsubmit="ajaxpost(this.id, 'return_transfercredit');">
				<input type="hidden" name="formhash" value="{FORMHASH}" />
				<input type="hidden" name="transfersubmit" value="true" />
				<input type="hidden" name="handlekey" value="transfercredit" />
				<table cellspacing="0" cellpadding="0" class="tfm mtn">
					<tr>
						<th>{lang memcp_credits_transfer}</th>
						<td class="pns">
							<input type="text" name="transferamount" id="transferamount" class="px" size="5" style="width: auto;" value="0" />
							&nbsp;{$_G[setting][extcredits][$_G[setting][creditstransextra][9]][title]}&nbsp;
							{lang credits_give}&nbsp;
							<input type="text" name="to" id="to" class="px" size="15" style="width: auto;" />
						</td>
						<td width="300" class="d">
							{lang memcp_credits_transfer_min_balance} $_G[setting][transfermincredits] {$_G[setting][extcredits][$_G[setting][creditstransextra][9]][unit]}<br />
							<!--{if intval($taxpercent) > 0}-->{lang credits_tax} $taxpercent<!--{/if}-->
						</td>
					</tr>
					<tr>
						<th><span class="rq">*</span>{lang transfer_login_password}</th>
						<td><input type="password" name="password" class="px" value="" /></td>
					</tr>
					<tr>
						<th>{lang credits_transfer_message}</th>
						<td><input type="text" name="transfermessage" class="px" size="40" /></td>
					</tr>
					<tr>
						<th>&nbsp;</th>
						<td colspan="2">
							<button type="submit" name="transfersubmit_btn" id="transfersubmit_btn" class="pn" value="true"><em>{lang memcp_credits_transfer}</em></button>
							<span style="display: none" id="return_transfercredit"></span>
						</td>
					</tr>
				</table>
			</form>
			<!--{/if}-->

		<!--{elseif $_GET['op'] == 'exchange'}-->

			<!--{if $_G[setting][exchangestatus] && ($_G[setting][extcredits] || $_CACHE['creditsettings'])}-->
			<form id="exchangeform" name="exchangeform" method="post" autocomplete="off" action="home.php?mod=spacecp&ac=credit&op=exchange&handlekey=credit" onsubmit="showWindow('credit', 'exchangeform', 'post');">
				<input type="hidden" name="formhash" value="{FORMHASH}" />
				<input type="hidden" name="operation" value="exchange" />
				<input type="hidden" name="exchangesubmit" value="true" />
				<input type="hidden" name="outi" value="" />
				<table cellspacing="0" cellpadding="0" class="tfm mtn">
					<tr>
						<th>{lang memcp_credits_exchange}</th>
						<td class="pns">
							<input type="text" id="exchangeamount" name="exchangeamount" class="px" size="5" style="width: auto;" value="0" onkeyup="exchangecalcredit()" />
							<select name="tocredits" id="tocredits" class="ps" onChange="exchangecalcredit()">
							<!--{loop $_G[setting][extcredits] $id $ecredits}-->
								<!--{if $ecredits[allowexchangein] && $ecredits[ratio]}-->
									<option value="$id" unit="$ecredits[unit]" title="$ecredits[title]" ratio="$ecredits[ratio]">$ecredits[title]</option>
								<!--{/if}-->
							<!--{/loop}-->
							<!--{eval $i=0;}-->

							<!--{loop $_CACHE['creditsettings'] $id $data}--><!--{eval $i++;}-->
								<!--{if $data[title]}-->
								<option value="$id" outi="$i">$data[title]</option>
								<!--{/if}-->
							<!--{/loop}-->
							</select>
							&nbsp;{lang credits_need}&nbsp;
							<input type="text" id="exchangedesamount" class="px" size="5" style="width: auto;" value="0" disabled="disabled" />
							<select name="fromcredits" id="fromcredits_0" class="ps" style="display: none" onChange="exchangecalcredit();">
							<!--{loop $_G[setting][extcredits] $id $credit}-->
								<!--{if $credit[allowexchangeout] && $credit[ratio]}-->
									<option value="$id" unit="$credit[unit]" title="$credit[title]" ratio="$credit[ratio]">$credit[title]</option>
								<!--{/if}-->
							<!--{/loop}-->
							</select>
							<!--{eval $i=0;}-->
							<!--{loop $_CACHE['creditsettings'] $id $data}--><!--{eval $i++;}-->
								<select name="fromcredits_$i" id="fromcredits_$i" class="ps" style="display: none" onChange="exchangecalcredit()">
								<!--{loop $data[creditsrc] $id $ratio}-->
									<option value="$id" unit="$_G['setting']['extcredits'][$id][unit]" title="$_G['setting']['extcredits'][$id][title]" ratiosrc="$data[ratiosrc][$id]" ratiodesc="$data[ratiodesc][$id]">$_G['setting']['extcredits'][$id][title]</option>
								<!--{/loop}-->
								</select>
							<!--{/loop}-->
							<script type="text/javascript">
								var tocredits = $('tocredits');
								var fromcredits = $('fromcredits_0');
								if(fromcredits.length > 1 && tocredits.value == fromcredits.value) {
									fromcredits.selectedIndex = tocredits.selectedIndex + 1;
								}
							</script>
						</td>
						<td width="300" class="d">
							<!--{if $_G[setting][exchangemincredits]}-->
								{lang memcp_credits_exchange_min_balance} $_G[setting][exchangemincredits]<br />
							<!--{/if}-->
							<span id="taxpercent">
							<!--{if intval($taxpercent) > 0}-->
								{lang credits_tax} $taxpercent
							<!--{/if}-->
							</span>
						</td>
					</tr>
					<tr>
						<th><span class="rq">*</span>{lang transfer_login_password}</th>
						<td colspan="2"><input type="password" name="password" class="px" value="" size="20" /></td>
					</tr>
					<tr>
						<th>&nbsp;</th>
						<td colspan="2">
							<button type="submit" name="exchangesubmit_btn" id="exchangesubmit_btn" class="pn" value="true"><em>{lang memcp_credits_exchange}</em></button>
						</td>
					</tr>
				</table>
			</form>
			<script type="text/javascript">
				function exchangecalcredit() {
					with($('exchangeform')) {
						tocredit = tocredits[tocredits.selectedIndex];
						if(!tocredit) {
							return;
						}
						<!--{eval $i=0;}-->
						<!--{loop $_CACHE['creditsettings'] $id $data}--><!--{eval $i++;}-->
							$('fromcredits_$i').style.display = 'none';
						<!--{/loop}-->
						if(tocredit.getAttribute('outi')) {
							outi.value = tocredit.getAttribute('outi');
							fromcredit = $('fromcredits_' + tocredit.getAttribute('outi'));
							$('taxpercent').style.display = $('fromcredits_0').style.display = 'none';
							fromcredit.style.display = '';
							fromcredit = fromcredit[fromcredit.selectedIndex];
							$('exchangeamount').value = $('exchangeamount').value.toInt();
							if($('exchangeamount').value != 0) {
								$('exchangedesamount').value = Math.floor( fromcredit.getAttribute('ratiosrc') / fromcredit.getAttribute('ratiodesc') * $('exchangeamount').value);
							} else {
								$('exchangedesamount').value = '';
							}
						} else {
							outi.value = 0;
							$('taxpercent').style.display = $('fromcredits_0').style.display = '';
							fromcredit = fromcredits[fromcredits.selectedIndex];
							$('exchangeamount').value = $('exchangeamount').value.toInt();
							if(fromcredit.getAttribute('title') != tocredit.getAttribute('title') && $('exchangeamount').value != 0) {
								if(tocredit.getAttribute('ratio') < fromcredit.getAttribute('ratio')) {
									$('exchangedesamount').value = Math.ceil( tocredit.getAttribute('ratio') / fromcredit.getAttribute('ratio') * $('exchangeamount').value * (1 + $_G[setting][creditstax]));
								} else {
									$('exchangedesamount').value = Math.floor( tocredit.getAttribute('ratio') / fromcredit.getAttribute('ratio') * $('exchangeamount').value * (1 + $_G[setting][creditstax]));
								}
							} else {
								$('exchangedesamount').value = '';
							}
						}
					}
				}
				String.prototype.toInt = function() {
					var s = parseInt(this);
					return isNaN(s) ? 0 : s;
				}
				exchangecalcredit();
			</script>
			<!--{/if}-->

		<!--{else}-->
			{eval
				$_TPL['cycletype'] = array(
					'0' => '{lang one_time}',
					'1' => '{lang everyday}',
					'2' => '{lang the_time}',
					'3' => '{lang interval_minutes}',
					'4' => '{lang open_cycle}'
				);
			}
			<div class="tbmu bw0">
				<p>{lang activity_award_message}</p>
			</div>
			<table cellspacing="0" cellpadding="0" class="dt valt">
				<tr>
					<th class="xw1">{lang action_name}</th>
					<th class="xw1">{lang cycle_range}</th>
					<th class="xw1">{lang max_award_per_week}</th>
					<!--{loop $_G['setting']['extcredits'] $key $value}-->
					<th class="xw1">$value[title]</th>
					<!--{/loop}-->
				</tr>
				<!--{eval $i = 0;}-->
				<!--{loop $list $key $value}-->
				<!--{eval $i++;}-->
				<tr{if $i % 2 == 0} class="alt"{/if}>
					<td>$value[rulename]</td>
					<td>$_TPL[cycletype][$value[cycletype]]</td>
					<td><!--{if $value[rewardnum]}-->$value[rewardnum]<!--{else}-->{lang unlimited_time}<!--{/if}--></td>
					<!--{loop $_G['setting']['extcredits'] $key $credit}-->
					<!--{eval $creditkey = 'extcredits'.$key;}-->
					<td><!--{if $value[$creditkey] > 0}-->+$value[$creditkey]<!--{elseif $value[$creditkey] < 0}-->$value[$creditkey]<!--{else}-->0<!--{/if}--></td>
					<!--{/loop}-->
				</tr>
				<!--{/loop}-->
			</table>
		<!--{/if}-->
		<!--{hook/spacecp_credit_bottom}-->
		</div>
	</div>
	<div class="appl">
		<!--{subtemplate home/spacecp_footer}-->
	</div>
</div>
</div>
<!--{template common/footer}-->