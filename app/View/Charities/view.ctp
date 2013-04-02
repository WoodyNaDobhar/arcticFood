<div class="row-fluid">
	<div class="span2">
	</div>
	<div class="span2">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Edit Charity'), array('action' => 'edit', $charity['Charity']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Charity'), array('action' => 'delete', $charity['Charity']['id']), null, __('Are you sure you want to delete # %s?', $charity['Charity']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Charities'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Charity'), array('action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
	<div class="span4">
		<div class="charities view">
		<h2><?php  echo __('Charity'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($charity['Charity']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Name'); ?></dt>
				<dd>
					<?php echo h($charity['Charity']['name']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Description'); ?></dt>
				<dd>
					<?php echo h($charity['Charity']['description']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Logo'); ?></dt>
				<dd>
					<?php echo h($charity['Charity']['logo']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Link'); ?></dt>
				<dd>
					<?php echo h($charity['Charity']['link']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
	</div>
	<div class="span4">
	</div>
</div>
