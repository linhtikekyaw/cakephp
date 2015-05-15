<?php echo $this->Form->create(null, array(
    'url' => array('controller' => 'users', 'action' => 'logout')
));
?>
<?= $this->Form->button(__('Logout')); ?>
<?= $this->Form->end() ?>