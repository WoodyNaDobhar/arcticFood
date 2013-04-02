<div class="row-fluid">
	<div class="span2">
	</div>
	<div class="span2">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Charity.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Charity.id'))); ?></li>
				<li><?php echo $this->Html->link(__('List Charities'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
	<div class="span4">
		<div class="charities form">
		<?php echo $this->Form->create('Charity', array('enctype' => 'multipart/form-data')); ?>
			<fieldset>
				<legend><?php echo __('Edit Charity'); ?></legend>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('name');
				echo $this->Form->input('description');
				echo $this->Form->input('logo', array('label' => 'Logo', 'type' => 'file'));
				echo $this->Form->input('link');
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>
	<div class="span4">
	</div>
</div>
