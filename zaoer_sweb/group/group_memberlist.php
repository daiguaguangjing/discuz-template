<?php echo 'QQ:2039074300';exit;?>
<!--{if $op == 'alluser'}-->
	<!--{if $adminuserlist}-->
		<div class="zaobm bg0 p15 mb10">
			<div class="bm_h cl"><h2>{lang group_admin_member}</h2></div>
			<div class="bm_c">
				<ul class="ml mls cl">
					<!--{loop $adminuserlist $user}-->
					<li>
						<a href="home.php?mod=space&uid=$user[uid]" title="{if $user['level'] == 1}{lang group_moderator_title}{elseif $user['level'] == 2}{lang group_moderator_vice_title}{/if}{if $user['online']} {lang login_normal_mode}{/if}" class="avt" c="1">
						<!--{if $user['level'] == 1}-->
							<em class="gm"></em>
						<!--{elseif $user['level'] == 2}-->
							<em class="gm" style="filter:alpha(opacity=50); opacity: 0.5"></em>
						<!--{/if}-->
						<!--{if $user['online']}-->
							<em class="gol" style="margin-top: 15px;"></em>
						<!--{/if}-->
						<!--{echo avatar($user['uid'], 'small')}-->
						</a>
						<p><a href="home.php?mod=space&uid=$user[uid]">$user[username]</a></p>
					</li>
					<!--{/loop}-->
				</ul>
			</div>
		</div>
	<!--{/if}-->
	<!--{if $staruserlist || $alluserlist}-->
		<div class="zaobm bg0 p15">
			<div class="bm_h cl"><h2>{lang member}</h2></div>
			<div class="bm_c">
				<!--{if $staruserlist}-->
					<ul class="ml mls cl">
						<!--{loop $staruserlist $user}-->
						<li>
							<a href="home.php?mod=space&uid=$user[uid]" title="{lang group_star_member_title}{if $user['online']} {lang login_normal_mode}{/if}" class="avt" c="1">
							<em class="gs"></em>
							<!--{if $user['online']}-->
								<em class="gol"{if $user['level'] <= 3} style="margin-top: 15px;"{/if} title="{lang login_normal_mode}"></em>
							<!--{/if}-->
							<!--{echo avatar($user['uid'], 'small')}-->
							</a>
							<p><a href="home.php?mod=space&uid=$user[uid]">$user[username]</a></p>
						</li>
						<!--{/loop}-->
					</ul>
				<!--{/if}-->
				<!--{if $alluserlist}-->
					<ul class="ml mls cl">
						<!--{loop $alluserlist $user}-->
						<li>
							<a href="home.php?mod=space&uid=$user[uid]" class="avt" c="1"><!--{echo avatar($user['uid'], 'small')}--></a>
							<p><a href="home.php?mod=space&uid=$user[uid]">$user[username]</a></p>
						</li>
						<!--{/loop}-->
					</ul>
				<!--{/if}-->
			</div>
		</div>
	<!--{/if}-->
	<!--{if $multipage}--><div class="pgs cl">$multipage</div><!--{/if}-->
<!--{/if}-->