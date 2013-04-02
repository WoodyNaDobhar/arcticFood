<div class="row-fluid">
	<div class="span1">
	</div>
	<div class="span1">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('New Splash'), array('action' => 'add')); ?></li>
			</ul>
		</div>
	</div>
	<div class="span9">
		<div class="splashes index">
			<h2><?php echo __('Splashes'); ?></h2>
			<table cellpadding="5" cellspacing="5">
			<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('title'); ?></th>
					<th><?php echo $this->Paginator->sort('data'); ?></th>
					<th><?php echo $this->Paginator->sort('image'); ?></th>
					<th><?php echo $this->Paginator->sort('link'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($splashes as $splash): ?>
			<tr>
				<td><?php echo h($splash['Splash']['id']); ?>&nbsp;</td>
				<td><?php echo h($splash['Splash']['title']); ?>&nbsp;</td>
				<td><?php echo h($splash['Splash']['data']); ?>&nbsp;</td>
				<td><?php echo h($splash['Splash']['image']); ?>&nbsp;</td>
				<td><?php echo h($splash['Splash']['link']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $splash['Splash']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $splash['Splash']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $splash['Splash']['id']), null, __('Are you sure you want to delete # %s?', $splash['Splash']['id'])); ?>
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
