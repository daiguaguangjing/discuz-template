<?php echo 'QQ:2039074300';exit;?>
<div class="zaobm bg0 mb10">
	<div class="bm_h cl"><h2>{lang forum_subforums}</h2></div>
	<div id="subforum_{$_G[forum][fid]}" class="bm_c subforum_sd">
		<div class="cl">
			<!--{loop $sublist $sub}-->
			<!--{eval $forumurl = !empty($sub['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? $_G['scheme'].'://'.$sub['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$sub['fid'];}-->
			<p class="mbm cl">
				<a href="$forumurl" target="_blank" class="z fic15">$sub[name]</a>
				<span class="y xg2"><!--{if $sub[todayposts] && !$sub['redirect']}--><em class="rq">$sub[todayposts] / </em><!--{/if}--><!--{if empty($sub[redirect])}--><em><!--{echo dnumber($sub[threads])}--></em><em> / <!--{echo dnumber($sub[posts])}--></em><!--{/if}--></span>
				<!--{hook/forumdisplay_subforum_extra $sub['fid']}-->
			</p>
			<!--{/loop}-->
			{$_G['forum']['endrows'] or ''}
		</div>
	</div>
</div>