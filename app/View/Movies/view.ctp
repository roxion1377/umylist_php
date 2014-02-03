<div class="movies view">
<h2><?php echo __('Movie'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mylist'); ?></dt>
		<dd>
			<?php echo $this->Html->link($movie['Mylist']['name'], array('controller' => 'mylists', 'action' => 'view', $movie['Mylist']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Smid'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['smid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Threadid'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['threadid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Movie'), array('action' => 'edit', $movie['Movie']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Movie'), array('action' => 'delete', $movie['Movie']['id']), null, __('Are you sure you want to delete # %s?', $movie['Movie']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Movies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mylists'), array('controller' => 'mylists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mylist'), array('controller' => 'mylists', 'action' => 'add')); ?> </li>
	</ul>
</div>
