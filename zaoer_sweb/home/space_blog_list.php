<?php echo 'QQ:2039074300';exit;?>
{eval
	$space_uid = $space['uid'];
	$_G['home_tpl_spacemenus'][] = "<a href=\"home.php?mod=space&uid=$space_uid&do=blog&view=me\">{lang they_blog}</a>";
	$friendsname = array(1 => '{lang friendname_1}',2 => '{lang friendname_2}',3 => '{lang friendname_3}',4 => '{lang friendname_4}');
}

<!--{if $diymode}-->
	<!--{if $_G[setting][homepagestyle]}-->
		<!--{subtemplate home/space_header}-->
		<div id="ct" class="ct2 wp cl">
			<div class="mn">
				<div class="bm">
					<div class="bm_h">
						<!--{if $space[self] && helper_access::check_module('blog')}--><span class="xi2 y"> <a href="home.php?mod=spacecp&ac=blog" class="addnew">{lang post_new_blog}</a></span><!--{/if}-->
						<h1 class="mt">{lang blog}</h1>
					</div>
				<div class="bm_c">
	<!--{else}-->
		<!--{template common/header}-->
		<div id="pt" class="bm cl">
			<div class="z">
				<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
				<a href="home.php?mod=space&uid=$space[uid]">{$space[username]}</a> <em>&rsaquo;</em>
				<a href="home.php?mod=space&uid=$space[uid]&do=blog&view=me">{lang blog}</a>
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
			<a href="home.php?mod=space&do=blog">{lang blog}</a>
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
					<h1 class="mt"><i class="fico-mypost fic4 fc-p vm"></i>{lang blog}</h1>
					<ul class="tb cl">
						<li$actives[we]><a href="home.php?mod=space&do=blog&view=we"{if !$_G['uid']} onclick="showWindow('login', 'member.php?mod=logging&action=login&guestmessage=yes&referer='+encodeURIComponent(this.href))"{/if}>{lang friend_blog}</a></li>
						<li$actives[me]><a href="home.php?mod=space&do=blog&view=me"{if !$_G['uid']} onclick="showWindow('login', 'member.php?mod=logging&action=login&guestmessage=yes&referer='+encodeURIComponent(this.href))"{/if}>{lang my_blog}</a></li>
						<li$actives[all]><a href="home.php?mod=space&do=blog&view=all">{lang view_all}</a></li>
						<!--{if helper_access::check_module('blog')}-->
						<li class="o"><a href="home.php?mod=spacecp&ac=blog">{lang post_new_blog}</a></li>
						<!--{/if}-->
					</ul>
				</div>
		<!--{else}-->
			<div class="appl">
				<div class="tbn">
					<h2 class="mt bbda">{lang blog}</h2>
					<ul>
						<li$actives[we]><a href="home.php?mod=space&do=blog&view=we"{if !$_G['uid']} onclick="showWindow('login', 'member.php?mod=logging&action=login&guestmessage=yes&referer='+encodeURIComponent(this.href))"{/if}>{lang friend_blog}</a></li>
						<li$actives[me]><a href="home.php?mod=space&do=blog&view=me"{if !$_G['uid']} onclick="showWindow('login', 'member.php?mod=logging&action=login&guestmessage=yes&referer='+encodeURIComponent(this.href))"{/if}>{lang my_blog}</a></li>
						<li$actives[all]><a href="home.php?mod=space&do=blog&view=all">{lang view_all}</a></li>
					</ul>
				</div>
			</div>
			<div class="mn pbm">
			<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
		<!--{/if}-->
