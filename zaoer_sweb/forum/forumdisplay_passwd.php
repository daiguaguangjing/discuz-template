<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->
<div id="pt" class="bm cl">
	<div class="z"><a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> $navigation</div>
</div>
<div id="ct" class="wp cl">
	<div class="mn zaobm bg0 hm">
		<div class="cl">
			<div class="p15 cl">
			<div class="p15 cl">
			<div class="p15 cl">
				<h3 class="xs2 xi2 mbm mtm">{lang forum_password_require}</h3>
				<div class="o">
					<form method="post" autocomplete="off" action="forum.php?mod=forumdisplay&fid=$_G[fid]&action=pwverify">
						<input type="hidden" name="formhash" value="{FORMHASH}" />
						<input type="password" name="pw" class="px vm" size="25" />
						&nbsp;<button class="pn pnc vm" type="submit" name="loginsubmit" value="true"><strong>{lang submit}</strong></button>
					</form>
				</div>
			</div>
			</div>
			</div>
		</div>
	</div>
</div>
<!--{template common/footer}-->