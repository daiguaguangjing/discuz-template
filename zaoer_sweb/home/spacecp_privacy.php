<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->
<!--{subtemplate home/spacecp_header}-->
			<!--{hook/spacecp_privacy_top}-->
			<ul class="tb cl">
				<li$opactives[base]><a href="home.php?mod=spacecp&ac=privacy&op=base">{lang personal_privacy_settings}</a></li>
				<!--{if helper_access::check_module('feed')}-->
				<li$opactives[feed]><a href="home.php?mod=spacecp&ac=privacy&op=feed">{lang personal_feed_settings}</a></li>
				<li$opactives[filter]><a href="home.php?mod=spacecp&ac=privacy&op=filter">{lang feed_filter}</a></li>
				<!--{/if}-->
				<!--{if helper_access::check_module('friend') || helper_access::check_module('follow')}-->
				<li$opactives[other]><a href="home.php?mod=spacecp&ac=privacy&op=other">{lang personal_other_settings}</a></li>
				<!--{/if}-->
			</ul>
			<form method="post" autocomplete="off" action="home.php?mod=spacecp&ac=privacy&op=$operation">
				<input type="hidden" name="formhash" value="{FORMHASH}" />

			<!--{if $operation == 'base'}-->
				<p class="tbmu mbm">{lang you_control_see_content}</p>
				<table cellspacing="0" cellpadding="0" class="tfm">
					<!--{if helper_access::check_module('friend')}-->
					<tr>
						<th>{lang friend_list}</th>
						<td>
							<select name="privacy[view][friend]">
								<option value="0"$sels[view][friend][0]>{lang open_privacy}</option>
								<option value="1"$sels[view][friend][1]>{lang friend_privacy}</option>
								<option value="2"$sels[view][friend][2]>{lang secrecy}</option>
								<option value="3"$sels[view][friend][3]>{lang privacy_register}</option>
							</select>
						</td>
					</tr>
					<!--{/if}-->
					<!--{if helper_access::check_module('wall')}-->
					<tr>
						<th>{lang message_board}</th>
						<td>
							<select name="privacy[view][wall]">
								<option value="0"$sels[view][wall][0]>{lang open_privacy}</option>
								<option value="1"$sels[view][wall][1]>{lang friend_privacy}</option>
								<option value="2"$sels[view][wall][2]>{lang secrecy}</option>
								<option value="3"$sels[view][wall][3]>{lang privacy_register}</option>
							</select>
						</td>
					</tr>
					<!--{/if}-->
					<!--{if helper_access::check_module('feed')}-->
					<tr>
						<th>{lang personal_feed}</th>
						<td>
							<select name="privacy[view][home]">
								<option value="0"$sels[view][home][0]>{lang open_privacy}</option>
								<option value="1"$sels[view][home][1]>{lang friend_privacy}</option>
								<option value="3"$sels[view][home][3]>{lang privacy_register}</option>
							</select>
						</td>
					</tr>
					<!--{/if}-->
					<!--{if helper_access::check_module('doing')}-->
					<tr>
						<th>{lang doing}</th>
						<td>
							<select name="privacy[view][doing]">
								<option value="0"$sels[view][doing][0]>{lang open_privacy}</option>
								<option value="1"$sels[view][doing][1]>{lang friend_privacy}</option>
								<option value="3"$sels[view][doing][3]>{lang privacy_register}</option>
							</select>
							<p class="d">{lang privacy_setting_message}<br />{lang site_might_your_log}</p>
						</td>
					</tr>
					<!--{/if}-->
					<!--{if helper_access::check_module('blog')}-->
					<tr>
						<th>{lang blog}</th>
						<td>
							<select name="privacy[view][blog]">
								<option value="0"$sels[view][blog][0]>{lang open_privacy}</option>
								<option value="1"$sels[view][blog][1]>{lang friend_privacy}</option>
								<option value="3"$sels[view][blog][3]>{lang privacy_register}</option>
							</select>
							<p class="d">{lang privacy_setting_message}<br />{lang view_right_setting_effective}</p>
						</td>
					</tr>
					<!--{/if}-->
					<!--{if helper_access::check_module('album')}-->
					<tr>
						<th>{lang album}</th>
						<td>
							<select name="privacy[view][album]">
								<option value="0"$sels[view][album][0]>{lang open_privacy}</option>
								<option value="1"$sels[view][album][1]>{lang friend_privacy}</option>
								<option value="3"$sels[view][album][3]>{lang privacy_register}</option>
							</select>
							<p class="d">{lang privacy_setting_message}<br />{lang view_right_setting_effective}</p>
						</td>
					</tr>
					<!--{/if}-->
					<!--{if helper_access::check_module('share')}-->
					<tr>
						<th>{lang share}</th>
						<td>
							<select name="privacy[view][share]">
								<option value="0"$sels[view][share][0]>{lang open_privacy}</option>
								<option value="1"$sels[view][share][1]>{lang friend_privacy}</option>
								<option value="3"$sels[view][share][3]>{lang privacy_register}</option>
							</select>
							<p class="d">{lang privacy_setting_message}<br />{lang view_right_setting_effective}</p>
						</td>
					</tr>
					<!--{/if}-->
					<!--{hook/spacecp_privacy_base_extra}-->
					<tr>
						<th>&nbsp;</th>
						<td><button type="submit" name="privacysubmit" value="true" class="pn pnc" /><strong>{lang save}</strong></button></td>
					</tr>
				</table>

			<!--{elseif $operation == 'feed'}-->
				<p class="tbmu mbm">{lang system_depend_action_message}</p>
				<table cellspacing="0" cellpadding="0" id="feed" class="tfm">
					<tr>
						<th>&nbsp;</th>
						<td class="pcl">
							<label><input type="checkbox" class="pc" name="privacy[feed][doing]" value="1"$sels[feed][doing] />{lang doing}</label>
							<label><input type="checkbox" class="pc" name="privacy[feed][blog]" value="1"$sels[feed][blog] />{lang write_blog}</label>
							<label><input type="checkbox" class="pc" name="privacy[feed][upload]" value="1"$sels[feed][upload] />{lang upload_pic}</label>
							<label><input type="checkbox" class="pc" name="privacy[feed][share]" value="1"$sels[feed][share] />{lang add_share}</label>
							<label><input type="checkbox" class="pc" name="privacy[feed][friend]" value="1"$sels[feed][friend] />{lang friend_add}</label>
							<label><input type="checkbox" class="pc" name="privacy[feed][comment]" value="1"$sels[feed][comment] />{lang publish_comment_reply}</label>
							<label><input type="checkbox" class="pc" name="privacy[feed][show]" value="1"$sels[feed][show] />{lang bidding_rank}</label>
							<label><input type="checkbox" class="pc" name="privacy[feed][credit]" value="1"$sels[feed][credit] />{lang credit_consumption}</label>
							<label><input type="checkbox" class="pc" name="privacy[feed][invite]" value="1"$sels[feed][invite] />{lang invite_friend}</label>
							<label><input type="checkbox" class="pc" name="privacy[feed][task]" value="1"$sels[feed][task] />{lang complete_task}</label>
							<label><input type="checkbox" class="pc" name="privacy[feed][profile]" value="1"$sels[feed][profile] />{lang update_presonal_profile}</label>
							<label><input type="checkbox" class="pc" name="privacy[feed][click]" value="1"$sels[feed][click] />{lang pic_blog_position}</label>
							<label><input type="checkbox" class="pc" name="privacy[feed][newthread]" value="1"$sels[feed][newthread] />{lang forum_post}</label>
							<label><input type="checkbox" class="pc" name="privacy[feed][newreply]" value="1"$sels[feed][newreply] />{lang forum_reply}</label>
						</td>
					</tr>
					<!--{hook/spacecp_privacy_feed_extra}-->
					<tr>
						<th>&nbsp;</th>
						<td><button type="submit" name="privacysubmit" value="true" class="pn pnc" /><strong>{lang save}</strong></button></td>
					</tr>
				</table>

			<!--{elseif $operation == 'other'}-->
				<p class="tbmu mbm">{lang you_control_other_operation}</p>
				<table cellspacing="0" cellpadding="0" class="tfm">
					<!--{if helper_access::check_module('friend')}-->
					<tr>
						<th>{lang add_friends}</th>
						<td>
							<select name="allowasfriend">
								<option value="0"$arr['allowasfriend'][0]>{lang no}</option>
								<option value="1"$arr['allowasfriend'][1]>{lang yes}</option>
							</select>
						</td>
					</tr>
					<!--{/if}-->
					<!--{if helper_access::check_module('follow')}-->
					<tr>
						<th>{lang add_follow}</th>
						<td>
							<select name="allowasfollow">
								<option value="0"$arr['allowasfollow'][0]>{lang no}</option>
								<option value="1"$arr['allowasfollow'][1]>{lang yes}</option>
							</select>
						</td>
					</tr>
					<!--{/if}-->
					<!--{hook/spacecp_privacy_other_extra}-->
					<tr>
						<th>&nbsp;</th>
						<td><button type="submit" name="privacy3submit" value="true" class="pn pnc" /><strong>{lang save}</strong></button></td>
					</tr>
				</table>

			<!--{else}-->

				{eval 
					$iconnames['wall'] = '{lang message}';
					$iconnames['piccomment'] = '{lang pic_comment}';
					$iconnames['blogcomment'] = '{lang blog_comment}';
					$iconnames['sharecomment'] = '{lang share_comment}';
					$iconnames['magic'] = '{lang magics_title}';
					$iconnames['sharenotice'] = '{lang share_notification}';
					$iconnames['clickblog'] = '{lang blog_position}';
					$iconnames['clickpic'] = '{lang pic_position}';
					$iconnames['credit'] = '{lang credits}';
					$iconnames['doing'] = '{lang doing}';
					$iconnames['pcomment'] = '{lang topic_comment}';
					$iconnames['post'] = '{lang topic_reply}';
					$iconnames['show'] = '{lang friend_top}';
					$iconnames['task'] = '{lang task}';
					$iconnames['goods'] = '{lang trade}';
					$iconnames['group'] = $_G['setting']['navs'][3]['navname'];
					$iconnames['thread'] = '{lang theme}';
					$iconnames['system'] = '{lang system}';
					$iconnames['friend'] = '{lang friends}';
					$iconnames['debate'] = '{lang debate}';
					$iconnames['album'] = '{lang album}';
					$iconnames['blog'] = '{lang blog}';
					$iconnames['poll'] = '{lang poll}';
					$iconnames['activity'] = '{lang activity}';
					$iconnames['reward'] = '{lang reward}';
					$iconnames['share'] = '{lang share}';
					$iconnames['profile'] = '{lang update_presonal_profile}';
					$iconnames['pusearticle'] = '{lang article_push}';
				}

				<table cellspacing="0" cellpadding="0" class="tfm bbda">
					<caption>
						<h2 class="ptw pbn xs2">{lang filtering_rules_title_1}</h2>
						<p class="xg1">{lang filtering_rules_message_1}</p>
					</caption>
					<tr>
						<th>&nbsp;</th>
						<td class="pcl">
							<!--{loop $groups $key $value}-->
							<label><input type="checkbox" class="pc" name="privacy[filter_gid][$key]" value="$key"{if isset($space['privacy']['filter_gid'][$key])} checked="checked"{/if} />$value</label>
							<!--{/loop}-->
						</td>
					</tr>
					<tr>
						<th>&nbsp;</th>
						<td>
							<button type="submit" name="privacy2submit" value="true" class="pn pnc" /><strong>{lang save}</strong></button>
							<p class="d">{lang list_change_friend_name}</p>
						</td>
					</tr>
				</table>

				<table cellspacing="0" cellpadding="0" class="tfm bbda">
					<caption>
						<h2 class="ptw pbn xs2">{lang filtering_rules_title_2}</h2>
						<p class="xg1">{lang filtering_rules_message_2}</p>
					</caption>
					<!--{if $icons}-->
					<tr>
						<th>&nbsp;</th>
						<td class="pcl">
							<!--{loop $icons $key $icon}-->
							<!--{eval $uid = $uids[$key];$icon_uid="$icon|$uid";}-->
							<label>
							<!--{if is_numeric($icon)}-->								
								<img src="{STATICURL}image/feed/{$icon}.gif" alt="" class="vm" />
							<!--{/if}-->
								<input type="checkbox" class="pc" name="privacy[filter_icon][$icon_uid]" value="1" checked="checked" /> 
								<!--{if isset($iconnames[$icon])}-->$iconnames[$icon]<!--{else}-->$icon<!--{/if}--> (<!--{if $users[$uid]}--><a href="home.php?mod=space&uid=$uid" target="_blank">$users[$uid]</a><!--{else}-->{lang all_friends}<!--{/if}-->)
							</label>
							<!--{/loop}-->
						</td>
					</tr>
					<tr>
						<th>&nbsp;</th>
						<td><button type="submit" name="privacy2submit" value="true" class="pn pnc" /><strong>{lang save}</strong></button></td>
					</tr>
					<!--{else}-->
					<tr>
						<th>&nbsp;</th>
						<td class="d">{lang no_shield_feed_cat}</td>
					</tr>
					<!--{/if}-->
				</table>

				<table cellspacing="0" cellpadding="0" class="tfm">
					<caption>
						<h2 class="ptw pbn xs2">{lang filtering_rules_title_3}</h2>
						<p class="xg1">{lang filtering_rules_message_3}</p>
					</caption>
					<!--{if $types}-->
					<tr>
						<th>&nbsp;</th>
						<td>
							<!--{loop $types $key $type}-->
							<!--{eval $uid = $uids[$key];$type_uid="$type|$uid";}-->
							<label>
								<input type="checkbox" class="pc" name="privacy[filter_note][$type_uid]" value="1" checked="checked" />
								<!--{if isset($iconnames[$type])}-->$iconnames[$type]<!--{else}-->$type<!--{/if}--> (<!--{if $users[$uid]}--><a href="home.php?mod=space&uid=$uid" target="_blank">$users[$uid]</a><!--{else}-->{lang all_friends}<!--{/if}-->)
							</label>
							<!--{/loop}-->
						</td>
					</tr>
					<tr>
						<th>&nbsp;</th>
						<td><button type="submit" name="privacy2submit" value="true" class="pn pnc" /><strong>{lang save}</strong></button></td>
					</tr>
					<!--{else}-->
					<tr>
						<th>&nbsp;</th>
						<td class="d">{lang no_shield_feed_cat}</td>
					</tr>
					<!--{/if}-->
				</table>
			<!--{/if}-->
			</form>
			<!--{hook/spacecp_privacy_bottom}-->
		</div>
	</div>
	<div class="appl">
		<!--{subtemplate home/spacecp_footer}-->
	</div>
</div>
</div>
<!--{template common/footer}-->