<!--{/if}-->
			<div class="tbmu cl">
				<!--{if helper_access::check_module('blog') && $space[self] && (($diymode && !$_G[setting][homepagestyle]) || (!$diymode && !$_G[setting][homestyle]))}-->
					<a href="home.php?mod=spacecp&ac=blog" class="y pn pnc"><strong>{lang post_new_blog}</strong></a>
				<!--{/if}-->

				<!--{if $_GET[view] == 'all'}-->
					<a href="home.php?mod=space&do=blog&view=all" {if !$_GET[catid]}$orderactives[dateline]{/if}>{lang newest_blog}</a><span class="pipe">|</span>
					<a href="home.php?mod=space&do=blog&view=all&order=hot" $orderactives[hot]>{lang recommend_blog}</a>
					<!--{if $category}-->
						<!--{loop $category $value}-->
							<span class="pipe">|</span>
							<a href="home.php?mod=space&do=blog&catid=$value[catid]&view=all&order=$_GET[order]"{if $_GET[catid]==$value[catid]} class="a"{/if}>$value[catname]</a>
						<!--{/loop}-->
					<!--{/if}-->
				<!--{/if}-->

				<!--{if $userlist}-->
					{lang filter_by_friend}
					<select name="fuidsel" onchange="fuidgoto(this.value);" class="ps">
						<option value="">{lang all_friends}</option>
						<!--{loop $userlist $value}-->
						<option value="$value[fuid]"{$fuid_actives[$value[fuid]]}>$value[fusername]</option>
						<!--{/loop}-->
					</select>
				<!--{/if}-->

				<!--{if $_GET[view] == 'me' && $classarr}-->
					<!--{loop $classarr $classid $classname}-->
						<a href="home.php?mod=space&uid=$space[uid]&do=blog&classid=$classid&view=me" id="classid$classid" onmouseover="showMenu(this.id);"{if $_GET[classid]==$classid} class="a"{/if}>$classname</a><span class="pipe">|</span>
						<!--{if $space[self]}-->
						<div id="classid{$classid}_menu" class="p_pop" style="display: none; zoom: 1;">
							<a href="home.php?mod=spacecp&ac=class&op=edit&classid=$classid" id="c_edit_$classid" onclick="showWindow(this.id, this.href, 'get', 0);">{lang edit}</a>
							<a href="home.php?mod=spacecp&ac=class&op=delete&classid=$classid" id="c_delete_$classid" onclick="showWindow(this.id, this.href, 'get', 0);">{lang delete}</a>
						</div>
						<!--{/if}-->
					<!--{/loop}-->
				<!--{/if}-->
			</div>

			<!--{if $searchkey}-->
				<p class="tbmu">{lang follow_search_blog} <span style="color: red; font-weight: 700;">$searchkey</span> {lang doing_record_list}</p>
			<!--{/if}-->

		<!--{if $count}-->
			<div class="xld {if empty($diymode)}xlda{/if}">
			<!--{loop $list $k $value}-->
				<dl class="bbda">
					<!--{if empty($diymode)}-->
					<dd class="m">
						<div class="avt"><a href="home.php?mod=space&uid=$value[uid]" c="1"><!--{avatar($value['uid'], 'middle')}--></a></div>
					</dd>
					<!--{/if}-->

					<dt class="xs2">
						<!--{eval $stickflag = isset($value['stickflag']) ? 0 : 1;}-->
						<!--{if !$stickflag}--><span class="xi1">{lang stick}</span> &middot;<!--{/if}-->
						<!--{if helper_access::check_module('share')}-->
						<a href="home.php?mod=spacecp&ac=share&type=blog&id=$value[blogid]&handlekey=lsbloghk_{$value[blogid]}" id="a_share_$value[blogid]" onclick="showWindow(this.id, this.href, 'get', 0);" class="oshr xs1 xw0">{lang share}</a>
						<!--{/if}-->
						<a href="home.php?mod=space&uid=$value[uid]&do=blog&id=$value[blogid]"{if $value[magiccolor]} style="color: {$_G[colorarray][$value[magiccolor]]}"{/if} target="_blank">$value[subject]</a>
						<!--{if $value[status] == 1}--> <span class="xi1">({lang pending})</span><!--{/if}-->
					</dt>
					<dd>
						<!--{if $value['friend']}-->
						<span class="y"><a href="$theurl&friend=$value[friend]" class="xg1">{$friendsname[$value[friend]]}</a></span>
						<!--{/if}-->
						<!--{if empty($diymode)}--><a href="home.php?mod=space&uid=$value[uid]">$value[username]</a> <!--{/if}--><span class="xg1">$value[dateline]</span>
					</dd>
					<dd class="cl" id="blog_article_$value[blogid]">
						<!--{if $value[pic]}--><div class="atc"><a href="home.php?mod=space&uid=$value[uid]&do=blog&id=$value[blogid]" target="_blank"><img src="$value[pic]" alt="$value[subject]" class="tn" /></a></div><!--{/if}-->
						$value[message]
					</dd>
					<dd class="xg1">
						<!--{if $classarr[$value[classid]]}-->{lang personal_category}: <a href="home.php?mod=space&uid=$value[uid]&do=blog&classid=$value[classid]&view=me">{$classarr[$value[classid]]}</a><span class="pipe">|</span><!--{/if}-->
						<!--{if $value[viewnum]}--><a href="home.php?mod=space&uid=$value[uid]&do=blog&id=$value[blogid]" target="_blank">$value[viewnum] {lang blog_read}</a><span class="pipe">|</span><!--{/if}-->
						<a href="home.php?mod=space&uid=$value[uid]&do=blog&id=$value[blogid]#comment" target="_blank"><span id="replynum_$value[blogid]">$value[replynum]</span> {lang blog_replay}</a>
						<!--{hook/space_blog_list_status $k}-->
						<!--{if $_GET['view']=='me' && $space['self']}-->
							<span class="pipe">|</span><a href="home.php?mod=spacecp&ac=blog&blogid=$value[blogid]&op=edit">{lang edit}</a><span class="pipe">|</span>
							<a href="home.php?mod=spacecp&ac=blog&blogid=$value[blogid]&op=delete&handlekey=delbloghk_{$value[blogid]}" id="blog_delete_$value[blogid]" onclick="showWindow(this.id, this.href, 'get', 0);">{lang delete}</a>
							<!--{if empty($value['status'])}-->
							<span class="pipe">|</span>
							
							<a href="home.php?mod=spacecp&ac=blog&blogid=$value[blogid]&op=stick&stickflag=$stickflag&handlekey=stickbloghk_{$value[blogid]}" id="blog_stick_$value[blogid]" onclick="showWindow(this.id, this.href, 'get', 0);"><!--{if $stickflag}-->{lang stick}<!--{else}-->{lang cancel_stick}<!--{/if}--></a>
							<!--{/if}-->
						<!--{/if}-->
						<!--{if $value['hot']}--><span class="hot">{lang hot} <em>$value[hot]</em> </span><!--{/if}-->
					</dd>
				</dl>
			<!--{/loop}-->
			<!--{if $pricount}-->
				<p class="mtm">{lang hide_blog}</p>
			<!--{/if}-->
			</div>
			<!--{if $multi}--><div class="pgs cl mtm">$multi</div><!--{/if}-->
		<!--{else}-->
			<div class="emp">{lang no_related_blog}</div>
		<!--{/if}-->
		
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
		window.location.href = 'home.php?mod=space&do=blog&view=we'+parameter;
	}
</script>

    		  	  		  	  		     	  			     		   		     		       	  		 	    		   		     		       	  		      		   		     		       	 	   	    		   		     		       	  	 	     		   		     		       	  	       		   		     		       	 	   	    		   		     		       	  	       		   		     		       	  	 		    		   		     		       	 	   	    		   		     		       	  		      		   		     		       	  		 	    		 	      	  		  	  		     	
<!--{template common/footer}-->