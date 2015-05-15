<?php echo $this->Html->script(array('jquery-git.js','jquery.mockjax.js','bootstrap.min.js','bootstrap-editable.js','jquery.ex-table-filter.js','Products.js','jquery-ean13.min.js')); ?>
<?php echo $this->Html->css(array('bootstrap-editable.css','bootstrap-combined.min.css')); ?>
<div class="users form">
<?php echo $this->Form->create(null, array(
    'url' => array('controller' => 'products', 'action' => 'add')
));
?>
	<?= $this->Form->input('product_code') ?>
	<?= $this->Form->input('name') ?>
	<?= $this->Form->input('price') ?>
	<?= $this->Form->input('sale_price') ?>
	<?= $this->Form->input('purchase_price') ?>
	<?= $this->Form->input('stock') ?>
	<select name="type_id">
			<option selected>select one of these</option>
		<?php foreach($category as $value){ ?>
			<option value="<?php echo $value->id; ?>"><?php echo $value->type; ?></option>
		<?php } ?>
	</select>
	<?= $this->Form->hidden('type', ['value'=>'']); ?>
	<?= $this->Form->button(__('Add')); ?>
	<?= $this->Form->end() ?>
</div>
<div>
<table class="table table-hover data">
<thead>
	<th class="info">id</th>
	<th>barcode</th>
	<th>product_code</th>
	<th>name</th>
	<th>price</th>
	<th>sale_price</th>
	<th>purchase_price</th>
	<th>stock</th>
	<th>type</th>
	<th>Created</th>
	<th>Updated</th>
</thead>
<?php foreach ($products as $product): ?>
<tr class="rows" id="<?php echo $product->id; ?>" style="cursor:pointer; width:400px; background-color:#fff">
<td>
<?php echo $product->id; ?>
</td>
<td>
<canvas class="ean" width="100%" height="75"></canvas>
</td>
<td class="type" value="<?php echo $product->product_code; ?>">
<?php echo $product->product_code; ?>
</td>
<td>
<?php echo $product->name; ?>
</td>
<td>
<?php echo $product->price; ?>
</td>
<td>
<?php echo $product->sale_price; ?>
</td>
<td>
<?php echo $product->purchase_price; ?>
</td>
<td>
<?php echo $product->stock; ?>
</td>
<td>
<?php echo $product->type; ?>
</td>
<td class="<?php echo $product->price; ?>">
<?php echo $this->Time->format($product->created, 'Y-m-d  HH:MM:SS');?>
</td>
<td>
<?php echo $this->Time->format($product->modified, 'Y-m-d  HH:MM:SS');?>
</td>
</tr>
  <?php endforeach; ?>
</table>

<?php echo $this->Html->link("Home", array('controller' => '','action'=> 'index'), array( 'class' => 'button')); ?>

</div>
<script>
 $('table.data').exTableFilter();
</script>