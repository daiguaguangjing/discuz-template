<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->
	<!--{subtemplate home/spacecp_header}-->
			<!--{hook/spacecp_avatar_top}-->
			<script type="text/javascript">
				function updateavatar() {
					window.location.href = document.location.href.replace('&reload=1', '') + '&reload=1';
				}
				<!--{if !$reload}-->
				saveUserdata('avatar_redirect', document.referrer);
				<!--{/if}-->
			</script>
			<form id="avatarform" enctype="multipart/form-data" method="post" autocomplete="off" action="home.php?mod=spacecp&ac=avatar&ref">
				<table cellspacing="0" cellpadding="0" class="tfm">
					<caption>
						<span id="retpre" class="y xi2"></span>
						<h2 class="xs2">{lang current_my_space}</h2>
						<p>{lang setting_avatar_message}</p>
					</caption>
					<tr>
						<td>
							<!--{avatar($space['uid'], 'big')}-->
						</td>
					</tr>
				</table>

				<table cellspacing="0" cellpadding="0" class="tfm">
					<caption>
						<h2 class="xs2">{lang setting_my_new_avatar}</h2>
						<p>{lang setting_my_new_avatar_message}</p>
					</caption>
					<tr>
						<td>
							<!--{if !empty($_GET['old'])}-->
								<script type="text/javascript">document.write(AC_FL_RunContent('<!--{echo implode("','", $uc_avatarflash);}-->'));</script>
							<!--{else}-->							
								<!--{template home/spacecp_avatar_body}-->
							<!--{/if}-->							
						</td>
					</tr>
				</table>
				<!--{if empty($_GET['old'])}-->
				    <a href="home.php?mod=spacecp&ac=avatar&old=1" class="xg1">{lang setting_my_new_avatar_old}</a>				
				<!--{/if}-->
				<input type="hidden" name="formhash" value="{FORMHASH}" />
			</form>
			<!--{hook/spacecp_avatar_bottom}-->
		</div>
	</div>
	<script type="text/javascript">
		var redirecturl = loadUserdata('avatar_redirect');
		if(redirecturl) {
			document.getElementById('retpre').innerHTML = '<a href="' + redirecturl + '">{lang previous_page}</a>';
		}
	</script>
	<div class="appl">
		<!--{subtemplate home/spacecp_footer}-->
	</div>
</div>
</div>
<!--{template common/footer}-->