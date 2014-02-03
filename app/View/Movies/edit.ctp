<div class="movies form">
<?php echo $this->Form->create('Movie'); ?>
	<fieldset>
		<legend><?php echo __('Edit Movie'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('mylist_id');
		echo $this->Form->input('smid');
		echo $this->Form->input('threadid');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Movie.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Movie.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Movies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mylists'), array('controller' => 'mylists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mylist'), array('controller' => 'mylists', 'action' => 'add')); ?> </li>
	</ul>
</div>
