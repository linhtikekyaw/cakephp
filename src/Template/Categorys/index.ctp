<?php echo $this->Html->script(array('jquery-git.js','jquery.mockjax.js','bootstrap.min.js','bootstrap-editable.js')); ?>
<?php echo $this->Html->css(array('bootstrap-editable.css','bootstrap-combined.min.css')); ?>
<?php echo $this->Html->script('Categorys.js'); ?>
<div class="users form">
<?php echo $this->Form->create(null, array(
    'url' => array('controller' => 'categorys', 'action' => 'add')
));
?>
  <fieldset>
        <?= $this->Form->input('type') ?>
   </fieldset>
<?= $this->Form->button(__('Add')); ?>
<?= $this->Form->end() ?>
</div>
<div>
<div align="center" class="log"><?= $this->Html->image('ajax-loader.gif') ?></div>
<table id="users" class="table">
<thead>
	<th>id</th>
	<th>category</th>
	<th>Created</th>
	<th>Updated</th>
	<th></th>
</thead>
<?php foreach ($categorys as $category): ?>
<tr>
<td>
<?php echo $category->id; ?>
</td>
<td class="type">
<a href="#" data-pk="<?php echo $category->id; ?>" id="<?php echo $category->id; ?>"><?php echo $category->type; ?></a>
</td>
<td class="<?php echo $category->id; ?>">
<?php echo $this->Time->format($category->created, 'Y-m-d  HH:MM:SS');?>
</td>
<td>
<?php echo $this->Time->format($category->modified, 'Y-m-d  HH:MM:SS');?>
</td>
<td><button id="delete" data-id="<?php echo $category->id; ?>" calss="btn btn-primary">delete</button></td>
</tr>
  <?php endforeach; ?>
</table>
<?php echo $this->Html->link("Home", array('controller' => '','action'=> 'index'), array( 'class' => 'button')); ?>
</div>