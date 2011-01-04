<?php echo $this->element('seo_view_head', array('plugin' => 'seo')); ?>
<div class="seoMetaTags index">
	<h2><?php __('Seo Meta Tags');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('seo_uri_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('content');?></th>
			<th><?php echo $this->Paginator->sort('is_http_equiv');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($seoMetaTags as $seoMetaTag):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $this->Html->link($seoMetaTag['SeoUri']['uri'], array('controller' => 'seo_uris', 'action' => 'view', $seoMetaTag['SeoUri']['id'])); ?>
		</td>
		<td><?php echo $seoMetaTag['SeoMetaTag']['name']; ?>&nbsp;</td>
		<td><?php echo $seoMetaTag['SeoMetaTag']['content']; ?>&nbsp;</td>
		<td><?php echo $seoMetaTag['SeoMetaTag']['is_http_equiv']; ?>&nbsp;</td>
		<td><?php echo $this->Time->niceShort($seoMetaTag['SeoMetaTag']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $seoMetaTag['SeoMetaTag']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $seoMetaTag['SeoMetaTag']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $seoMetaTag['SeoMetaTag']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $seoMetaTag['SeoMetaTag']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<?php echo $this->element('seo_paging', array('plugin' => 'seo')); ?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Seo Meta Tag', true), array('action' => 'add')); ?></li>
	</ul>
</div>