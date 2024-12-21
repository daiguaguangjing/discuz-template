<?php echo 'QQ:2039074300';exit;?>
<div class="zaobm bg0 mb10{if $_G['forum']['forumcolumns']} flg{/if} cl">
	<div class="bm_h cl">
		<span class="o"><em id="subforum_{$_G[forum][fid]}_img" class="tg{$collapseicon[subforum]}" title="{lang spread}" onclick="toggle_collapse('subforum_$_G['forum'][fid]');"></em></span>
		<h2>{lang forum_subforums}</h2>
	</div>
	<div id="subforum_{$_G[forum][fid]}" class="bm_c" style="$collapse[subforum]">
		<table cellspacing="0" cellpadding="0" class="fl_tb">
			<tr>
			<!--{loop $sublist $sub}-->
			<!--{eval $forumurl = !empty($sub['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? $_G['scheme'].'://'.$sub['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$sub['fid'];}-->
			<!--{if $_G['forum']['forumcolumns']}-->
				<!--{if $sub['orderid'] && ($sub['orderid'] % $_G['forum']['forumcolumns'] == 0)}-->
					</tr>
					<!--{if $_G['forum']['orderid'] < $_G['forum']['forumcolumns']}-->
					<tr class="fl_row">
					<!--{/if}-->
				<!--{/if}-->
				<td class="fl_g" width="$_G[forum][forumcolwidth]">
					<div class="fliconmore"{if !empty($sub[extra][iconwidth]) && !empty($sub[icon])}{/if}>
					<!--{if $sub[icon]}-->
						$sub[icon]
					<!--{else}-->
						<a href="$forumurl"{if $sub[redirect]} target="_blank"{/if} title="$sub[name]">
							<!--{if $sub[folder]}-->
							<img src="./template/zaoer_sweb/zaoer/forum-icon-light.png" />
							<!--{else}-->
							<img src="./template/zaoer_sweb/zaoer/forum-icon.png" />
							<!--{/if}-->
						</a>
					<!--{/if}-->
					</div>
					<dl{if !empty($sub[extra][iconwidth]) && !empty($sub[icon])}{/if}>
						<dt class="fic15"><a href="$forumurl" {if !empty($sub[redirect])}target="_blank"{/if} style="{if !empty($sub[extra][namecolor])}color: {$sub[extra][namecolor]};{/if}">$sub[name]</a><!--{if $sub[todayposts] && !$sub['redirect']}--><em class="xw0 xi1" title="{lang forum_todayposts}"> ($sub[todayposts])</em><!--{/if}--></dt>
						<!--{if empty($sub[redirect])}--><dd class="xg2"><em>{lang forum_threads}:<!--{echo dnumber($sub[threads])}--></em>&nbsp;&nbsp;<em>{lang forum_posts}:<!--{echo dnumber($sub[posts])}--></em></dd><!--{/if}-->
						<dd class="xg2">
						<!--{if $sub['permission'] == 1}-->
							{lang private_forum}
						<!--{else}-->
							<!--{if $sub['redirect']}-->
								<a href="$forumurl" class="xi2">{lang url_link}</a>
							<!--{elseif is_array($sub['lastpost'])}-->
								<!--{if $_G['forum']['forumcolumns'] < 3}-->
									<a href="forum.php?mod=redirect&tid=$sub[lastpost][tid]&goto=lastpost#lastpost" class="xi2"><!--{echo cutstr($sub[lastpost][subject], 30)}--></a> <cite>$sub[lastpost][dateline] <!--{if $sub['lastpost']['author']}-->$sub['lastpost']['author']<!--{else}-->$_G[setting][anonymoustext]<!--{/if}--></cite>
								<!--{else}-->
									<a href="forum.php?mod=redirect&tid=$sub[lastpost][tid]&goto=lastpost#lastpost">{lang forum_lastpost}: $sub[lastpost][dateline]</a>
								<!--{/if}-->
							<!--{else}-->
								{lang never}
							<!--{/if}-->
						<!--{/if}-->
						<!--{hook/forumdisplay_subforum_extra $sub['fid']}-->
						</dd>
					</dl>
				</td>
			<!--{else}-->
				<td class="fliconone" {if !empty($sub[extra][iconwidth]) && !empty($sub[icon])} style="width:95px;"{/if}>
					<!--{if $sub[icon]}-->
						$sub[icon]
					<!--{else}-->
						<a href="$forumurl"{if $sub[redirect]} target="_blank"{/if} title="$sub[name]">
							<!--{if $sub[folder]}-->
							<img src="./template/zaoer_sweb/zaoer/forum-icon-light.png" />
							<!--{else}-->
							<img src="./template/zaoer_sweb/zaoer/forum-icon.png" />
							<!--{/if}-->
						</a>
					<!--{/if}-->
				</td>
				<td>
					<h2 class="fic15"><a href="$forumurl" {if !empty($sub[redirect])}target="_blank"{/if} style="{if !empty($sub[extra][namecolor])}color: {$sub[extra][namecolor]};{/if}">$sub[name]</a><!--{if $sub[todayposts] && !$sub['redirect']}--><em class="xw0 xi1" title="{lang forum_todayposts}"> ($sub[todayposts])</em><!--{/if}--></h2>
					<!--{if $sub[description]}--><p class="xg2">$sub[description]</p><!--{/if}-->
					<!--{if !empty($sub['subforums'])}--><p class="xg2">{lang forum_subforums}: $sub['subforums']</p><!--{/if}-->
					<!--{if $sub['moderators']}--><p>{lang forum_moderators}: $sub[moderators]</p><!--{/if}-->
					<!--{hook/forumdisplay_subforum_extra $sub['fid']}-->
				</td>
				<td class="fl_i">
					<!--{if empty($sub[redirect])}--><span class="xi2"><!--{echo dnumber($sub[threads])}--></span><span class="xg2"> / <!--{echo dnumber($sub[posts])}--></span><!--{/if}-->
				</td>
				<td class="fl_by">
					<div class="xg2">
					<!--{if $sub['permission'] == 1}-->
						{lang private_forum}
					<!--{else}-->
						<!--{if $sub['redirect']}-->
							<a href="$forumurl" class="xi2">{lang url_link}</a>
						<!--{elseif is_array($sub['lastpost'])}-->
							<a href="forum.php?mod=redirect&tid=$sub[lastpost][tid]&goto=lastpost#lastpost" class="xi2"><!--{echo cutstr($sub[lastpost][subject], 30)}--></a> <cite>$sub[lastpost][dateline] <!--{if $sub['lastpost']['author']}-->$sub['lastpost']['author']<!--{else}-->$_G[setting][anonymoustext]<!--{/if}--></cite>
						<!--{else}-->
							{lang never}
						<!--{/if}-->
					<!--{/if}-->
					</div>
				</td>
			</tr>
			<tr class="fl_row">
			<!--{/if}-->
			<!--{/loop}-->
			{$_G['forum']['endrows'] or ''}
			</tr>
		</table>
	</div>
</div>