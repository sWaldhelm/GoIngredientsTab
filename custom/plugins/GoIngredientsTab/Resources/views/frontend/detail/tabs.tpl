{extends file='parent:frontend/detail/tabs.tpl'}

{* Tab Title *}
{block name="frontend_detail_tabs_navigation_inner" append}
		<a href="#" class="tab--link has--content" title="ingredients" data-tabName="ingredients">Inhaltstsoffe</a>
{/block}

{* Tab Content *}
{block name="frontend_detail_tabs_content_inner" append}
	<div class="tab--container">
		{* Normal title *}
		<div class="tab--header">
			<a href="#" class="tab--title" title="ingredients">Inhaltsstoffe</a>
		</div>
		{* Title for mobile mode *}
		<div class="tab--preview">
			<a href="#" class="tab--link">Inhaltstoffe</a>
		</div>
		{* FAQ content *}
		<div class="tab--content">
			<div class="content--description">
				<p>Content</p>
			</div>
		</div>
	</div>
{/block}
