<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->
<div id="pt" class="bm cl">
	<div class="z">
		<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
		<a href="misc.php?mod=ranklist">{lang ranklist}</a> <em>&rsaquo;</em>
		{lang all}
	</div>
</div>

<style id="diy_style" type="text/css"></style>

<!--[diy=diyranklisttop]--><div id="diyranklisttop" class="area"></div><!--[/diy]-->

<div class="bg0 zaobm">
<div id="ct" class="ct2_a wp cl">
	<div class="mn">

		<!--[diy=diycontenttop]--><div id="diycontenttop" class="area"></div><!--[/diy]-->
		<!--{if $ranklist_setting['member']['available'] && $_G['setting']['ranklist']['membershow']}-->
		<div class="bm">
			<div class="bm_h cl">
				<span class="y">
					<!--{if $_G[uid]}-->
						<a href="misc.php?mod=ranklist&type=member" class="xi1 xw1">{lang i_want_rank}</a>
						<span class="pipe">|</span>
					<!--{/if}-->
					<a href="misc.php?mod=ranklist&type=member" class="xi2">{lang more}&rsaquo;</a>
				</span>
				<h2>{lang bidding_rank}</h2>
			</div>
			<div class="bm_c bid">
				<ul class="biduser cl">
					<li class="bidtop">
						<!--{if $memberlist}-->
						<a href="home.php?mod=space&uid=$memberlist[0][uid]&do=profile" target="_blank" id="bid_$memberlist[0][uid]" class="hm" {if $memberlist[0][note]} onmouseover="showTip(this)" tip="$memberlist[0][username]: $memberlist[0][note]"{/if}><!--{avatar($memberlist[0]['uid'], 'middle')}--></a>
						<!--{/if}-->
					</li>
				<!--{eval unset($memberlist[0]);}-->
				<!--{loop $memberlist $member}-->
					<li>
						<a href="home.php?mod=space&uid=$member[uid]&do=profile" target="_blank" id="bid_$member[uid]" {if $member[note]} onmouseover="showTip(this)" tip="$member[username]: $member[note]"{/if}>$member[avatar]</a>
					</li>
				<!--{/loop}-->
				</ul>
			</div>
		</div>
		<!--{/if}-->

		<!--[diy=diypictop]--><div id="diypictop" class="area"></div><!--[/diy]-->
		<!--{if helper_access::check_module('album') && $ranklist_setting['picture']['available']}-->
		<div class="rnk1">
			<div class="bm">
				<div class="bm_h cl">
					<span class="y xi2">
						<a href="misc.php?mod=ranklist&type=picture&view=hot&orderby=all">{lang more}&rsaquo;</a>
					</span>
					<h2>{lang ranklist_picture}</h2>
				</div>
				<div class="bm_c">
					<ul class="ml mlp cl">
						<!--{if $pictures}-->
						<li class="d bigpic">
							<div class="c">
								<a href="home.php?mod=space&uid=$pictures[0][uid]&do=album&picid=$pictures[0][picid]" target="_blank"><img src="$pictures[0][origurl]" alt="" /></a>
							</div>
							<p class="ptm"><a href="home.php?mod=space&uid=$pictures[0][uid]&do=album&picid=$pictures[0][picid]" target="_blank">$pictures[0][albumname]</a></p>
						</li>
						<!--{/if}-->
						<!--{eval unset($pictures[0]);}-->
						<!--{loop $pictures $pic}-->
						<li class="d">
							<div class="c">
								<a href="home.php?mod=space&uid=$pic[uid]&do=album&picid=$pic[picid]" target="_blank"><img src="$pic[url]" alt="" /></a>
							</div>
							<p class="ptm"><a href="home.php?mod=space&uid=$pic[uid]&do=album&picid=$pic[picid]" target="_blank">$pic[albumname]</a></p>
						</li>
						<!--{/loop}-->
					</ul>
				</div>
			</div>
		</div>
		<!--{/if}-->

		<!--[diy=diycontentmiddle]--><div id="diycontentmiddle" class="area"></div><!--[/diy]-->

		<!--{if helper_access::check_module('forum') && $ranklist_setting['thread']['available']}-->
		<div class="bm">
			<div class="bm_h cl">
				<span class="y xi2"><a href="misc.php?mod=ranklist&type=thread&view=replies&orderby=$before">{lang more}&rsaquo;</a></span>
				<h2>{lang ranklist_thread}</h2>
			</div>
			<div class="bm_c">
				<ul class="xl xl2 cl">
					<!--{eval $key = 0;}-->
					<!--{loop $threads_hot $thread}-->
						<li{if $key++%2} class="xl2_r"{/if}>
							<em><a href="home.php?mod=space&uid=$thread[authorid]" target="_blank">$thread[author]</a></em>
							&middot; <a href="forum.php?mod=viewthread&tid=$thread[tid]" target="_blank">$thread[subject]</a>
						</li>
					<!--{/loop}-->
				</ul>
			</div>
		</div>
		<!--{/if}-->

		<!--{if helper_access::check_module('blog') && $ranklist_setting['blog']['available']}-->
		<div class="bm">
			<div class="bm_h cl">
				<span class="y xi2"><a href="misc.php?mod=ranklist&type=blog&view=heats&orderby=$before">{lang more}&rsaquo;</a></span>
				<h2>{lang blog_ranklist}</h2>
			</div>
			<div class="bm_c">
				<ul class="xl xl2 cl">
					<!--{eval $key = 0;}-->
					<!--{loop $blogs_hot $blog}-->
						<li{if $key++%2} class="xl2_r"{/if}>
							<em><a href="home.php?mod=space&uid=$blog[uid]" target="_blank">$blog[username]</a></em>
							&middot; <a href="home.php?mod=space&uid=$blog[uid]&do=blog&id=$blog[blogid]" target="_blank">$blog[subject]</a>
						</li>
					<!--{/loop}-->
				</ul>
			</div>
		</div>
		<!--{/if}-->

		<!--{if helper_access::check_module('forum') && $ranklist_setting['poll']['available']}-->
		<div class="bm">
			<div class="bm_h cl">
				<span class="y xi2"><a href="misc.php?mod=ranklist&type=poll&view=heats&orderby=$before">{lang more}&rsaquo;</a></span>
				<h2>{lang ranklist_poll}</h2>
			</div>
			<div class="bm_c">
				<ul class="xl xl2 cl">
					<!--{eval $key = 0;}-->
					<!--{loop $polls_hot $poll}-->
						<li{if $key++%2} class="xl2_r"{/if}>
							<em><a href="home.php?mod=space&uid=$poll[authorid]" target="_blank">$poll[author]</a></em>
							&middot; <a href="forum.php?mod=viewthread&tid=$poll[tid]" target="_blank">$poll[subject]</a>
						</li>
					<!--{/loop}-->
				</ul>
			</div>
		</div>
		<!--{/if}-->

		<!--{if helper_access::check_module('forum') && $ranklist_setting['activity']['available']}-->
		<div class="bm">
			<div class="bm_h cl">
				<span class="y xi2"><a href="misc.php?mod=ranklist&type=activity&view=heats&orderby=$before">{lang more}&rsaquo;</a></span>
				<h2>{lang ranklist_activity}</h2>
			</div>
			<div class="bm_c">
				<ul class="xl xl2 cl">
					<!--{eval $key = 0;}-->
					<!--{loop $activities_hot $activity}-->
						<li{if $key++%2} class="xl2_r"{/if}>
							<em><a href="home.php?mod=space&uid=$activity[authorid]" target="_blank">$activity[author]</a></em>
							&middot; <a href="forum.php?mod=viewthread&tid=$activity[tid]" target="_blank">$activity[subject]</a>
						</li>
					<!--{/loop}-->
				</ul>
			</div>
		</div>
		<!--{/if}-->

		<!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]-->
	</div>

	<div class="appl">
		<!--[diy=diysidetop]--><div id="diysidetop" class="area"></div><!--[/diy]-->
		<!--{subtemplate ranklist/side_left}-->
		<!--[diy=diysidebottom]--><div id="diysidebottom" class="area"></div><!--[/diy]-->
	</div>
</div>
</div>

<!--[diy=diyranklistbottom]--><div id="diyranklistbottom" class="area"></div><!--[/diy]-->

    		  	  		  	  		     	  			     		   		     		       	  		 	    		   		     		       	  		      		   		     		       	 	   	    		   		     		       	  	 	     		   		     		       	  	       		   		     		       	 	   	    		   		     		       	  	       		   		     		       	  	 		    		   		     		       	 	   	    		   		     		       	  		      		   		     		       	  		 	    		 	      	  		  	  		     	
<!--{template common/footer}-->