<?php echo 'QQ:2039074300';exit;?>
<!--{eval $friendsname = array(1 => '{lang friendname_1}',2 => '{lang friendname_2}',3 => '{lang friendname_3}',4 => '{lang friendname_4}');}-->

<!--{if $diymode}-->
	<!--{if $_G[setting][homepagestyle]}-->
		<!--{subtemplate home/space_header}-->
		<div id="ct" class="ct2 wp cl">
			<div class="mn">
				<div class="bm">
					<div class="bm_h">
						<!--{if $space[self] && helper_access::check_module('album')}--><span class="xi2 y"><a href="home.php?mod=spacecp&ac=upload" class="addnew">{lang upload_pic}</a></span><!--{/if}-->
						<h1 class="mt">{lang album}</h1>
					</div>
				<div class="bm_c">
	<!--{else}-->
		<!--{template common/header}-->
		<div id="pt" class="bm cl">
			<div class="z">
				<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
				<a href="home.php?mod=space&uid=$space[uid]">{$space[username]}</a> <em>&rsaquo;</em>
				<a href="home.php?mod=space&uid=$space[uid]&do=album&view=me&from=space">{lang album}</a>
			</div>
		</div>
		<style id="diy_style" type="text/css"></style>
		<div class="wp">
			<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
		</div>
		<!--{template home/space_menu}-->
		<div id="ct" class="ct1 wp cl">
			<div class="mn bg0">
				<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
				<div class="bm bw0">
					<div class="bm_c">
	<!--{/if}-->
<!--{else}-->
	<!--{template common/header}-->
	<div id="pt" class="bm cl">
		<div class="z">
			<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
			<a href="home.php?mod=space&do=album">{lang album}</a>
		</div>
	</div>
	<style id="diy_style" type="text/css"></style>
	<div class="wp">
		<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
	</div>
	
	<div class="bg0 zaobm">
	<div id="ct" class="ct2_a wp cl">
		<!--{if $_G[setting][homestyle]}-->
			<div class="appl">
				<!--{subtemplate common/userabout}-->
			</div>
			<div class="mn pbm">
				<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
				<div class="bm bw0">
					<ul class="tb cl">
						<li$actives[we]><a href="home.php?mod=space&do=album&view=we"{if !$_G['uid']} onclick="showWindow('login', 'member.php?mod=logging&action=login&guestmessage=yes&referer='+encodeURIComponent(this.href))"{/if}>{lang friend_album}</a></li>
						<li$actives[me]><a href="home.php?mod=space&do=album&view=me"{if !$_G['uid']} onclick="showWindow('login', 'member.php?mod=logging&action=login&guestmessage=yes&referer='+encodeURIComponent(this.href))"{/if}>{lang my_album}</a></li>
						<li$actives[all]><a href="home.php?mod=space&do=album&view=all">{lang view_all}</a></li>
						<!--{if helper_access::check_module('album')}--><li class="o"><a href="home.php?mod=spacecp&ac=upload">{lang upload_pic}</a></li><!--{/if}-->
					</ul>
				</div>
		<!--{else}-->
			<div class="appl">
				<div class="tbn">
					<h2 class="mt bbda">{lang album}</h2>
					<ul>
						<li$actives[we]><a href="home.php?mod=space&do=album&view=we"{if !$_G['uid']} onclick="showWindow('login', 'member.php?mod=logging&action=login&guestmessage=yes&referer='+encodeURIComponent(this.href))"{/if}>{lang friend_album}</a></li>
						<li$actives[me]><a href="home.php?mod=space&do=album&view=me"{if !$_G['uid']} onclick="showWindow('login', 'member.php?mod=logging&action=login&guestmessage=yes&referer='+encodeURIComponent(this.href))"{/if}>{lang my_album}</a></li>
						<li$actives[all]><a href="home.php?mod=space&do=album&view=all">{lang view_all}</a></li>
					</ul>
				</div>
			</div>
			<div class="mn pbm">
			<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
		<!--{/if}-->
		
