<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->

<!--{if $_GET['op'] == 'delete'}-->
	<!--{if !$_G[inajax]}-->
		<div id="pt" class="bm cl">
			<div class="z"><a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em> <a href="home.php">$_G[setting][navs][4][navname]</a></div>
		</div>
		<div id="ct" class="ct2_a wp cl">
			<div class="mn">
				<div class="bm bw0">
	<!--{/if}-->
	<h3 class="flb">
		<em id="return_$_GET[handlekey]">{lang delete_log}</em>
		<!--{if $_G[inajax]}--><span><a href="javascript:;" onclick="hideWindow('$_GET[handlekey]');" class="flbc" title="{lang close}">{lang close}</a></span><!--{/if}-->
	</h3>
	<form method="post" autocomplete="off" id="doingform_{$doid}_{$id}" name="doingform" action="home.php?mod=spacecp&ac=doing&op=delete&doid=$doid&id=$id">
		<!--{if $_G[inajax]}--><input type="hidden" name="handlekey" value="$_GET[handlekey]" /><!--{/if}-->
		<input type="hidden" name="referer" value="{echo dreferer()}" />
		<input type="hidden" name="formhash" value="{FORMHASH}" />
		<div class="c">{lang determine_delete_doing}</div>
		<p class="o pns">
			<button name="deletesubmit" type="submit" class="pn pnc" value="true"><strong>{lang determine}</strong></button>
		</p>
	</form>
	<!--{if !$_G[inajax]}-->
			</div>
		</div>
		<div class="appl"><!--{subtemplate common/userabout}--></div>
	</div>
	<!--{/if}-->
<!--{elseif $_GET['op'] == 'spacenote'}-->
	<!--{if $space[spacenote]}-->$space[spacenote]<!--{/if}-->
<!--{elseif $_GET['op'] == 'docomment' || $_GET['op'] == 'getcomment'}-->
	<!--{if helper_access::check_module('doing')}-->
	<div id="{$_GET[key]}_form_{$doid}_{$id}">
		<form id="{$_GET[key]}_docommform_{$doid}_{$id}" method="post" autocomplete="off" action="home.php?mod=spacecp&ac=doing&op=comment&doid=$doid&id=$id" {if $_G[inajax]}onsubmit="ajaxpost(this.id, 'return_$_GET[handlekey]');"{/if} class="pns" style="margin: 5px 0 0;">
			<span id="{$_GET[key]}_form_{$doid}_{$id}_face" onclick="showFace(this.id, '{$_GET[key]}_form_{$doid}_{$id}_t');return false;" class="cur1"><img src="{IMGDIR}/facelist.gif" alt="facelist" class="vm" /></span>
			<textarea name="message" id="{$_GET[key]}_form_{$doid}_{$id}_t" cols="40" class="px pts" oninput="resizeTx(this);" onpropertychange="resizeTx(this);" onkeyup="strLenCalc(this, '{$_GET[key]}_form_{$doid}_{$id}_limit')" onkeydown="ctrlEnter(event, '{$_GET[key]}_replybtn_{$doid}_{$id}');"></textarea>&nbsp;
			<input type="hidden" name="commentsubmit" value="true" />
			<button type="submit" name="do_button" id="{$_GET[key]}_replybtn_{$doid}_{$id}" class="pn" value="true"><em>{lang reply}</em></button>
			<!--{if $_G[inajax]}--><input type="hidden" name="handlekey" value="$_GET[handlekey]" /><!--{/if}-->
			<a name="btncancel" href="javascript:;" onclick="docomment_form_close($doid, $id, '$_GET[key]');">{lang cancel}</a>
			<input type="hidden" name="formhash" value="{FORMHASH}" />
			<div id="{$_GET[key]}_form_{$doid}_{$id}_t_limit" class="mtn" style="display: none;">{lang spacecp_doing_message1} <span id="{$_GET[key]}_form_{$doid}_{$id}_limit">200</span> {lang spacecp_doing_message2}</div>
		</form>
		<span id="return_$_GET[handlekey]"></span>
	</div>
	<script type="text/javascript">
		function succeedhandle_$_GET[handlekey](url, msg, values) {
			docomment_get(values['doid'], '$_GET[key]');
		}
	</script>
	<!--{/if}-->
	<!--{if $_GET['op'] == 'getcomment'}-->
		<!--{template home/space_doing_li}-->
	<!--{/if}-->

<!--{else}-->

<div id="content">
	<!--{if helper_access::check_module('doing')}-->
	<!--{template home/space_doing_form}-->
	<!--{/if}-->
</div>

<!--{/if}-->

    		  	  		  	  		     	  		      		   		     		       	   		     		   		     		       	  	  	    		   		     		       	  	 		    		   		     		       	  		      		   		     		       	 				 	    		   		     		       	  	 	     		   		     		       	  		 	    		   		     		       	 	  	     		   		     		       	  	  	    		   		     		       	  	 	     		   		     		       	 			  	    		   		     		       	  	 		    		   		     		       	 	  	     		   		     		       	 					     		   		     		       	 				 	    		   		     		       	  		      		   		     		       	 					     		   		     		       	 	  	     		   		     		       	 			 	     		   		     		       	 					     		   		     		       	  	  	    		   		     		       	  		 	    		   		     		       	 	  	     		   		     		       	 			 	     		   		     		       	  	 		    		   		     		       	  	       		   		     		       	  		      		   		     		       	  		      		   		     		       	  	 	     		   		     		       	  			     		   		     		       	 			 		    		   		     		       	  	 		    		   		     		       	  		 	    		   		     		       	  		 	    		   		     		       	  	 	     		 	      	  		  	  		     	
<!--{template common/footer}-->