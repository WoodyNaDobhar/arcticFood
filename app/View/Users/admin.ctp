<div class="row-fluid">
	<div class="span2">
	</div>
	<div class="span2">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
		
				<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
	<div class="span4">
		<h2>Admin Links</h2>
		User management: <?php echo $this->Html->link('here', array('action' => 'index')); ?><br>
		Splash management: <?php echo $this->Html->link('here', array('controller' => 'Splashes', 'action' => 'index')); ?><br>
		Charaties management: <?php echo $this->Html->link('here', array('controller' => 'Charities', 'action' => 'index')); ?><br>
		Testimonials management: <?php echo $this->Html->link('here', array('controller' => 'Testimonials', 'action' => 'index')); ?><br>
	</div>
	<div class="span4">
	</div>
</div>