<!--{/if}-->

		<div class="tbmu cl">
			<!--{if helper_access::check_module('album') && $space[self] && (($diymode && !$_G[setting][homepagestyle]) || (!$diymode && !$_G[setting][homestyle]))}--><a href="home.php?mod=spacecp&ac=upload" class="y pn pnc"><strong>{lang upload_pic}</strong></a><!--{/if}-->

			<!--{if $space[self] && $_GET['view']=='me'}-->
				{lang explain_album}
			<!--{/if}-->

			<!--{if $_GET[view] == 'all'}-->
				<a href="home.php?mod=space&do=album&view=all" {if !$_GET[catid]}$orderactives[dateline]{/if}>{lang newest_update_album}</a><span class="pipe">|</span>
				<a href="home.php?mod=space&do=album&view=all&order=hot" $orderactives[hot]>{lang hot_pic_recommend}</a>
				<!--{if $_G['setting']['albumcategorystat'] && $category}-->
					<!--{loop $category $value}-->
						<span class="pipe">|</span>
						<a href="home.php?mod=space&amp;do=album&amp;catid={$value[catid]}&amp;view=all"{if $_GET[catid]==$value[catid]} class="a"{/if}>$value[catname]</a>
					<!--{/loop}-->
				<!--{/if}-->
			<!--{/if}-->

			<!--{if ($_GET['view'] == 'we') && $userlist}-->
				{lang filter_by_friend}
				<select name="fuidsel" onchange="fuidgoto(this.value);" class="ps">
					<option value="">{lang all_friends}</option>
					<!--{loop $userlist $value}-->
					<option value="$value[fuid]"{$fuid_actives[$value[fuid]]}>$value[fusername]</option>
					<!--{/loop}-->
				</select>
			<!--{/if}-->
		</div>

		<div class="ptw">
			<!--{if $picmode}-->

				<!--{if $pricount}-->
				<p class="mbw">{lang hide_pic}</p>
				<!--{/if}-->
				<!--{if $count}-->
				<ul class="ml mlp cl">
					<!--{loop $list $key $value}-->
					<li class="d">
						<div class="c">
							<a href="home.php?mod=space&uid=$value[uid]&do=album&picid=$value[picid]"><!--{if $value[pic]}--><img src="$value[pic]" alt="" /><!--{/if}--></a>
						</div>
						<p class="ptm"><a href="home.php?mod=space&uid=$value[uid]&do=album&id=$value[albumid]" class="xi2">$value[albumname]</a></p>
						<span><a href="home.php?mod=space&uid=$value[uid]">$value[username]</a></span>
					</li>
					<!--{/loop}-->
				</ul>
				<!--{if $multi}--><div class="pgs cl mtm">$multi</div><!--{/if}-->
				<!--{else}-->
				<div class="emp">{lang no_album}</div>
				<!--{/if}-->

			<!--{else}-->

				<!--{if $searchkey}-->
				<p class="mbw">{lang follow_search_album} <span style="color: red; font-weight: 700;">$searchkey</span> {lang doing_record_list}</p>
				<!--{/if}-->

				<!--{if $pricount}-->
				<p class="mbw">{lang hide_album}</p>
				<!--{/if}-->

				<!--{if $count}-->
				<ul class="ml mla cl">
					<!--{loop $list $key $value}-->
					<!--{eval $pwdkey = 'view_pwd_album_'.$value['albumid'];}-->
					<li>
						<div class="c">
							<a href="home.php?mod=space&uid=$value[uid]&do=album&id=$value[albumid]" target="_blank" {if $_G['adminid'] != 1 && $value[uid]!=$_G[uid] && $value[friend]=='4' && $value[password] && empty($_G[cookie][$pwdkey])} onclick="showWindow('list_album_$value[albumid]', this.href, 'get', 0);"{/if}><!--{if $value[pic]}--><img src="$value[pic]" alt="$value[albumname]" /><!--{/if}--></a>
						</div>
						<p class="ptn"><a href="home.php?mod=space&uid=$value[uid]&do=album&id=$value[albumid]" target="_blank" {if $_G['adminid'] != 1 && $value[uid]!=$_G[uid] && $value[friend]=='4' && $value[password] && empty($_G[cookie][$pwdkey])} onclick="showWindow('list_album_$value[albumid]', this.href, 'get', 0);"{/if} class="xi2"><!--{if $value[albumname]}-->$value[albumname]<!--{else}-->{lang default_album}<!--{/if}--></a><!--{if $value[picnum]}--> ($value[picnum]) <!--{/if}--></p>
						<!--{if $value[uid]==$_G[uid]}-->
							<p class="xg1"><a href="home.php?mod=spacecp&ac=album&op=editpic&albumid=$value[albumid]">{lang edit}</a> <a href="home.php?mod=spacecp&ac=upload&albumid=$value[albumid]">{lang upload}</a>
							</p>
						<!--{else}-->
							<p><a href="home.php?mod=space&uid=$value[uid]" target="_blank">$value[username]</a></p>
						<!--{/if}-->
						<!--{if $_GET[view]!='me'}--><span>{lang update} <!--{date($value['updatetime'], 'n-j H:i')}--></span><!--{/if}-->
					</li>
					<!--{/loop}-->
					<!--{if $space[self] && $_GET['view']=='me'}-->
					<li>
						<div class="c">
							<a href="home.php?mod=space&uid=$value[uid]&do=album&id=-1"><div class="nophoto" alt="{lang default_album}"></div></a>
						</div>
						<p class="ptn xi2"><a href="home.php?mod=space&uid=$value[uid]&do=album&id=-1">{lang default_album}</a></p>
					</li>
					<!--{/if}-->
				</ul>
				<!--{if $multi}--><div class="pgs cl mtm">$multi</div><!--{/if}-->
				<!--{else}-->
					<!--{if $space[self] && $_GET['view']=='me'}-->
						<ul class="ml mla cl">
							<li>
								<div class="c">
									<a href="home.php?mod=space&uid=$value[uid]&do=album&id=-1"><div class="nophoto" alt="{lang default_album}"></div></a>
								</div>
								<p class="ptn xi2"><a href="home.php?mod=space&uid=$value[uid]&do=album&id=-1">{lang default_album}</a></p>
							</li>
						</ul>
					<!--{else}-->
						<div class="emp">{lang no_album}</div>
					<!--{/if}-->
				<!--{/if}-->

			<!--{/if}-->
		</div>
		
		
		<!--{if !$_G[setting][homepagestyle]}--><!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]--><!--{/if}-->

		<!--{if $diymode}-->
					</div>
				</div>
			<!--{if $_G[setting][homepagestyle]}-->
			</div>
			<div class="sd">
				<!--{subtemplate home/space_userabout}-->
			<!--{/if}-->
		<!--{/if}-->
		</div>
	</div>
	</div>

<!--{if !$_G[setting][homepagestyle]}-->
	<div class="wp mtn">
		<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
	</div>
<!--{/if}-->


<script type="text/javascript">
function fuidgoto(fuid) {
	var parameter = fuid != '' ? '&fuid='+fuid : '';
	window.location.href = 'home.php?mod=space&do=album&view=we'+parameter;
}
</script>

<!--{template common/footer}-->