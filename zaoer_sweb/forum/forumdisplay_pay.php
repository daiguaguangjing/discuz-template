<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->
<div id="pt" class="bm cl">
	<div class="z"><a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> $navigation</div>
</div>

<div id="ct" class="wp cl">
	<div class="mn">
		<div class="nfl">
			<div class="f_c">
				<h3 class="xs2 xi2 mbm">{lang youneedpay} $paycredits {$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]]['unit']}{$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]]['title']} {lang onlyintoforum}</h3>
				<div class="o">
					<form method="post" autocomplete="off" action="forum.php?mod=forumdisplay&fid=$_G[fid]&action=paysubmit">
						<input type="hidden" name="formhash" value="{FORMHASH}" />
						<button class="pn pnc vm" type="submit" name="loginsubmit" value="true"><strong>{lang confirmyourpay}</strong></button>
						&nbsp;<button class="pn vm" type="button" onclick="history.go(-1)"><strong>{lang cancel}</strong></button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!--{template common/footer}-->