<?php echo 'QQ:2039074300';exit;?>
<!--{eval
	$space_uid = $space['uid'];
	$_G['home_tpl_spacemenus'][] = "<a href=\"home.php?mod=space&uid=$space_uid&do=poll&view=me\">{lang they_poll}</a>";
}-->
<!--{template common/header}-->

<div id="pt" class="bm cl">
	<div class="z">
		<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em> 
		<a href="home.php?mod=space&do=thread">{lang post}</a> <em>&rsaquo;</em>
		<a href="home.php?mod=space&uid=$space[uid]&do=poll&view=me">{lang poll}</a>
	</div>
</div>

<style id="diy_style" type="text/css"></style>
<div class="wp">
	<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>

<div class="bg0 zaobm">
<div id="ct" class="ct2_a wp cl">
	<div class="mn">
		<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
		<div class="bm bw0">
		<!--{if (!$_G['uid'] && !$space[uid]) || $space[self]}-->
			<h1 class="mt"><i class="fico-vote fic4 fc-p vm"></i>{lang poll}</h1>
		<!--{/if}-->
		<!--{if $space[self]}-->
			<ul class="tb cl">
				<li$actives[we]><a href="home.php?mod=space&do=poll&view=we">{lang friend_poll}</a></li>
				<li$actives[me]><a href="home.php?mod=space&do=poll&view=me">{lang my_poll}</a></li>
				<!--{if $_G[group][allowpostpoll]}-->
					<li class="o">
						<!--{if $_G[setting][pollforumid]}-->
						<a href="forum.php?mod=post&action=newthread&fid=$_G[setting][pollforumid]&special=1">{lang create_new_poll}</a>
						<!--{else}-->
						<a href="forum.php?mod=misc&action=nav&special=1" onclick="showWindow('nav', this.href)">{lang create_new_poll}</a>
						<!--{/if}-->
					</li>
				<!--{/if}-->
			</ul>
		<!--{else}-->
			<!--{template home/space_menu}-->
		<!--{/if}-->

		<!--{if $_GET[view] == 'me'}-->
			<p class="tbmu">
				<a href="home.php?mod=space&do=poll&view=me"$filteractives[publish]>{lang my_create}</a><span class="pipe">|</span>
				<a href="home.php?mod=space&do=poll&view=me&filter=join"$filteractives[join]>{lang my_join} </a>
			</p>
		<!--{/if}-->

		<!--{if $userlist}-->
			<p class="tbmu">
				{lang view_by_friend}
				<select name="fuidsel" onchange="fuidgoto(this.value);" class="ps">
					<option value="">{lang all_friends}</option>
					<!--{loop $userlist $value}-->
					<option value="$value[fuid]"{$fuid_actives[$value[fuid]]}>$value[fusername]</option>
					<!--{/loop}-->
				</select>
			</p>
		<!--{/if}-->

		<!--{if $count}-->
			<ul class="el pll">
			<!--{loop $list $thread}-->
				<li class="cl">
					<div class="u z">
						<a href="home.php?mod=space&uid=$thread[authorid]" class="avt" c="1" target="_blank"><!--{avatar($thread['authorid'], 'small')}--></a>
						<p class="mtn"><a href="home.php?mod=space&uid=$thread[authorid]" target="_blank">$thread[author]</a></p>
					</div>
					<div class="s y">
						<a href="forum.php?mod=viewthread&tid=$thread[tid]" class="joins" target="_blank">
							<span>$thread[poll][voters]</span>{lang people_join}
						</a>
						<a href="forum.php?mod=viewthread&tid=$thread[tid]" class="go" target="_blank">{lang to_poll}</a>
					</div>
					<div class="c">
						<h4 class="h"><a href="forum.php?mod=viewthread&tid=$thread[tid]" target="_blank">$thread[subject]</a></h4>
						<ol>
							<!--{loop $thread[poll][pollpreview] $key $value}-->
							<li>$value</li>
							<!--{/loop}-->
							<li style="list-style-type: none;">
								...
							</li>
						</ol>
						<div class="mtn xg1">
							$thread[dateline]
							<span class="pipe">|</span>
							{lang favorite} $thread['favtimes']
							<span class="pipe">|</span>
							{lang share} $thread['sharetimes']
							<span class="pipe">|</span>
							{lang hot} $thread['heats']
						</div>
					</div>
				</li>
			<!--{/loop}-->
			</ul>
			<!--{if $hiddennum}-->
				<p class="mtm">{lang hide_poll}</p>
			<!--{/if}-->
			<!--{if $multi}--><div class="pgs cl mtm">$multi</div><!--{/if}-->
		<!--{else}-->
			<div class="emp">{lang no_poll}</div>
		<!--{/if}-->
		</div>
		<!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]-->
	</div>
	<div class="appl">
		<!--{subtemplate home/space_thread_nav}-->
		<div class="drag">
			<!--[diy=diy2]--><div id="diy2" class="area"></div><!--[/diy]-->
		</div>
	</div>
</div>
</div>

<div class="wp mtn">
	<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>

<script type="text/javascript">
function fuidgoto(fuid) {
	var parameter = fuid != '' ? '&fuid='+fuid : '';
	window.location.href = 'home.php?mod=space&do=poll&view=we'+parameter;
}
</script>
	
<!--{template common/footer}-->