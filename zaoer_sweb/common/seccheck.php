<?php echo 'QQ:2039074300';exit;?>
{eval
	$sechash = !isset($sechash) ? 'S'.(empty($_G['inajax']) ? '' : 'A'.random(3)).$_G['sid'] : $sechash.random(3);
	$sectpl = str_replace("'", "\'", $sectpl);
}
<!--{if $secqaacheck}-->
	<span id="secqaa_q$sechash"></span>		
	<script type="text/javascript" reload="1">updatesecqaa('q$sechash', '$sectpl', '{$_G[basescript]}::{CURMODULE}');</script>
<!--{/if}-->
<!--{if $seccodecheck}-->
	<span id="seccode_c$sechash"></span>		
	<script type="text/javascript" reload="1">updateseccode('c$sechash', '$sectpl', '{$_G[basescript]}::{CURMODULE}');</script>
<!--{/if}-->