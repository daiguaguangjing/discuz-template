<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->
<div id="pt" class="bm cl">
	<div class="z">
		<a href="./" class="nvhm" title="{lang homepage}">$_G['setting']['bbname']</a> <em>&rsaquo;</em>
		<a href="home.php?mod=medal">{lang medals}</a>
	</div>
</div>
<div class="bg0 zaobm">
<div id="ct" class="ct2_a wp cl">
	<div class="mn">
		<div class="bm bw0">
			<h1 class="mt">
				<!--{if $_GET[action] == 'log'}-->{lang my_medals}
				<!--{else}-->{lang medals_center}<!--{/if}-->
			</h1>

			<!--{if empty($_GET[action])}-->
				<!--{if $medallist}-->
					<!--{if $medalcredits}-->
						<div class="tbmu">
							{lang you_have_now}
							<!--{eval $i = 0;}-->
							<!--{loop $medalcredits $id}-->
								<!--{if $i != 0}-->, <!--{/if}-->{$_G['setting']['extcredits'][$id][img]} {$_G['setting']['extcredits'][$id][title]} <span class="xi1"><!--{echo getuserprofile('extcredits'.$id);}--></span> {$_G['setting']['extcredits'][$id][unit]}
								<!--{eval $i++;}-->
							<!--{/loop}-->
						</div>
					<!--{/if}-->
					<ul class="mtm mgcl cl">
						<!--{loop $medallist $key $medal}-->
							<li>
								<div id="medal_$medal[medalid]_menu" class="tip tip_4" style="display:none">
									<div class="tip_horn"></div>
									<div class="tip_c" style="text-align:left">
										<p>$medal[description]</p>
										<p class="mtn">
											<!--{if $medal[expiration]}-->
												{lang expire} $medal[expiration] {lang days},
											<!--{/if}-->
											<!--{if $medal[permission] && !$medal['price']}-->
												$medal[permission]
											<!--{else}-->
												<!--{if $medal[type] == 0}-->
													{lang medals_type_0}
												<!--{elseif $medal[type] == 1}-->
													<!--{if $medal['price']}-->
														<!--{if {$_G['setting']['extcredits'][$medal[credit]][unit]}}-->
															{$_G['setting']['extcredits'][$medal[credit]][title]} <strong class="xi1 xw1 xs2">$medal[price]</strong> {$_G['setting']['extcredits'][$medal[credit]][unit]}
														<!--{else}-->
															<strong class="xi1 xw1 xs2">$medal[price]</strong> {$_G['setting']['extcredits'][$medal[credit]][title]}
														<!--{/if}-->
													<!--{else}-->
														{lang medals_type_1}
													<!--{/if}-->
												<!--{elseif $medal[type] == 2}-->
													{lang medals_type_2}
												<!--{/if}-->
											<!--{/if}-->
										</p>
									</div>
								</div>
								<div id="medal_$medal['medalid']" class="mg_img" onmouseover="showMenu({'ctrlid':this.id, 'menuid':'medal_$medal['medalid']_menu', 'pos':'12!'});"><img src="$medal['image']" alt="$medal['name']" style="margin-top: 20px;width:auto; height: auto;" /></div>
								<p class="xw1">$medal[name]</p>
								<p>
									<!--{if is_array($membermedal) && in_array($medal['medalid'], $membermedal) && $medal['type'] != 1}-->
										{lang space_medal_have}
									<!--{else}-->
										<!--{if $medal[type] && $_G['uid']}-->
											<!--{if is_array($mymedals) && in_array($medal['medalid'], $mymedals)}-->
												<!--{if $medal['price']}-->
													{lang space_medal_purchased}
												<!--{else}-->
													<!--{if $medal[type] == 2}-->
														{lang space_medal_applied}
													<!--{else}-->
														{lang space_medal_receive}
													<!--{/if}-->
												<!--{/if}-->
											<!--{else}-->
												<a href="javascript:;" onclick="showWindow('medal', 'home.php?mod=medal&action=confirm&medalid=$medal[medalid]')" class="xi2">
													<!--{if $medal['price']}-->
														{lang space_medal_buy}
													<!--{else}-->
														<!--{if $medal[type] == 2}-->
															{lang medals_apply}
														<!--{else}-->
															{lang medals_draw}
														<!--{/if}-->
													<!--{/if}-->
												</a>
											<!--{/if}-->
										<!--{/if}-->
									<!--{/if}-->
								</p>
							</li>
						<!--{/loop}-->
					</ul>
				<!--{else}-->
					<!--{if $medallogs}-->
						<p class="emp">{lang medals_nonexistence}</p>
					<!--{else}-->
						<p class="emp">{lang medals_noavailable}</p>
					<!--{/if}-->
				<!--{/if}-->

				<!--{if $lastmedals}-->
					<h3 class="tbmu">{lang medals_record}</h3>
					<ul class="el ptm pbw mbw">
						<!--{loop $lastmedals $lastmedal}-->
						<li>
							<a href="home.php?mod=space&uid=$lastmedal[uid]" class="t"><!--{avatar($lastmedal['uid'], 'small')}--></a>
							<a href="home.php?mod=space&uid=$lastmedal[uid]" class="xi2">$lastmedalusers[$lastmedal[uid]][username]</a> {lang medals_message1} $lastmedal[dateline] {lang medals_message2} <strong>$medallist[$lastmedal['medalid']]['name']</strong> {lang medals}
						</li>
						<!--{/loop}-->
					</ul>
				<!--{/if}-->
			<!--{elseif $_GET[action] == 'log'}-->

				<!--{if $mymedals}-->
					<ul class="mtm mgcl cl">
						<!--{loop $mymedals $mymedal}-->
						<li>
							<div class="mg_img"><img src="$mymedal['image']" alt="$mymedal['name']" style="margin-top: 20px;width:auto; height: auto;" /></div>
							<p><strong>$mymedal[name]</strong></p>
						</li>
						<!--{/loop}-->
					</ul>
				<!--{/if}-->

				<!--{if $medallogs}-->
					<h3 class="tbmu">{lang medals_record}</h3>
					<ul class="el ptm pbw mbw">
						<!--{loop $medallogs $medallog}-->
						<li style="padding-left:10px;">
							<!--{if $medallog['type'] == 2 || $medallog['type'] == 3}-->
								{lang medals_message3} $medallog[dateline] {lang medals_message4} <strong>$medallog[name]</strong> {lang medals},<!--{if $medallog['type'] == 2}-->{lang medals_operation_2}<!--{elseif $medallog['type'] == 3}-->{lang medals_operation_3}<!--{/if}-->
							<!--{elseif $medallog['type'] != 2 && $medallog['type'] != 3}-->
								{lang medals_message3} $medallog[dateline] {lang medals_message5} <strong>$medallog[name]</strong> {lang medals},<!--{if $medallog[expiration]}-->{lang expire}: $medallog[expiration]<!--{else}-->{lang medals_noexpire}<!--{/if}-->
							<!--{/if}-->
						</li>
						<!--{/loop}-->
					</ul>
					<!--{if $multipage}--><div class="pgs cl mtm">$multipage</div><!--{/if}-->
				<!--{else}-->
					<p class="emp">{lang medals_nonexistence_own}</p>
				<!--{/if}-->
			<!--{/if}-->
		</div>
	</div>
	<div class="appl">
		<div class="tbn">
			<h2 class="mt bbda">{lang medals}</h2>
			<ul>
				<li{if empty($_GET[action])} class="a"{/if}><a href="home.php?mod=medal">{lang medals_center}</a></li>
				<li{if $_GET[action] == 'log'} class="a"{/if}><a href="home.php?mod=medal&action=log">{lang my_medals}</a></li>
				<!--{hook/medal_nav_extra}-->
			</ul>
		</div>
	</div>
</div>
</div>
<!--{template common/footer}-->