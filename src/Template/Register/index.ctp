<?php echo $this->Html->script(array('jquery-git.js','jquery.mockjax.js','bootstrap.min.js','bootstrap-editable.js','Products.js','register.js','hotkeys.js')); ?>
<div id="register">
  <div id="ticket">
    <h1>Thank You!</h1>
    <table id="list">
      <thead>
		<th>name</th>
		<th>numbers</th>
		<th>price</th>
      </thead>
      <tbody id="entries">
      </tbody>
      <tfoot>
        <tr>
          <th>Total</th>
          <th id="total">$0.00</th>
          <th></th>
        </tr>
        <tr>
          <th>Received</th>
          <th id="total">$0.00</th>
          <th></th>
        </tr>
      </tfoot>
    </table>
  </div>
  <form id="entry">
    <input id="newEntry" autofocus autocomplete="off" placeholder="Product Code">
  </form>
</div>