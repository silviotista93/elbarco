<!-- Block search module TOP -->
<div class="block-search  dropdown js-dropdown">
	<span class="search-icon" data-toggle="dropdown">{l s='Search' mod='ps_searchbar'}</span>
	<div id="search_widget" class="search_top dropdown-menu" data-search-controller-url="{$search_controller_url}">
		<form method="get" action="{$search_controller_url}">
			<input type="hidden" name="controller" value="search">
			<input class="text_input" type="text" name="s" value="{$search_string}" placeholder="{l s='Search our catalog' d='Shop.Theme.Catalog'}">
			<button type="submit">
				<span class="fa fa-search"></span>
			</button>
		</form>
	</div>
</div>

<!-- /Block search module TOP -->