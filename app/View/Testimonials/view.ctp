<div class="row-fluid">
	<div class="span2">
	</div>
	<div class="span2">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Edit Testimonial'), array('action' => 'edit', $testimonial['Testimonial']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Testimonial'), array('action' => 'delete', $testimonial['Testimonial']['id']), null, __('Are you sure you want to delete # %s?', $testimonial['Testimonial']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Testimonials'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Testimonial'), array('action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
	<div class="span4">
		<div class="testimonial view">
		<h2><?php  echo __('Testimonial'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($testimonial['Testimonial']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Quote'); ?></dt>
				<dd>
					<?php echo h($testimonial['Testimonial']['quote']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Quoter'); ?></dt>
				<dd>
					<?php echo h($testimonial['Testimonial']['quoter']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
	</div>
	<div class="span4">
	</div>
</div>
