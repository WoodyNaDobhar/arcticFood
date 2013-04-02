<div class="row-fluid">
	<div class="span2">
	</div>
	<div class="span2">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
	<div class="span4">
		<div class="users view">
		<h2><?php  echo __('User'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($user['User']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Username'); ?></dt>
				<dd>
					<?php echo h($user['User']['username']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Password'); ?></dt>
				<dd>
					<?php echo h($user['User']['password']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Type'); ?></dt>
				<dd>
					<?php echo h($user['User']['type']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Name First'); ?></dt>
				<dd>
					<?php echo h($user['User']['name_first']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Name Last'); ?></dt>
				<dd>
					<?php echo h($user['User']['name_last']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Street 1'); ?></dt>
				<dd>
					<?php echo h($user['User']['street_1']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Street 2'); ?></dt>
				<dd>
					<?php echo h($user['User']['street_2']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('City'); ?></dt>
				<dd>
					<?php echo h($user['User']['city']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('State'); ?></dt>
				<dd>
					<?php echo h($user['User']['state']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Country'); ?></dt>
				<dd>
					<?php echo h($user['Country']['country']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Created'); ?></dt>
				<dd>
					<?php echo h($user['User']['created']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Modified'); ?></dt>
				<dd>
					<?php echo h($user['User']['modified']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
	</div>
	<div class="span4">
	</div>
</div>

