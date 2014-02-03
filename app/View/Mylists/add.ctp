<div class="mylists form">
<?php echo $this->Form->create('Mylist'); ?>
	<fieldset>
		<legend><?php echo __('Add Mylist'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mylists'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Movies'), array('controller' => 'movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
	</ul>
</div>
