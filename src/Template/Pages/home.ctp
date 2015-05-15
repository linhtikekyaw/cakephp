<div class="users form">

<?php echo $this->Html->link("Products", array('controller' => 'products','action'=> 'index'), array( 'class' => 'button')); ?>
<?php echo $this->Html->link("Categorys", array('controller' => 'categorys','action'=> 'index'), array( 'class' => 'button')); ?>
</div>
<table>
<thead>
	<th>lin</th>
	<th>lin</th>
	<th>lin</th>
	<th>lin</th>
</thead>
<tbody>
	<td>hello</td>
	<td>hello</td>
	<td>hello</td>
	<td>hello</td>
</tbody>
</table>
<?php echo $this->Form->create(null, array(
    'url' => array('controller' => 'users', 'action' => 'logout')
));
?>
<?= $this->Form->button(__('Logout')); ?>
<?= $this->Form->end() ?>