<div class="row-fluid">
	<div class="span2">
	</div>
	<div class="span2">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
		
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Splash.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Splash.id'))); ?></li>
				<li><?php echo $this->Html->link(__('List Splashes'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
	<div class="span4">
		<div class="splashes form">
		<?php echo $this->Form->create('Splash', array('enctype' => 'multipart/form-data')); ?>
			<fieldset>
				<legend><?php echo __('Edit Splash'); ?></legend>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('title');
				echo $this->Form->input('data');
				echo $this->Form->input('image', array('label' => 'Image', 'type' => 'file'));
				echo $this->Form->input('link');
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>
	<div class="span4">
	</div>
</div>
