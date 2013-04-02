<div class="row-fluid">
	<div class="span2">
	</div>
	<div class="span2">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
		
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Testimonial.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Testimonial.id'))); ?></li>
				<li><?php echo $this->Html->link(__('List Testimonials'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
	<div class="span4">
		<div class="testimonial form">
		<?php echo $this->Form->create('Testimonial'); ?>
			<fieldset>
				<legend><?php echo __('Edit Testimonial'); ?></legend>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('quote');
				echo $this->Form->input('quoter');
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>
	<div class="span4">
	</div>
</div>
