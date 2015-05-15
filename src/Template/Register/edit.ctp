<?php echo $this->Html->script(array('jquery-git.js','jquery.mockjax.js','bootstrap.min.js','bootstrap-editable.js','Products.js')); ?>
<?php echo $this->Html->css(array('bootstrap-editable.css','bootstrap-combined.min.css')); ?>
<div class="users form">
<?php echo $this->Form->create(null, array(
    'url' => array('controller' => 'products', 'action' => 'add')
));
?>
		<?= $this->Form->hidden('id', ['value'=>$product->id]); ?>
		<?= $this->Form->hidden('type_id', ['value'=>$product->type_id]); ?>
        <?= $this->Form->input('product_code',['value' => sprintf("%011d",$product->product_code)]) ?>
         <?= $this->Form->input('price',['value' => $product->price]) ?>
          <?= $this->Form->input('sale_price',['value' => $product->sale_price]) ?>
           <?= $this->Form->input('purchase_price',['value' => $product->purchase_price]) ?>
            <?= $this->Form->input('stock',['value' => $product->stock]) ?>
            <select name="type_id">
             	<?php foreach($category as $value){ ?>
					<option value="<?php echo $value->id; ?>" <?php if($product->type_id == $value->id){ echo "selected"; }?>><?php echo $value->type; ?></option>
				<?php } ?>
			</select>
			<?= $this->Form->hidden('type', ['value'=>$product->type]); ?>
<?= $this->Form->button(__('Save')); ?>
<?= $this->Form->end() ?>
</div>
<p><?php echo '<a href="'.$refer.'">Back to previous page</a>'; ?></p>