<div class="mylists view">
<h2><?php echo __('Mylist'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mylist['Mylist']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($mylist['Mylist']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($mylist['Mylist']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($mylist['Mylist']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mylist'), array('action' => 'edit', $mylist['Mylist']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mylist'), array('action' => 'delete', $mylist['Mylist']['id']), null, __('Are you sure you want to delete # %s?', $mylist['Mylist']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mylists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mylist'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movies'), array('controller' => 'movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Movies'); ?></h3>
	<?php if (!empty($mylist['Movie'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Mylist Id'); ?></th>
		<th><?php echo __('Smid'); ?></th>
		<th><?php echo __('Threadid'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mylist['Movie'] as $movie): ?>
		<tr>
			<td><?php echo $movie['id']; ?></td>
			<td><?php echo $movie['mylist_id']; ?></td>
			<td><?php echo $movie['smid']; ?></td>
			<td><?php echo $movie['threadid']; ?></td>
			<td><?php echo $movie['created']; ?></td>
			<td><?php echo $movie['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'movies', 'action' => 'view', $movie['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'movies', 'action' => 'edit', $movie['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'movies', 'action' => 'delete', $movie['id']), null, __('Are you sure you want to delete # %s?', $movie['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
