<div class="row-fluid">
	<div class="span2">
	</div>
	<div class="span2">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Edit Splash'), array('action' => 'edit', $splash['Splash']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Splash'), array('action' => 'delete', $splash['Splash']['id']), null, __('Are you sure you want to delete # %s?', $splash['Splash']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Splashes'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Splash'), array('action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
	<div class="span4">
		<div class="splashes view">
		<h2><?php  echo __('Splash'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($splash['Splash']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Title'); ?></dt>
				<dd>
					<?php echo h($splash['Splash']['title']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Data'); ?></dt>
				<dd>
					<?php echo h($splash['Splash']['data']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Image'); ?></dt>
				<dd>
					<?php echo h($splash['Splash']['image']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Link'); ?></dt>
				<dd>
					<?php echo h($splash['Splash']['link']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
	</div>
	<div class="span4">
	</div>
</div>
