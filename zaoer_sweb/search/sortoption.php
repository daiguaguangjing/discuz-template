<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->
<input type="hidden" name="selectsortid" value="$_G['forum_selectsortid']" />
<input type="hidden" name="srchtype" value="threadsort" />
<input type="hidden" name="fid" value="$srchfid" />

<!--{loop $_G['forum_optionlist'] $optionid $option}-->
	<!--{if $option['search']}-->
		<tr>
			<th>$option[title]</th>
			<td>
				<!--{if in_array($option['type'], array('number', 'text', 'email', 'calendar', 'image', 'url', 'textarea'))}-->
					<!--{if $option['type'] == 'calendar'}-->
						<script type="text/javascript" src="{$_G['setting']['jspath']}calendar.js?{VERHASH}"></script>
						<input type="text" name="searchoption[$optionid][value]" size="45" value="$option[value]" onclick="showcalendar(event, this, false)" />
					<!--{elseif $option['type'] == 'number'}-->
						<select name="searchoption[$optionid][condition]">
							<option value="0">{lang equal_to}</option>
							<option value="1">{lang more_than}</option>
							<option value="2">{lang lower_than}</option>
						</select>&nbsp;&nbsp;
						<input type="text" name="searchoption[$optionid][value]" size="35" value="$option[value]" />
						<input type="hidden" name="searchoption[$optionid][type]" value="number">
					<!--{else}-->
						<input type="text" name="searchoption[$optionid][value]" size="45" value="$option[value]" />
					<!--{/if}-->
				<!--{elseif in_array($option['type'], array('radio', 'checkbox', 'select'))}-->
					<!--{if $option[type] == 'select'}-->
						<select name="searchoption[$optionid][value]">
							<option value="0">{lang unlimited}</option>
						<!--{loop $option['choices'] $id $value}-->
							<option value="$id" $option['value'][$id]>$value</option>
						<!--{/loop}-->
						</select>
						<input type="hidden" name="searchoption[$optionid][type]" value="select">
					<!--{elseif $option['type'] == 'radio'}-->
						<!--{loop $option['choices'] $id $value}-->
							<input type="radio" class="pr" name="searchoption[$optionid][value]" size="45" value="$id" $option['value'][$id]> $value
						<!--{/loop}-->
						<input type="hidden" name="searchoption[$optionid][type]" value="radio">
					<!--{elseif $option['type'] == 'checkbox'}-->
						<!--{loop $option['choices'] $id $value}-->
							<input type="checkbox" class="pc" name="searchoption[$optionid][value][]" size="45" value="$id" $option['value'][$id][$id] /> $value
						<!--{/loop}-->
						<input type="hidden" name="searchoption[$optionid][type]" value="checkbox">
					<!--{/if}-->
				<!--{/if}-->
				$option[unit]
			</td>
		</tr>
	<!--{/if}-->
<!--{/loop}-->

<!--{template common/footer}-->