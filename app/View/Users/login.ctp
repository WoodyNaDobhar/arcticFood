<div class="row-fluid">
	<div class="span4">
	</div>
	<div class="span4">
		<div id="loginContainer">
			<div class="users form">
			<?php echo $this->Session->flash('auth'); ?>
			<?php echo $this->Form->create('User'); ?>
			    <fieldset>
			        <legend><?php echo __('Login'); ?></legend>
					<?php echo $this->Session->flash(); ?>
			    <?php
			        echo $this->Form->input('username', array('label' => 'Email Address'));
			        echo '<br>';
			        echo $this->Form->input('password');
			    ?>
			    </fieldset>
			<?php echo $this->Form->end(__('Login')); ?>
			</div>
		</div>
	</div>
	<div class="span4">
	</div>
</div>