<div class="row-fluid">
	<div class="span1">
	</div>
	<div class="span1">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
			</ul>
		</div>
	</div>
	<div class="span9">
		<div class="users index">
			<h2><?php echo __('Users'); ?></h2>
			<table cellpadding="5" cellspacing="5">
			<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('username'); ?></th>
					<th><?php echo $this->Paginator->sort('type'); ?></th>
					<th><?php echo $this->Paginator->sort('name_first'); ?></th>
					<th><?php echo $this->Paginator->sort('name_last'); ?></th>
					<th><?php echo $this->Paginator->sort('street_1'); ?></th>
					<th><?php echo $this->Paginator->sort('street_2'); ?></th>
					<th><?php echo $this->Paginator->sort('city'); ?></th>
					<th><?php echo $this->Paginator->sort('state'); ?></th>
					<th><?php echo $this->Paginator->sort('zip'); ?></th>
					<th><?php echo $this->Paginator->sort('country_id'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($users as $user): ?>
			<tr>
				<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['type']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['name_first']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['name_last']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['street_1']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['street_2']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['city']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['state']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['zip']); ?>&nbsp;</td>
				<td><?php echo h($user['Country']['country']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
			</table>
			<p>
			<?php
			echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
			));
			?>	</p>
			<div class="paging">
			<?php
				echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
			?>
			</div>
		</div>
	</div>
</div>
