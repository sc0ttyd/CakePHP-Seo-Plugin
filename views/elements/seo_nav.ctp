<div class="seo_nav actions">
	<h3><?php __('Navigation'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Seo Redirects', true), array('controller' => 'seo_redirects', 'action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Seo Meta Tags', true), array('controller' => 'seo_meta_tags', 'action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Seo Uris', true), array('controller' => 'seo_uris', 'action' => 'index')); ?> </li>
	</ul>
</div>