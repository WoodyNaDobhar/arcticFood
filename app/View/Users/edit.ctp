<div class="row-fluid">
	<div class="span2">
	</div>
	<div class="span2">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
				<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
	<div class="span4">
		<div class="users form">
		<?php echo $this->Form->create('User'); ?>
			<fieldset>
				<legend><?php echo __('Edit User'); ?></legend>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('username');
				echo $this->Form->input('type');
				echo $this->Form->input('name_first');
				echo $this->Form->input('name_last');
				echo $this->Form->input('street_1');
				echo $this->Form->input('street_2');
				echo $this->Form->input('city');
				echo $this->Form->input('state');
				echo $this->Form->input('zip');
				echo $this->Form->input('country_id');
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>
	<div class="span4">
	</div>
</div>
