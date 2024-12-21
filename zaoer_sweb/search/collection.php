<?php echo 'QQ:2039074300';exit;?>
<!--{subtemplate search/header}-->
<div id="ct" class="cl w">
	<div class="searchmw">
		
	<form class="searchform" method="post" autocomplete="off" action="search.php?mod=collection" onsubmit="if($('scform_srchtxt')) searchFocus($('scform_srchtxt'));">
		<input type="hidden" name="formhash" value="{FORMHASH}" />
		<!--{subtemplate search/pubsearch}-->
		<!--{hook/collection_top}-->

	</form>

	<!--{if !empty($searchid) && submitcheck('searchsubmit', 1)}-->
		<!--{subtemplate search/collection_list}-->
	<!--{/if}-->
	
	</div>
</div>
<!--{hook/collection_bottom}-->

<!--{subtemplate search/footer}-->