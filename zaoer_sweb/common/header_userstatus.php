<?php echo 'QQ:2039074300';exit;?>
<!--{if $_G['uid']}-->

<div id="um" style="display:none">
	<div class="cl">
		<!--{hook/global_usernav_extra1}-->
		<!--{hook/global_usernav_extra2}-->
		<!--{hook/global_usernav_extra3}-->
		<!--{hook/global_usernav_extra4}-->
	</div>
</div>

<!--{elseif !empty($_G['cookie']['loginuser'])}-->

<p style="display:none">
	<strong><a id="loginuser" class="noborder"><!--{echo dhtmlspecialchars($_G['cookie']['loginuser'])}--></a></strong>
	<span class="pipe">|</span><a href="member.php?mod=logging&action=login" onclick="showWindow('login', this.href)">{lang activation}</a>
	<span class="pipe">|</span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
</p>

<!--{elseif !$_G[connectguest]}-->
	<!--{if CURMODULE != 'logging'}-->
		<div style="display:none">
			<div class="avt y"><a href="member.php?mod=logging&action=login" target="_blank"><!--{avatar(0, 'big')}--></a></div>
			<!--{hook/global_login_extra}-->
		</div>
	<!--{/if}-->
<!--{else}-->

<div id="um" style="display:none">
	<div class="avt y"><!--{avatar(0, 'big')}--></div>
	<p>
		<strong class="vwmy qq">{$_G[member][username]}</strong>
		<!--{hook/global_usernav_extra1}-->
		<span class="pipe">|</span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
	</p>
	<p>
		<a href="home.php?mod=spacecp&ac=credit&showcredit=1">{lang credits}: 0</a>
		<span class="pipe">|</span>{lang usergroup}: $_G[group][grouptitle]
	</p>
</div>

<!--{/if}-->